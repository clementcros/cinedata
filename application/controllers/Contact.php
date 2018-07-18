<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_data_model');
    } 

    public function index(){
        $this->load->view('partial/head_loggout');
        $this->load->view('contact');
        $this->load->view('partial/foot');
    }

    public function form()
    {

        $data = $this->input->post();
        $this->Contact_data_model->setdata($data);
        redirect('Contact/valid');
    }

    public function valid(){

        $this->load->view('partial/head_loggout');
        $this->load->view('contact_valid');
        $this->load->view('partial/foot');

    }
}