<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Etalase extends CI_Controller
{
    public function index()
    {
        $data["url"] = $this->uri->segment(1);

        echo "Etalase";
    }
}
