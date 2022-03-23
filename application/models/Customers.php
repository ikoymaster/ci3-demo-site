<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customers extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function customer($id)
    {
        return $this->db->select("c.*, rep.lastName as rep_lastName, rep.firstName as rep_firstName")->from('customers c')
            ->join('employees rep', 'c.salesRepEmployeeNumber = rep.employeeNumber', 'left')
            ->where('c.customerNumber', $id)->get()->row_array();
    }
    public function customer_list($filter = null)
    {

        return $this->db->get('customers')->result();

    }

}

/* End of file customers.php */