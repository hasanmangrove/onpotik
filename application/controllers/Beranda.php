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

    function penawaran() {
        $this->load->view('public/penawaran', $this->data);
    }

    function tentang() {
        $this->load->view('public/tentang', $this->data);
    }

    function kontak() {
        $this->load->view('public/kontak', $this->data);
    }

    function faq() {
        $this->load->view('public/faq', $this->data);
    }

    function produk() {
        $this->load->view('public/produk', $this->data);
    }
    
    function checkout() {
        $this->load->view('public/checkout', $this->data);
    }
    
    function produk2() {
        $this->load->view('public/produk2', $this->data);
    }

}
