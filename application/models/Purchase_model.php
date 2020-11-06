<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchase_model extends CI_Model
{
    public function add_to_cart($input)
    {
        $obat = $this->db->get_where('obat', ["id" => $input["obat_id"]])->row_array();

        $data = [
            "user_id" => $input["user_id"],
            "id_obat" => $input["obat_id"],
            "nama_obat" => $obat["nama"],
            "harga" => $obat["harga"],
            "qty" => $input["qty"],
            "total" => $obat["harga"] * $input["qty"]
        ];

        $this->db->insert('cart', $data);
    }
}
