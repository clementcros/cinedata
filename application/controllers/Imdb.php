<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 21/06/2018
 * Time: 08:32
 */

class Imdb extends CI_Controller
{

    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Apiimdb_model');

    }

    public function index(){
        if ($this->session->userdata('currently_logged_in')) {
            // fonction étendue


        }

        else {


        }
        $this->load->view('partial/head');
        $this->load->view('imdb');
        $this->load->view('partial/foot');
    }
}
