<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function employee($id)
    {
        return $this->db->select("e.*, sup.lastName as sup_lastName, sup.firstName as sup_firstName")->from('employees e')
            ->join('employees sup', 'e.reportsTo = sup.employeeNumber', 'left')
            ->where('e.employeeNumber', $id)->get()->row_array();
    }
    public function employee_list($filter = null)
    {

        return $this->db->get('employees')->result();

    }

}

/* End of file employees.php */