<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/* 
 * ONPOTIK - Online Apotik
 * Sistem Informasi Apotik Online
 * Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */

class MyController extends CI_Controller{
    
    public $data = array(
        'namaWebsite' => 'Onpotik',
        'nomer' => '085745462845',
        'email' => 'hasanmarove@gmail.com',
        'noRekening' => '123456789',
        'namaRekening' => 'Hasan Mangrove',
        'alamat' => 'Jl. Samijan No. 69 Caturtunggal Bantul Yogyakarta'
    );
    
    public function __construct() {
        parent::__construct();
        $this->data;
    }
}