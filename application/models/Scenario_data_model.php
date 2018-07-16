<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 20/06/2018
 * Time: 14:06
 */

class Scenario_data_model extends CI_Model
{

    public function getData($user)
    {
        $query = $this->db->query("SELECT * FROM `scenarios` INNER JOIN signup ON scenarios.id_user = signup.id WHERE signup.username ='" . $user. "'");
        return $query->result_array($query);
    }

}
