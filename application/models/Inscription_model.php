<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 16/07/2018
 * Time: 14:35
 */

class Inscription_model extends CI_Model
{
    public function set_data($data)
    {
        $check = $this->db->query("SELECT * FROM `signup` WHERE username = '".$data['username']."'");
        $check = $check->result_array($check);
        if($check == null )
        {
            $this->db->query(" INSERT INTO `signup` (`id`, `username`, `password`, `email`, `nom`, `prenom`, `status`, `gender`)
                            VALUES(NULL, '".$data['username']. "', '".$data['passwordinput']."', '".$data['email']."', '".$data['textinput']."',
                              '".$data['prenom']."', '".$data['status']."', '".$data['gender']."')");

        }
        else {
            echo "le nom d'utilisateur existe déja";
            redirect('Main/signin');
        }
}
}
