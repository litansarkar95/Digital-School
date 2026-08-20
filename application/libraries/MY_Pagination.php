<?php defined("BASEPATH") or exit("No direct script access allowed");

class MY_Pagination {
    protected $CI;
    protected $per_page = 10;
    protected $total_rows = 0;
    protected $current_page = 1;
    protected $total_pages = 1;
    protected $action = "";
    protected $label = 'items';
    protected $page_field = "page";

    public function __construct() {
        $this->CI = &get_instance();
        $this->CI->load->library("security");
    }

    public function initialize($config = []) {
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

        $this->total_pages = $this->total_rows > 0 ? (int) ceil($this->total_rows / $this->per_page) : 1;

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

    public function current_page() {
        return $this->current_page;
    }

    public function per_page() {
        return $this->per_page;
    }

    public function total_rows() {
        return $this->total_rows;
    }

    public function total_pages() {
        return $this->total_pages;
    }

    public function offset() {
        return ($this->current_page - 1) * $this->per_page;
    }

    public function start() {
        if ($this->total_rows <= 0) {
            return 0;
        }
        return $this->offset() + 1;
    }

    public function end() {
        return min(
            $this->offset() + $this->per_page,
            $this->total_rows
        );
    }

    protected function page_range() {
        $total = $this->total_pages;
        $current = $this->current_page;

        // যদি মোট পেজ ৪ বা তার কম হয়, তবে সব দেখাবে
        if ($total <= 4) {
            $pages = [];
            for ($i = 1; $i <= $total; $i++) {
                $pages[] = $i;
            }
            return $pages;
        }

        $pages = [];

        // ১. সামনে সবসময় ফিক্সড ২টি পেজ (1, 2)
        $pages[] = 1;
        $pages[] = 2;

        // ২. প্রথম ডট (যদি কারেন্ট পেজ ৪ বা তার বেশি হয়)
        if ($current > 3) {
            $pages[] = "dots";
        }

        // ৩. মাঝখানের কারেন্ট পেজ (যদি এটি ৩ এর বেশি এবং শেষ দুইটির আগের পেজ হয়)
        if ($current > 2 && $current < $total - 1) {
            $pages[] = $current;
        }

        // ৪. শেষ ডট (যদি কারেন্ট পেজ মোট পেজের চেয়ে ৩ এর বেশি কম হয়)
        if ($current < $total - 2) {
            $pages[] = "dots";
        }

        // ৫. পেছনে সবসময় ফিক্সড ২টি পেজ (যেমন: 499, 500)
        $pages[] = $total - 1;
        $pages[] = $total;

        return $pages;
    }

    protected function csrf_field() {
        if (!isset($this->CI->security)) {
            return "";
        }
        $name = $this->CI->security->get_csrf_token_name();
        $hash = $this->CI->security->get_csrf_hash();
        return '<input type="hidden" name="' . html_escape($name) . '" value="' . html_escape($hash) . '">';
    }

    protected function page_form($page, $label, $class = "", $disabled = false) {
        $action = html_escape($this->action);
        $field = html_escape($this->page_field);
        $page = (int) $page;
        $disabled_class = $disabled ? " disabled" : "";
        $active_class = ($class !== "") ? " " . $class : "";

        return '<li class="page-item' . $disabled_class . $active_class . '">' .
               '<form method="post" action="' . $action . '" style="display:inline;">' .
               $this->csrf_field() .
               '<input type="hidden" name="' . $field . '" value="' . $page . '">' .
               '<button type="submit" class="page-link" ' . ($disabled ? 'disabled' : '') . '>' . $label . '</button>' .
               '</form>' .
               '</li>';
    }

    public function create_links() {
        if ($this->total_rows <= 0 || $this->total_pages <= 1) {
            return "";
        }

        $html = '<nav><ul class="pagination pagination-sm">';

        // Previous Button (<<)
        if ($this->current_page <= 1) {
            $html .= '<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-double-left"></i></span></li>';
        } else {
            $html .= $this->page_form($this->current_page - 1, '<i class="fa fa-angle-double-left"></i>');
        }

        // Page Numbers & Dots
        foreach ($this->page_range() as $page) {
            if ($page === "dots") {
                $html .= '<li class="page-item disabled"><span class="page-link">...</span></li>';
                continue;
            }

            if ($page == $this->current_page) {
                $html .= $this->page_form($page, $page, "active", false);
            } else {
                $html .= $this->page_form($page, $page, "", false);
            }
        }

        // Next Button (>>)
        if ($this->current_page >= $this->total_pages) {
            $html .= '<li class="page-item disabled"><span class="page-link"><i class="fa fa-angle-double-right"></i></span></li>';
        } else {
            $html .= $this->page_form($this->current_page + 1, '<i class="fa fa-angle-double-right"></i>');
        }

        $html .= '</ul></nav>';
        return $html;
    }

    public function get_data() {
        return array(
            'total_rows' => $this->total_rows(),
            'per_page' => $this->per_page(),
            'current_page' => $this->current_page(),
            'offset' => $this->offset(),
            'start' => $this->start(),
            'end' => $this->end(),
            'pagination' => $this->create_links(),
            'label' => $this->label
        );
    }
}