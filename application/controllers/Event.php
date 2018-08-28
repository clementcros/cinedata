<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 28/08/2018
 * Time: 09:05
 */

class Event extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Event_model');
    }
    public function index()
    {
        if (!$this->session->userdata('currently_logged_in')) {
            redirect('');
        }
        else {
            $data['metrages'] = $this->Event_model->get_event();
            $this->load->view('partial/head');
            var_dump($data);
            $this->load->view('event',$data);
            $this->load->view('partial/foot');
        }



    }
}
