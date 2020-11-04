<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{
    public function index()
    {
        $data["title"] = "Obat Exodus Drugstore";

        $data["url"] = $this->uri->segment(1);

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/obat', $data);
        $this->load->view('templates/admin_footer');
    }

    public function insert()
    {
        $data["title"] = "Insert Obat Exodus Drugstore";

        $data["url"] = $this->uri->segment(1);

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/insert_obat', $data);
        $this->load->view('templates/admin_footer');
    }

    public function store()
    {
    }

    public function edit()
    {
        $data["title"] = "Edit Obat Exodus Drugstore";

        $data["url"] = $this->uri->segment(1);

        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/edit_obat', $data);
        $this->load->view('templates/admin_footer');
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
