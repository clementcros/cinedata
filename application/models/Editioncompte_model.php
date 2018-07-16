<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 16/07/2018
 * Time: 16:44
 */

class Editioncompte_model extends CI_Model
{
    public function set_data($data)
    {
        $olduser=$this->session->userdata('username');
        $check = $this->db->query("SELECT username FROM `signup` WHERE username = '".$data['username']."'");
        $check = $check->result_array($check);

        if($check == null || $check[0]['username'] == $data['username'])
        {
            $this->db->query("UPDATE `signup` SET `username` = '".$data['username']."', `password` = '".$data['passwordinput']."',
                              `email` = '".$data['email']."', `nom` = '".$data['textinput']."', `prenom` = '".$data['prenom']."',
                               `status` = '".$data['status']."', `gender` = '".$data['gender']."' WHERE `signup`.`username` = '".$olduser."'");

            redirect('main/logout');

        }
        else {
            echo "le nom d'utilisateur éxiste déja";
        }

    }
}
