<?php
/**
 * Description of SalleCine
 *
 * @author Bluetech
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class SalleCine extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

        $this->load->library('upload');
	}




     public function index(){
         if ($this->session->userdata('currently_logged_in')) {

             $this->load->view('partial/head');
             $this->load->view('salle_cine');
             $this->load->view('partial/foot');
         }
         else {
             //redirige a la home page en cas d'accès refuser
             redirect('Main/login');
         }
     }

   
}



