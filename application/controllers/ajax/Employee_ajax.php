<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee_ajax extends CI_Controller
{

    public function get_employee_details($id)
    {
        $this->load->model('Employees');
        $this->output->set_content_type('application/json')->set_output(json_encode($this->Employees->employee($id)));
    }

}