<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 20/06/2018
 * Time: 09:59
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Scenario extends CI_Controller
{

    public function index(){
        if ($this->session->userdata('currently_logged_in')) {
            $this->load->view('partial/head');
            $this->load->view('upload');
            $this->load->view('partial/foot');
        }
        else {
            //redirige a la home page en cas d'accées refuser
            redirect('Main/login');
        }
    }

}
