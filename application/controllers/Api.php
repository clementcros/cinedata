<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 20/06/2018
 * Time: 09:59
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller
{

    public function index(){



            $user = json_encode($this->session->userdata('username'));
            echo $user;

    }
}
