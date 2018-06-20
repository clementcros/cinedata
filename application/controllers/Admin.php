<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 20/06/2018
 * Time: 09:59
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function index() {
        if($this->session->userdata('currently_logged_in')){
            $user = $this->session->all_userdata();
            if($user['username'] == "admin"){

                redirect('Examples');
            }
            else{
                redirect('');
            }
        }
    }
}
