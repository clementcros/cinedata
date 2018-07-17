<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 17/07/2018
 * Time: 14:34
 */

class Reset_password_model extends CI_Model
{

    public function reset($data){

         $this->db->    query("UPDATE `signup` SET `reset_password` = '".$data['hash'] ."' WHERE `signup`.`email` = '" . $data['email'] ."'");


    }

}
