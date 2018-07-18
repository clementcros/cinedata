<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 18/07/2018
 * Time: 16:55
 */

class Metrages_data_model extends CI_Model
{

    public function getmetrages($user){

        $query = $this->db->query("SELECT * FROM `metrages` INNER JOIN signup ON metrages.id_user = signup.id WHERE signup.username ='" . $user. "'");
        return $query->result_array($query);
    }

}
