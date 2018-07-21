<?php

class Contact_data_model extends CI_Model
{
    public function setdata($data){
        $this->db->query("INSERT INTO contact (id, nom, email, sujet, message)
        VALUES (NULL, '".$data['name_contact']."', '".$data['email_contact']."', '".$data['subject']."', '".$data['message']."')");
    }
    
}
