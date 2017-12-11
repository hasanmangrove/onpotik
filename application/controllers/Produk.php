<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/* 
ONPOTIK - Online Apotik
Sistem Informasi Apotik Online
Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */

class Produk extends MyController{
    public function __construct() {
        parent::__construct();
    }
    
    function index($id = NULL) {
        if($id == NULL){
            $this->load->view('public/produk2', $this->data);
        } else {
            $this->load->view('public/produk', $this->data);
        }
    }
}