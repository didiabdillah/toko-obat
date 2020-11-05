<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_model
{
    public function login($email)
    {
        $this->db->where('email', $email);
        $this->db->or_where('username', $email);
        $user = $this->db->get('users')->row_array();

        return $user;
    }

    public function register()
    {
        $data = [
            "nama" => $this->input->post('nama'),
            "email" => $this->input->post('email'),
            "username" => $this->input->post('username'),
            "role_id" => 2,
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "gambar" => "default.jpeg"
        ];

        $this->db->insert('users', $data);
    }

    public function _resetpassword($email)
    {
        $Emaildb = $this->db->get_where('users', ['email' => $email])->row_array();

        return $Emaildb;
    }

    public function resetpass($email)
    {
        $user = $this->db->get_where('users', ['email' => $email])->row_array();

        return $user;
    }

    public function resetpasstoken($token)
    {
        $user_token = $this->db->get_where('reset_token', ['token' => $token])->row_array();

        return $user_token;
    }
}
