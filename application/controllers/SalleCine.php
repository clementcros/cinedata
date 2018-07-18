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

        $this->load->library('grocery_CRUD');
    }

    public function _example_output($output = null)
    {
        if($this->session->userdata('currently_logged_in')) {

            $this->load->view('user_output.php', (array)$output);
        }
            else{
                redirect('');
            }
        }


    function example_with_or_where() {

        $crud = new grocery_CRUD();

        $crud->where('username',$_SESSION['username']);

        $crud->set_theme('datatables');
        $crud->set_table('metrages');
        $crud->set_subject('metrages');
        $crud->set_relation('id_user','signup','username');
        $crud->columns('id','id_user','nom','description','file_url', 'image');
        $crud->set_field_upload('file_url','assets/uploads/files');
        $crud->set_field_upload('image','assets/uploads/files');


        $output = $crud->render();

        $this->_example_output($output);
    }


    public function index()
    {
        $this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
    }

//     public function index(){
//         if ($this->session->userdata('currently_logged_in')) {
//
//
//
//
//             $this->load->view('partial/head');
//             $this->load->view('upload');
//             $this->load->view('partial/foot');
//         }
//         else {
//             //redirige a la home page en cas d'acc�es refuser
//             redirect('Main/login');
//         }
//     }

     public function upload(){
         $form_data = $this->input->post();

         var_dump($form_data);
         die();

     }

}
