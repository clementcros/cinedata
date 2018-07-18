<?php
/**
 * User: bluetech
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class SalleCine extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Metrages_model');
        $this->load->model('User_data_model');

    }

    public function index()
    {
//        if($this->session->userdata('currently_logged_in')) {
//
//            $this->load->view('user_output.php', (array)$output);
//        }
//            else{
//                redirect('');
//            }
//        }
        if ($this->session->userdata('currently_logged_in')) {
            $user = $this->session->userdata('username');
            $data['user'] = $this->User_data_model->get_data($user);
        }
        else {
            $data['user'][0]['status'] = 'none';
        }
        $data['metrages'] = $this->Metrages_model->getmetrages();
        var_dump($data);

        if($this->session->userdata('currently_logged_in')) {
            $this->load->view('partial/head');
        }
        else {
            $this->load->view('partial/head_loggout');
        }
        $this->load->view('salle_cine', $data);
        $this->load->view('partial/foot');

     }

}
