<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * ONPOTIK - Online Apotik
. * Sistem Informasi Apotik Online.
 * Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */

class Dashboard extends MyController{
    public function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->view('admin/dashboard', $this->data);
    }
    
    public function logout() {
        $this->session->sess_destroy();
        redirect('beranda');
    }
}