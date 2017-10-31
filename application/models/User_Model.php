<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/* 
ONPOTIK - Online Apotik
Sistem Informasi Apotik Online
Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */

class User_Model extends CI_Model{
    public function cek_user($data){
        return $this->db->get_where('user', $data);
    }
}