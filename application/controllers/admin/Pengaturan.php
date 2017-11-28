<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/* 
ONPOTIK - Online Apotik
Sistem Informasi Apotik Online
Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */

class Pengaturan extends MyController{
    public function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->view('admin/pengaturan', $this->data);
    }
}