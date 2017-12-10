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
    
    public function getSemuaUser(){
        return $this->db->get('user')->result();
    }
    
    public function hitungSemuaUser(){
        return $this->db->count_all('user');
    }
    
    public function tambahUser($data, $table) {
        $this->db->insert($table, $data);
    }
    
    public function getById($id) {
        $this->db->select("SELECT * FROM user");
        $this->db->where('id_user', $id);
        return $this->db->get()->result();
    }
}