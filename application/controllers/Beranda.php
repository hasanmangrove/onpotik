<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * ONPOTIK - Online Apotik
  . * Sistem Informasi Apotik Online. * Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */

class Beranda extends MyController {

    public function __construct() {
        parent::__construct();
    }

    //  funsi menampilkan beberapa halaman yang ada di website
    function index() {

        $this->load->view('public/beranda', $this->data);
    }
}
