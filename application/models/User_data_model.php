<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 20/06/2018
 * Time: 11:55
 */

class User_data_model extends CI_Model
{



    public function get_data($id)
    {
        var_dump($id);

        $query = $this->db->query("select * from signup WHERE username ='" . $id . "'");
        return $query->result_array($query);
    }
}
