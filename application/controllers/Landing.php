<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function index()
    {
        $data["title"] = "Exodus Drugstore";

        // $this->load->view('templates/auth_llanding', $data);
        $this->load->view('landing/index', $data);
        // $this->load->view('templates/auth_landing');
    }
}
