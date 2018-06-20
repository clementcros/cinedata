<?php
/**
 * Created by PhpStorm.
 * User: c.cros
 * Date: 20/06/2018
 * Time: 09:08
 */

class User_model
{
    protected $table = 'user';

    public function userLogin($email,$mdp) {

        return $this->db->select('email_user,mdp_user')
            ->from($this->table)
            ->where('email_user', $email)
            ->where('mdp_user', $mdp)
            ->get()
            ->result();
    }
}
