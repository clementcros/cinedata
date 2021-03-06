<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Inscription_model');
        $this->load->model('Reset_password_model');
        $this->load->model('Checkhash_model');
        $this->load->model('Setpassword_model');
    }

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        if ($this->session->userdata('currently_logged_in'))
        {
            redirect('Account');
        }
        else {

            $this->load->view('partial/head_loggout');
            $this->load->view('login_view');
            $this->load->view('partial/foot');
        }
    }

    public function signin()
    {
        if ($this->session->userdata('currently_logged_in'))
        {
            redirect('Account');
        }
        $this->load->view('partial/head_loggout');
        $this->load->view('signin');
        $this->load->view('partial/foot');
    }

    public function data()
    {
        if ($this->session->userdata('currently_logged_in'))
        {
            redirect('Account');
        } else {
            redirect('Main/invalid');
        }
    }

    public function invalid()
    {
        $this->load->view('invalid');
    }

    public function login_action()
    {
        $this->load->helper('security');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username:', 'required|trim|xss_clean|callback_validation');
        $this->form_validation->set_rules('password', 'Password:', 'required|trim');

        if ($this->form_validation->run())
        {
            $data = array(
                'username' => $this->input->post('username'),
                'currently_logged_in' => 1
            );
            $this->session->set_userdata($data);
            redirect('Main/data');
        }
        else {
            $this->load->view('partial/head');
            $this->load->view('login_view');
            $this->load->view('partial/foot');
        }
    }

    public function signin_validation()
    {
        $form_data = $this->input->post();

        if ($form_data['passwordinput'] == $form_data['password_reapeat'])
        {

            $this->Inscription_model->set_data($form_data);
        }
        else {
            redirect('/Main/signin');
        }

        $this->load->view('partial/head_loggout');
        $this->load->view('sucess');
        $this->load->view('partial/foot');
    }

    public function validation()
    {
        $this->load->model('login_model');

        if ($this->login_model->log_in_correctly())
        {

            return true;
        } else {
            $this->form_validation->set_message('validation', 'Mot de passe ou nom utilisateur incorecte.');
            return false;
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
    public function reset_password(){

        $this->load->view('partial/head_loggout');
        $this->load->view('reset_password');
        $this->load->view('partial/foot');
    }

    public function resetnow(){

        $form_data = $this->input->post();
        $hash =  hash('sha256', $form_data['email']);

        $data['hash'] = $hash;
        $data['email'] = $form_data['email'];
        $this->Reset_password_model->reset($data);
        redirect('Main/reset_ok');

    }
    public function reset_ok(){
        $this->load->view('partial/head_loggout');
        $this->load->view('reset_good');
        $this->load->view('partial/foot');
    }

    public function set_password(){

        $hash = $_GET['hash'];
        $username = $this->Checkhash_model->check($hash);
        if($username[0]['username'] != null)
        {
            $data['username'] = $username[0]['username'];
            $this->load->view('partial/head_loggout');
            $this->load->view('change_password', $data);
            $this->load->view('partial/foot');
        }
    }

    public function pass_changed(){

        $form_data = $this->input->post();
        if($form_data['passwordinput'] == $form_data['password_reapeat']){

            $this->Setpassword_model->setpassword($form_data);
            redirect('Main');
        }
        else {
            echo "les mots de passes ne sont pas iddentiques";
        }
    }

}
