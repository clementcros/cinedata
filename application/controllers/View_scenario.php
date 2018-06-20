<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 20/06/2018
 * Time: 09:59
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class View_scenario extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Scenario_data_model');
    }

    public function index(){

    }

}
