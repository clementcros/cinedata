<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 17/07/2018
 * Time: 14:57
 */

class Setpassword_model extends CI_Model
{

    public function setpassword($data){

        $this->db->query(" UPDATE `signup` SET `password` = '".$data['passwordinput']."', `reset_password` = '' WHERE `signup`.`username` = '" . $data['custId']. "'");

    }

}
