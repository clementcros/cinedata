<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 20/06/2018
 * Time: 09:59
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_data_model');
    }

    public function index(){
        if ($this->session->userdata('currently_logged_in')) {
            $user = $this->session->all_userdata();
            var_dump($user);
            $id = $user['username'];
            $data = $this->User_data_model->get_data($id);
            var_dump($data);
            echo "test";

            $this->load->view('partial/head');
            $this->load->view('account', $data);
            $this->load->view('partial/foot');
        }
        else {
            //redirige a la home page en cas d'accées refuser
            redirect('main');
        }
    }

}
