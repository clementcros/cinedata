<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 18/07/2018
 * Time: 15:47
 */

class Metrages_model extends CI_Model
{
    public function getmetrages(){

        $query = $this->db->query("SELECT * FROM `metrages`");
        return $query->result_array($query);
    }

}
