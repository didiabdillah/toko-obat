<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat_model extends CI_model
{
    public function insert($datafile)
    {
        //Inisiasi Data Gambar
        if ($datafile != NULL) {
            $gambar = $datafile["file_name"];
        }

        //Data Input
        $data = [
            "nama" => htmlspecialchars($this->input->post('nama', true)),
            "harga" => htmlspecialchars($this->input->post('harga', true)),
            "stock" => htmlspecialchars($this->input->post('banyak', true)),
            "deskripsi" => htmlspecialchars($this->input->post('desc', true)),
            "gambar" => $gambar
        ];

        $this->db->insert('obat', $data);
    }
}
