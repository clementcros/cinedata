<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 17/07/2018
 * Time: 14:46
 */

class Checkhash_model extends CI_Model
{

    public function check($data){

        $query = $this->db->query("SELECT username FROM `signup` WHERE signup.reset_password ='" . $data. "'");
        return $query->result_array($query);

    }

}
