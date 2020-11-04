<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat_model extends CI_model
{
    public function get()
    {
        $this->db->order_by('nama', 'ASC');
        return $this->db->get('obat')->result_array();
    }

    public function getbyid($id)
    {
        return $this->db->get_where('obat', ['id' => $id])->row_array();
    }

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


    public function update($datafile)
    {
        $gambarOld = $this->db->get_where('obat', ['id' => $this->input->post('id')])->row_array();

        //Inisiasi Data Gambar
        if ($datafile != NULL) {
            $gambar = $datafile["file_name"];
            unlink(FCPATH . 'assets/img/etalase/' . $gambarOld["gambar"]);
        } else {
            $gambar = $gambarOld["gambar"];
        }

        //Data Input
        $data = [
            "nama" => htmlspecialchars($this->input->post('nama', true)),
            "harga" => htmlspecialchars($this->input->post('harga', true)),
            "stock" => htmlspecialchars($this->input->post('banyak', true)),
            "deskripsi" => htmlspecialchars($this->input->post('desc', true)),
            "gambar" => $gambar
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('obat', $data);
    }

    public function destroy($id)
    {
        $gambar = $this->db->get_where('obat', ['id' => $id])->row_array();

        unlink(FCPATH . 'assets/img/etalase/' . $gambar["gambar"]);

        $this->db->delete('obat', ['id' => $id]);
    }
}
