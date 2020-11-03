<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_model
{
    public function login($username)
    {
        $this->db->where('email', $username);
        $this->db->or_where('username', $username);
        $user = $this->db->get('admin')->row_array();

        return $user;
    }

    public function _resetpassword($email)
    {
        $Emaildb = $this->db->get_where('admin', ['email' => $email])->row_array();

        return $Emaildb;
    }

    public function resetpass($email)
    {
        $user = $this->db->get_where('admin', ['email' => $email])->row_array();

        return $user;
    }

    public function resetpasstoken($token)
    {
        $user_token = $this->db->get_where('admin_token', ['token' => $token])->row_array();

        return $user_token;
    }
}
