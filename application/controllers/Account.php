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
        $this->load->model('Editioncompte_model');
        $this->load->model('Scenario_data_model');
    }

    public function index(){
        // if()
        if ($this->session->userdata('currently_logged_in')) {
            if($this->session->userdata('username') == "admin"){
                redirect('/administration');
            }
            $user = $this->session->all_userdata();
            $id = $user['username'];

            $data['user'] = $this->User_data_model->get_data($id);
            $data['article'] = $this->Scenario_data_model->getData($id);
           
           if($data['user'][0]['gender'] == 0){
               $data['gender'] = 'Un homme';
           }
           else {
               $data['gender'] = 'Une femme';
           }

            $data['url'] = $id;

            $this->load->view('partial/head');
            $this->load->view('account', $data);
            $this->load->view('partial/foot');
        }
        else {
            //redirige a la home page en cas d'acc�es refuser
            redirect('main');
        }
    }

    public function edit_profile(){
        if ($this->session->userdata('currently_logged_in')) {

            $user = $this->session->userdata('username');
            $data['user'] = $this->User_data_model->get_data($user);
            $this->load->view('partial/head');
            $this->load->view('edit_acount', $data);
            $this->load->view('partial/foot');
        }
        else{
            redirect('main');
        }

    }

    public function validate_profile()
    {

        $data = $this->input->post();
        if ($data['passwordinput'] == $data['password_reapeat'])
        {

            $this->Editioncompte_model->set_data($data);
        }
        else {
            redirect('/Main/signin');
        }
    }

}
