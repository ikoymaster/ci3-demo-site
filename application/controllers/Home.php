<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *         http://example.com/index.php/welcome
     *    - or -
     *         http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function employees()
    {
        $this->load->model('Employees');
        $data['employees'] = $this->Employees->employee_list();
        $this->load->view('templates/header');
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }

    public function customers()
    {
        $this->load->model('Customers');
        $data['customers'] = $this->Customers->customer_list();
        $this->load->view('templates/header');
        $this->load->view('customers', $data);
        $this->load->view('templates/footer');
    }

    public function customer($id)
    {
        $this->load->model('Customers');
        $data['customer'] = $this->Customers->customer($id);
        $this->load->view('templates/header');
        $this->load->view('customer', $data);
        $this->load->view('templates/footer');
    }

    public function login()
    {

    }

    public function secure()
    {

    }

}