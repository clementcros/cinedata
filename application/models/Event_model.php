<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 28/08/2018
 * Time: 09:19
 */

class Event_model extends CI_Model
{

    public function get_event()
    {
        $data = $this->db->query("SELECT * FROM `event`");
        return $data->result_array($data);
    }

    public function subscribe_event()
    {

    }

}
