<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 19/07/2018
 * Time: 16:34
 */

class Notification_admin_model extends CI_Model
{
    public function getnotif()
    {


        $query = $this->db->query("SELECT COUNT(signup.user_activation) FROM `signup` WHERE user_activation = 0");
        return $query->result_array($query);
    }
}
