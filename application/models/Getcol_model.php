<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 17/07/2018
 * Time: 10:47
 */

class Getcol_model extends CI_Model
{

    public function getcol(){

        $user = $this->session->userdata('username');

        $id = $this->db->query("SELECT id FROM `signup` WHERE username = '".$user."'");
        $id = $id->result_array($id);
        $query  = $this->db->query("SELECT col FROM `colum_user` WHERE id_user = '".$id[0]['id']."'");
        return $query->result_array($query);
    }

}
