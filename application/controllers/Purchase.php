<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchase extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Purchase_model');
    }

    public function cart()
    {
        $data["title"] = "Chart Exodus Drugstore";
        $data["url"] = $this->uri->segment(1);
        // $data["obat"] = $this->Obat_model->get();

        $this->load->view('templates/landing_header', $data);
        $this->load->view('templates/landing_navbar', $data);
        $this->load->view('purchase/cart');
        $this->load->view('templates/landing_footer');
    }

    public function checkout()
    {
    }
}
