<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchase extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Purchase_model');
    }

    public function add_to_cart()
    {
        $data = [
            "user_id" => $this->session->userdata('id'),
            "qty" => $this->input->post('qty'),
            "obat_id" => $this->input->post('obat_id')
        ];

        $this->Purchase_model->add_to_cart($data);
    }

    public function cart()
    {
        if ($this->session->userdata('id')) {
            $this->_cart();
        } else {
            redirect('auth');
        }
    }

    private function _cart()
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
        $data["title"] = "Checkout Exodus Drugstore";
        $data["url"] = $this->uri->segment(1);
        // $data["obat"] = $this->Obat_model->get();

        $this->load->view('templates/landing_header', $data);
        $this->load->view('templates/landing_navbar', $data);
        $this->load->view('purchase/checkout');
        $this->load->view('templates/landing_footer');
    }

    public function success()
    {
        $data["title"] = "Success Exodus Drugstore";
        $data["url"] = $this->uri->segment(1);
        // $data["obat"] = $this->Obat_model->get();

        $this->load->view('templates/landing_header', $data);
        $this->load->view('templates/landing_navbar', $data);
        $this->load->view('purchase/success');
        $this->load->view('templates/landing_footer');
    }
}
