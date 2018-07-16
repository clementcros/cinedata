<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 21/06/2018
 * Time: 08:32
 */

class Scenariolist extends CI_Controller
{

    public function __construct()
    {
        parent ::__construct();
        $this->load->model('Scenariolist_model');

    }

    public function index(){

        $data['article'] = $this->Scenariolist_model->getList();
      
        
        if ($this->session->userdata('currently_logged_in')) {
        $this->load->view('partial/head');
        }
        else{
            $this->load->view('partial/head_loggout');
        }
        $this->load->view('scenario',$data);
        $this->load->view('partial/foot');
    }
}
