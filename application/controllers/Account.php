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
        $this->load->model('Metrages_data_model');
        $this->load->model('Param_user_model');
        $this->load->library('email');
        $this->load->model('Getcolor_model');
        $this->load->model('Getcol_model');
    }

    public function index(){
        // if()
        if ($this->session->userdata('currently_logged_in')) {
            if($this->session->userdata('username') == "admin"){
                redirect('/administration');
            }
            $user = $this->session->all_userdata();
            $id = $user['username'];
            $color = $this->Getcolor_model->getcolor();
            $col = $this->Getcol_model->getcol();
            if($col == null){
                $col = 6;
            }
            $data['col'] = $col[0]['col'];
            $data['color'] = $color;

            $data['user'] = $this->User_data_model->get_data($id);
            $status = $data['user'][0]['user_activation'];
            if($status == 0){
                redirect('Account/status');
            }
            $data['article'] = $this->Scenario_data_model->getData($id);
            $data['metrage'] = $this->Metrages_data_model->getmetrages($id);

           if($data['user'][0]['gender'] == 0){
               $data['gender'] = 'Un homme';
           }
           else {
               $data['gender'] = 'Une femme';
           }
           // prametrer en prod les mails
//            $this->email->from('clemof34420@gmail.com', 'CINEDATA');
//            $this->email->to('clemof34420@gmail.com');
//            $this->email->cc('');
//            $this->email->bcc('');
//
//            $this->email->subject('Email Test');
//            $this->email->message('Testing the email class.');
//
//            $this->email->send();
//
//            echo $this->email->print_debugger();

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

    public function setting(){

        if ($this->session->userdata('currently_logged_in'))
        {

            $this->load->view('partial/head');
            $this->load->view('setting');
            $this->load->view('partial/foot');

        }
        else{
            redirect('Main');
        }


        }

        public function check_param(){

            if ($this->session->userdata('currently_logged_in')) {
                $data = $this->input->post();
                $this->Param_user_model->setparam($data);
                redirect('Account');
            }
            else{
                redirect('Main');
            }
        }

        public function status(){
            $this->load->view('partial/head_loggout');
            $this->load->view('status');
            $this->load->view('partial/foot');
        }

}
