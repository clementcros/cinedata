<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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

            $this->load->view('partial/head');
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
        $this->load->view('partial/head');
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
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|xss_clean|is_unique[signup.username]');

        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|matches[password]');

        $this->form_validation->set_message('is_unique', 'username already exists');

        if ($this->form_validation->run())
        {
            echo "Welcome, you are logged in.";
        }
        else {

            $this->load->view('signin');
        }
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

}
?>
