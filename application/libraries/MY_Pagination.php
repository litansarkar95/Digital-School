<?php
defined("BASEPATH") or exit("No direct script access allowed");

class MY_Pagination
{
    protected $CI;

    protected $per_page = 10;

    protected $total_rows = 0;

    protected $current_page = 1;

    protected $total_pages = 1;

    protected $action = "";
    protected $label = 'items';

    protected $page_field = "page";

    public function __construct()
    {
        $this->CI = &get_instance();

        $this->CI->load->library("security");
    }

    public function initialize($config = [])
    {
        if (isset($config["per_page"])) {
            $this->per_page = max(1, (int) $config["per_page"]);
        }

        if (isset($config["total_rows"])) {
            $this->total_rows = max(0, (int) $config["total_rows"]);
        }

        if (isset($config["action"])) {
            $this->action = $config["action"];
        }

        if (isset($config["page_field"])) {
            $this->page_field = $config["page_field"];
        }
        if (isset($config['label'])) {
    $this->label = $config['label'];
}

        $this->total_pages =
            $this->total_rows > 0
                ? (int) ceil($this->total_rows / $this->per_page)
                : 1;

        $page = (int) $this->CI->input->post($this->page_field);

        if ($page < 1) {
            $page = 1;
        }

        if ($page > $this->total_pages) {
            $page = $this->total_pages;
        }

        $this->current_page = $page;

        return $this;
    }

    public function current_page()
    {
        return $this->current_page;
    }

    public function per_page()
    {
        return $this->per_page;
    }

    public function total_rows()
    {
        return $this->total_rows;
    }

    public function total_pages()
    {
        return $this->total_pages;
    }

    public function offset()
    {
        return ($this->current_page - 1) * $this->per_page;
    }

    public function start()
    {
        if ($this->total_rows <= 0) {
            return 0;
        }

        return $this->offset() + 1;
    }

    public function end()
    {
        return min(
            $this->offset() + $this->per_page,

            $this->total_rows
        );
    }

    protected function page_range()
    {
        $pages = [];

        if ($this->total_pages <= 7) {
            for ($i = 1; $i <= $this->total_pages; $i++) {
                $pages[] = $i;
            }

            return $pages;
        }

        $pages[] = 1;

        if ($this->current_page > 4) {
            $pages[] = "dots";
        }

        $start = max(2, $this->current_page - 1);

        $end = min($this->total_pages - 1, $this->current_page + 1);

        if ($this->current_page <= 3) {
            $start = 2;

            $end = 4;
        }

        if ($this->current_page >= $this->total_pages - 2) {
            $start = $this->total_pages - 3;

            $end = $this->total_pages - 1;
        }

        for ($i = $start; $i <= $end; $i++) {
            if ($i > 1 && $i < $this->total_pages) {
                $pages[] = $i;
            }
        }

        if ($this->current_page < $this->total_pages - 3) {
            $pages[] = "dots";
        }

        $pages[] = $this->total_pages;

        return $pages;
    }

    protected function csrf_field()
    {
        if (!isset($this->CI->security)) {
            return "";
        }

        $name = $this->CI->security->get_csrf_token_name();

        $hash = $this->CI->security->get_csrf_hash();

        return '<input type="hidden" name="' .
            html_escape($name) .
            '" value="' .
            html_escape($hash) .
            '">';
    }

    protected function page_form($page, $label, $class = "", $disabled = false)
    {
        $action = html_escape($this->action);

        $field = html_escape($this->page_field);

        $page = (int) $page;

        $disabled_attribute = $disabled ? " disabled" : "";

        $active_class = $class !== "" ? " " . $class : "";

        return '

            <form
                method="post"
                action="' .
            $action .
            '"
                class="pagination-page-form"
            >

                ' .
            $this->csrf_field() .
            '<input
                    type="hidden"
                    name="' .
            $field .
            '"
                    value="' .
            $page .
            '"
                >

                <button
                    type="submit"
                    class="page-btn' .
            $active_class .
            '"' .
            $disabled_attribute .
            '
                >
                    ' .
            $label .
            '
                </button>

            </form>

        ';
    }

    public function create_links()
    {

        if ($this->total_rows <= 0 || $this->total_pages <= 1) {
            return "";
        }

        $html = '<div class="pagination-buttons">';

        if ($this->current_page <= 1) {
            $html .= '

                <button
                    type="button"
                    class="page-btn page-disabled"
                    disabled
                >
                    <i class="fa fa-chevron-left"></i>
                </button>

            ';
        } else {
            $html .= $this->page_form(
                $this->current_page - 1,
                '<i class="fa fa-chevron-left"></i>'
            );
        }
        foreach ($this->page_range() as $page) {
            if ($page === "dots") {
                $html .= '

                    <span class="page-dots">
                        ...
                    </span>

                ';

                continue;
            }

            if ($page == $this->current_page) {
                $html .= $this->page_form($page, $page, "page-active");
            } else {
                $html .= $this->page_form($page, $page);
            }
        }

        if ($this->current_page >= $this->total_pages) {
            $html .= '

                <button
                    type="button"
                    class="page-btn page-disabled"
                    disabled
                >
                    <i class="fa fa-chevron-right"></i>
                </button>

            ';
        } else {
            $html .= $this->page_form(
                $this->current_page + 1,
                '<i class="fa fa-chevron-right"></i>'
            );
        }

        $html .= "</div>";

        return $html;
    }

public function get_data()
{
    return array(
        'total_rows'   => $this->total_rows(),
        'per_page'     => $this->per_page(),
        'current_page' => $this->current_page(),
        'offset'       => $this->offset(),
        'start'        => $this->start(),
        'end'          => $this->end(),
        'pagination'   => $this->create_links(),
        'label'        => $this->label
    );
}
}
