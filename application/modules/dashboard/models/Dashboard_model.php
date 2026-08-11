<?php

class Dashboard_model extends CI_Model {

public function get_filtered_purchase($branch_id = NULL, $range = 'today') {

    $time = $this->get_time_range($range);

    $this->db->select('SUM(totalAmount) as total, COUNT(id) as count');
    $this->db->where('organization_id', org_id());

    if ($branch_id) {
        $this->db->where('branch_id', $branch_id);
    }

    if ($range !== 'lifetime') {
        $this->db->where('purchase_date >=', $time['start']);
        $this->db->where('purchase_date <=', $time['end']);
    }

    $this->db->where('is_active', 1);
    $query = $this->db->get('purchases')->row_array();

    return [
        'total' => $query['total'] ?? 0,
        'count' => $query['count'] ?? 0
    ];
}

public function get_low_stock_products($active_branch_id) {
    return $this->db->select('
            p.id, 
            p.product_name, 
            SUM(ps.total_quantity) as stock_qty, 
            p.reorder_level, 
            c.name as category_name
        ')
        ->from('products p')
        ->join('product_stocks ps', 'ps.product_id = p.id', 'left')
        ->join('categories c', 'c.id = p.category_id', 'left')
        ->where('p.organization_id', org_id())
        ->where('ps.branch_id', $active_branch_id) 
        ->where('p.is_inventory', 1)
        ->where('p.is_active', 1)
        ->group_by('p.id')
        ->having('stock_qty <= p.reorder_level') 
        ->order_by('stock_qty', 'ASC') 
        ->limit(10) 
        ->get()
        ->result_array();
}
public function get_today_sales( $branch_id = NULL) {
  
    $today_start = strtotime("today 00:00:00");
    $today_end   = strtotime("today 23:59:59");


    $this->db->select_sum('grandTotal', 'total_sales');
    $this->db->where('organization_id', org_id());


    if ($branch_id !== NULL && $branch_id !== '') {
        $this->db->where('branch_id', $branch_id);
    }


    $this->db->where('sales_date >=', $today_start);
    $this->db->where('sales_date <=', $today_end);
    $this->db->where('is_active', 1);

    $query = $this->db->get('sales');

  
    if ($query->num_rows() > 0) {
        $result = $query->row();
        return $result->total_sales ? $result->total_sales : 0;
    }
    
    return 0;
}
public function get_this_month_purchase( $branch_id = NULL) {
  
    $month_start = strtotime(date('Y-m-01 00:00:00')); 
    $month_end   = strtotime(date('Y-m-t 23:59:59')); 

    $this->db->select_sum('totalAmount', 'total_purchase');
    $this->db->where('organization_id', org_id());


    if ($branch_id !== NULL && $branch_id !== '') {
        $this->db->where('branch_id', $branch_id);
    }


    $this->db->where('purchase_date >=', $month_start);
    $this->db->where('purchase_date <=', $month_end);
    $this->db->where('is_active', 1);

    $query = $this->db->get('purchases');

    if ($query->num_rows() > 0) {
        $result = $query->row();
        return $result->total_purchase ? $result->total_purchase : 0;
    }
    
    return 0;
}
public function get_this_month_sales( $branch_id = NULL) {
  
    $month_start = strtotime(date('Y-m-01 00:00:00')); 
    $month_end   = strtotime(date('Y-m-t 23:59:59')); 

    $this->db->select_sum('grandTotal', 'total_sales');
    $this->db->where('organization_id', org_id());


    if ($branch_id !== NULL && $branch_id !== '') {
        $this->db->where('branch_id', $branch_id);
    }


    $this->db->where('sales_date >=', $month_start);
    $this->db->where('sales_date <=', $month_end);
    $this->db->where('is_active', 1);

    $query = $this->db->get('sales');

    if ($query->num_rows() > 0) {
        $result = $query->row();
        return $result->total_sales ? $result->total_sales : 0;
    }
    
    return 0;
}

public function get_last_5_purchase( $branch_id = NULL) {
    $this->db->select('purchases.*, business_partners.name customer_name');
    $this->db->from('purchases');
    
   
    $this->db->join('business_partners', 'business_partners.id = purchases.supplier_id', 'left');

    $this->db->where('purchases.organization_id', org_id());


    if ($branch_id !== NULL && $branch_id !== '') {
        $this->db->where('purchases.branch_id', $branch_id);
    }

    $this->db->where('purchases.is_active', 1);
    

    $this->db->order_by('purchases.id', 'DESC');
    $this->db->limit(5);

    $query = $this->db->get();
    return $query->result_array(); 
}

public function get_last_5_sales( $branch_id = NULL) {
    $this->db->select('sales.*, business_partners.name customer_name');
    $this->db->from('sales');
    
   
    $this->db->join('business_partners', 'business_partners.id = sales.customer_id', 'left');

    $this->db->where('sales.organization_id', org_id());


    if ($branch_id !== NULL && $branch_id !== '') {
        $this->db->where('sales.branch_id', $branch_id);
    }

    $this->db->where('sales.is_active', 1);
    

    $this->db->order_by('sales.id', 'DESC');
    $this->db->limit(5);

    $query = $this->db->get();
    return $query->result_array(); 
}
public function get_top_products_chart( $branch_id = NULL) {
   
    $month_start = strtotime(date('Y-m-01 00:00:00'));
    $month_end   = strtotime(date('Y-m-t 23:59:59'));

    $this->db->select('p.product_name, SUM(sd.qty) as total_qty');
    $this->db->from('sales_details sd');
    $this->db->join('products p', 'p.id = sd.product_id', 'left');
    $this->db->join('sales s', 's.id = sd.sale_id', 'inner');
    $this->db->where('sd.organization_id', org_id());
    
    if ($branch_id) $this->db->where('sd.branch_id', $branch_id);

    $this->db->where('s.sales_date >=', $month_start);
    $this->db->where('s.sales_date <=', $month_end);
    $this->db->group_by('sd.product_id');
    $this->db->order_by('total_qty', 'DESC');
    $this->db->limit(5);

    return $this->db->get()->result_array();
}

public function get_dynamic_chart_report($branch_id = NULL, $range = 'today') {
    $report_data = [];

    if ($range == 'today' || $range == 'yesterday') {
        $days = 2; 
    } elseif ($range == '7_days') {
        $days = 7;
    } elseif ($range == '15_days') {
        $days = 15;
    } elseif ($range == '1_month') {
        $days = 30;
    } elseif ($range == '3_months') {
        $days = 90;
    } else {

        $days = 30; 
    }

  
    for ($i = $days - 1; $i >= 0; $i--) {
        $date = date('Y-m-d', strtotime("-$i days"));
        $start_timestamp = strtotime($date . " 00:00:00");
        $end_timestamp = strtotime($date . " 23:59:59");

        // Sales Query
        $this->db->select_sum('grandTotal', 'sales');
        $this->db->where('organization_id', org_id());
        if ($branch_id) $this->db->where('branch_id', $branch_id);
        $this->db->where('sales_date >=', $start_timestamp);
        $this->db->where('sales_date <=', $end_timestamp);
        $this->db->where('is_active', 1);
        $sales = $this->db->get('sales')->row()->sales ?? 0;

        // Purchase Query
        $this->db->select_sum('totalAmount', 'purchase');
        $this->db->where('organization_id', org_id());
        if ($branch_id) $this->db->where('branch_id', $branch_id);
        $this->db->where('purchase_date >=', $start_timestamp);
        $this->db->where('purchase_date <=', $end_timestamp);
        $this->db->where('is_active', 1);
        $purchase = $this->db->get('purchases')->row()->purchase ?? 0;

        $report_data[] = [
            'date' => ($days > 15) ? date('d M', $start_timestamp) : date('D', $start_timestamp), // বেশি দিন হলে তারিখ, কম হলে বারের নাম
            'sales' => (float)$sales,
            'purchase' => (float)$purchase
        ];
    }
    return $report_data;
}


public function get_today_attendance_summary($org_id, $branch_id) {
    $today = date('Y-m-d');
    $base_where = ['organization_id' => $org_id, 'branch_id' => $branch_id, 'shift_date' => $today];

    $present = $this->db->where_in('status', ['Present', 'Late', 'Early Gone', 'Late & Early Gone', 'Half Day'])
                        ->where($base_where)
                        ->count_all_results('staff_attendance');

    $absent = $this->db->where('status', 'Absent')
                       ->where($base_where)
                       ->count_all_results('staff_attendance');

    $leave = $this->db->where('status', 'On Leave')
                      ->where($base_where)
                      ->count_all_results('staff_attendance');

    $holiday = $this->db->where('status', 'Holiday')
                        ->where($base_where)
                        ->count_all_results('staff_attendance');

    $weekend = $this->db->where('status', 'Weekend')
                        ->where($base_where)
                        ->count_all_results('staff_attendance');

    return [
        'present' => $present,
        'absent'  => $absent,
        'leave'   => $leave,
        'holiday' => $holiday,
        'weekend' => $weekend
    ];
}
public function get_filtered_sales($branch_id, $range) {

    $time = $this->get_time_range($range); 
    
    $this->db->select('SUM(grandTotal) as total, COUNT(id) as count');
    $this->db->where('organization_id', org_id());
    
    if ($branch_id) {
        $this->db->where('branch_id', $branch_id);
    }

    if ($range !== 'lifetime') {
        $this->db->where('sales_date >=', $time['start']);
        $this->db->where('sales_date <=', $time['end']);
    }

    $this->db->where('is_active', 1);
    return $this->db->get('sales')->row_array();
}

private function get_time_range($range) {
    $end = strtotime("today 23:59:59");
    $start = strtotime("today 00:00:00");

    switch ($range) {
        case 'yesterday':
            $start = strtotime("yesterday 00:00:00");
            $end   = strtotime("yesterday 23:59:59");
            break;
        case '7_days':   $start = strtotime("-7 days 00:00:00");   break;
        case '15_days':  $start = strtotime("-15 days 00:00:00");  break;
        case '1_month':  $start = strtotime("-1 month 00:00:00");  break;
        case '3_months': $start = strtotime("-3 months 00:00:00"); break;
        case '1_year':   $start = strtotime("-1 year 00:00:00");   break;
        case 'lifetime': $start = 0; break;
    }

    return ['start' => $start, 'end' => $end];
}


public function get_filtered_profit($branch_id, $range) {

    $time = $this->get_time_range($range); 
    
    $this->db->select('SUM(line_total_profit) as total, COUNT(id) as count');
    $this->db->where('organization_id', org_id());
    
    if ($branch_id) {
        $this->db->where('branch_id', $branch_id);
    }

    if ($range !== 'lifetime') {
        $this->db->where('sales_date >=', $time['start']);
        $this->db->where('sales_date <=', $time['end']);
    }

   // $this->db->where('is_active', 1);
    return $this->db->get('sales_details')->row_array();
}

public function get_filtered_expense($branch_id, $range) {

    $time = $this->get_time_range($range); 
    
    $this->db->select('SUM(total_amount) as total, COUNT(id) as count');
    $this->db->where('organization_id', org_id());
    
    if ($branch_id) {
        $this->db->where('branch_id', $branch_id);
    }

    if ($range !== 'lifetime') {
        $this->db->where('transaction_date >=', $time['start']);
        $this->db->where('transaction_date <=', $time['end']);
    }

    $this->db->where('is_approved', 1);
    return $this->db->get('acc_vouchers')->row_array();
}

public function get_total_customers($branch_id = null) {
    $types = ['Customer', 'Both'];
    $this->db->select('COUNT(id) as total_customer');
    $this->db->where('organization_id', org_id());
    $this->db->where_in('partner_type', $types);
    if ($branch_id) {
        $this->db->where('branch_id', $branch_id);
    }
    $this->db->where('is_active', 1);
    $query = $this->db->get('business_partners');
    $result = $query->row_array();
    return $result ? $result['total_customer'] : 0;
}

public function get_total_suppliers($branch_id = null) {
    $types = ['Supplier', 'Both'];
    $this->db->select('COUNT(id) as total_customer');
    $this->db->where('organization_id', org_id());
    $this->db->where_in('partner_type', $types);
    if ($branch_id) {
        $this->db->where('branch_id', $branch_id);
    }
    $this->db->where('is_active', 1);
    $query = $this->db->get('business_partners');
    $result = $query->row_array();
    return $result ? $result['total_customer'] : 0;
}

public function get_receivable_due($branch_id) {
    $this->db->select('SUM(current_balance) as total_due');
    $this->db->where('organization_id', org_id());
    $this->db->where('current_balance >', 0);
    if ($branch_id) {
        $this->db->where('branch_id', $branch_id);
    }
    $result = $this->db->get('business_partners')->row_array();
    return $result ? (float)$result['total_due'] : 0;
}

public function get_payable_due($branch_id) {
    $this->db->select('SUM(current_balance) as total_due');
    $this->db->where('organization_id', org_id());
    $this->db->where('current_balance <', 0);

    if ($branch_id) {
        $this->db->where('branch_id', $branch_id);
    }

    $result = $this->db->get('business_partners')->row_array();
    return $result ? abs((float)$result['total_due']) : 0;
}
public function get_stock_purchase_value($branch_id) {
    $this->db->select('SUM(total_quantity * purchase_price) as total_stock_value');
    $this->db->where('organization_id', org_id());
    if ($branch_id) {
        $this->db->where('branch_id', $branch_id);
    }

    $this->db->where('total_quantity >', 0);
    $result = $this->db->get('product_stocks')->row_array();
    return $result ? (float)$result['total_stock_value'] : 0;
}
}