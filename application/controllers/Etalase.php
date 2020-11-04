<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Etalase extends CI_Controller
{
    public function index()
    {
        $data["title"] = "Etalase Exodus Drugstore";

        $data["url"] = $this->uri->segment(1);

        $this->load->view('templates/landing_header', $data);
        $this->load->view('templates/landing_navbar', $data);
        $this->load->view('landing/etalase', $data);
        $this->load->view('templates/landing_footer');
    }
}
