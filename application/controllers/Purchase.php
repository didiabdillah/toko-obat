<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchase extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Purchase_model');
    }

    public function add_to_cart($id_product)
    {
        if ($this->session->userdata('id')) {
            $data = [
                "user_id" => $this->session->userdata('id'),
                "qty" => $this->input->post('qty'),
                "obat_id" => $id_product
            ];

            $this->Purchase_model->add_to_cart($data);

            redirect('etalase/detail/' . $id_product);
        } else {
            redirect('auth');
        }
    }

    public function cart()
    {
        $data = $this->Purchase_model->getCart();

        if ($this->session->userdata('id')) {
            $this->_cart($data);
        } else {
            redirect('auth');
        }
    }

    public function delete_cart($id)
    {
        $this->Purchase_model->deleteCart($id);

        redirect("purchase/cart");
    }

    private function _cart($cart)
    {
        $data["title"] = "Chart Exodus Drugstore";
        $data["url"] = $this->uri->segment(1);

        $data["cart"] = $cart;
        // $data["obat"] = $this->Obat_model->get();

        $this->load->view('templates/landing_header', $data);
        $this->load->view('templates/landing_navbar', $data);
        $this->load->view('purchase/cart', $data);
        $this->load->view('templates/landing_footer');
    }

    public function checkout()
    {
        $data["title"] = "Checkout Exodus Drugstore";
        $data["url"] = $this->uri->segment(1);
        $data["cart"] = $this->Purchase_model->getCart();
        // $data["obat"] = $this->Obat_model->get();

        $this->load->view('templates/landing_header', $data);
        $this->load->view('templates/landing_navbar', $data);
        $this->load->view('purchase/checkout', $data);
        $this->load->view('templates/landing_footer');
    }

    public function procced()
    {
        $user_id = $this->session->userdata('id');

        $data = [
            "user_id" => $user_id
        ];

        $this->Purchase_model->procced($data);
        redirect('purchase/success');
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
