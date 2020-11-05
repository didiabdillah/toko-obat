<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Etalase extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Etalase_model");
    }
    public function index()
    {
        $data["title"] = "Etalase Exodus Drugstore";
        $data["etalase"] = $this->Etalase_model->get();
        $data["url"] = $this->uri->segment(1);

        $this->load->view('templates/landing_header', $data);
        $this->load->view('templates/landing_navbar', $data);
        $this->load->view('landing/etalase', $data);
        $this->load->view('templates/landing_footer');
    }

    public function detail($id)
    {
        $data["title"] = "Detail Product Exodus Drugstore";
        $data["detail"] = $this->Etalase_model->getbyid($id);
        $data["url"] = $this->uri->segment(1);
        $data["product_id"] = $id;

        $this->load->view('templates/landing_header', $data);
        $this->load->view('templates/landing_navbar', $data);
        $this->load->view('landing/detail_product', $data);
        $this->load->view('templates/landing_footer');
    }
}
