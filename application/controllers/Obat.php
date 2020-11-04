<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model');
    }
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

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('banyak', 'Banyak', 'required');
        $this->form_validation->set_rules('desc', 'Deskripsi', 'required');


        if ($this->form_validation->run() == false) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('templates/admin_topbar', $data);
            $this->load->view('admin/insert_obat', $data);
            $this->load->view('templates/admin_footer');
        } else {
            //IF
            if ($_FILES["gambar"]["name"]) {
                $config['upload_path']          = './assets/img/etalase/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5120;
                $config['max_width']            = 1920;
                $config['max_height']           = 1080;
                $config['encrypt_name']         = true;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    $data["errorupload"] = $this->upload->display_errors();

                    $this->load->view('templates/admin_header', $data);
                    $this->load->view('templates/admin_sidebar', $data);
                    $this->load->view('templates/admin_topbar', $data);
                    $this->load->view('admin/insert_obat', $data);
                    $this->load->view('templates/admin_footer');
                } else {
                    $data["upload_data"] = $this->upload->data();

                    $this->store($data["upload_data"]);
                }
            } else {
                // $this->Admin_model->BuatPengumuman($data['admin'], NULL);
                // $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Pengumuman Dibuat</div>');
                // redirect('admin/pengumuman');
            }
            //END IF
        }
    }

    public function store($data)
    {
        $this->Obat_model->insert($data);
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Data Ditambahkan</div>');
        redirect('obat/');
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
