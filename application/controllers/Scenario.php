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

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
	    if($this->session->userdata('currently_logged_in')){
            $user = $this->session->all_userdata();
           

                $this->load->view('example.php',(array)$output);
                
        }
            
            else{
                redirect('');
            }
        }
	


	public function index()
	{
        $user = $this->session->userdata('username');
        var_dump($this->session->userdata('username'));
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

        public function upload_scenario()
	{
        
		try{
            $user = $this->session->userdata('username');
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('scenarios');
			$crud->set_subject('scenarios');
            $crud->set_relation('id_user','signup','username');
            $crud->where('username',$user);
			$crud->columns('id','id_user','nom','description','file_url');
			$crud->set_field_upload('file_url','assets/uploads/files');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

    // public function index(){
    //     if ($this->session->userdata('currently_logged_in')) {
            
            
            
    //         try{
    //             $crud = new grocery_CRUD();
    
    //             $crud->set_theme('datatables');
    //             $crud->set_table('signup');
    //             $crud->set_subject('utilisateurs');
    //             $crud->columns('username','password','email','status');
    
    //             $output = $crud->render();
    
    //             $this->_example_output($output);
    
    //         }catch(Exception $e){
    //             show_error($e->getMessage().' --- '.$e->getTraceAsString());
    //         }

    //         $this->load->view('partial/head');
    //         $this->load->view('upload');
    //         $this->load->view('partial/foot');
    //     }
    //     else {
    //         //redirige a la home page en cas d'acc�es refuser
    //         redirect('Main/login');
    //     }
    // }

}
