<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 16/07/2018
 * Time: 11:06
 */

class Scenariolist_model extends CI_Model
{

    public function getList()
    {
        $query = $this->db->query("SELECT * FROM `scenarios`");
        return $query->result_array($query);
    }

}
