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
             $this->load->view('upload');
             $this->load->view('partial/foot');
         }
         else {
             //redirige a la home page en cas d'acc�es refuser
             redirect('Main/login');
         }
     }

     public function upload(){
         $form_data = $this->input->post();

         var_dump($form_data);
         die();

     }

}
