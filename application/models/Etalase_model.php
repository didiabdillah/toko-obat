<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Etalase_model extends CI_model
{
    public function get()
    {
        return $this->db->get("obat")->result_array();
    }
}
