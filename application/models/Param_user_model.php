<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 17/07/2018
 * Time: 09:59
 */

class Param_user_model extends CI_Model
{

    public function setparam($data){
        $user = $this->session->userdata('username');

        $id = $this->db->query("SELECT id FROM `signup` WHERE username = '".$user."'");
        $id = $id->result_array($id);

        $exist = $this->db->query("SELECT * FROM `color_user` WHERE id_user = '".$id[0]['id']."'");
        $exist_col = $this->db->query("SELECT * FROM `colum_user` WHERE id_user = '".$id[0]['id']."'");
        $exist = $exist->result_array($exist);
        $exist_col = $exist_col->result_array($exist_col);
        if ($exist == null) {

            $this->db->query("INSERT INTO `color_user` (`id`, `id_user`, `color`) VALUES (NULL, '".$id[0]['id']."', '".$data['color']."')");
        }
         else {
             $this->db->query("UPDATE `color_user` SET `color` = '".$data['color']."' WHERE `color_user`.`id_user` = '".$id[0]['id']."'");

         }
         if($exist_col == null){

             $this->db->query("INSERT INTO `colum_user` (`id`, `id_user`, `col`) VALUES (NULL, '".$id[0]['id']."', '".$data['selectbasic']."')");

         }
         else {
             $this->db->query("UPDATE `colum_user` SET `col` = '".$data['selectbasic']."' WHERE `colum_user`.`id_user` = '".$id[0]['id']."'");

         }

    }

}
