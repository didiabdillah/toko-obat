<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchase_model extends CI_Model
{
    public function add_to_cart($input)
    {
        $obat = $this->db->get_where('obat', ["id" => $input["obat_id"]])->row_array();
        $cart = $this->db->get_where('cart', ["user_id" => $input["user_id"], "id_obat" => $input["obat_id"]])->row_array();

        if ($input["user_id"] == $cart["user_id"] && $input["obat_id"] == $cart["id_obat"]) {
            $new_qty = $input["qty"] + $cart["qty"];
            $new_price = $obat["harga"] * $new_qty;
            $data = [
                "qty" => $new_qty,
                "total" => $new_price
            ];

            $this->db->where('id', $cart["id"]);
            $this->db->update('cart', $data);
        } else {
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
}
