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
        $this->load->helper('form');
    }
    
    function index() {
        $this->data['produk'] = $this->db->get('produk')->result();
        $this->data['error'] = "";
        $this->load->view('admin/produk', $this->data);
    }
    
    function aksi_tambah(){
        $config['upload_path'] = './uploads';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 100;
        $config['max_width'] = 1024;
        $config['max_height'] = 768;
        
        $this->load->library('upload', $config);
        
        if(!$this->upload->do_upload('gambar')){
            $this->data['error'] = array('error' => $this->upload->display_errors());
        } else {
            $this->data['upload_data'] = array('upload_data' => $this->upload->data());
            $temp = $this->upload->data();
            $produk = array(
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'stok' => $this->input->post('stok'),
                'jenis_produk' => $this->input->post('jenis_produk'),
                'tag' => $this->input->post('tag'),
                'deskripsi' => $this->input->post('deskripsi'),
                'gambar' => $temp['full_path']
            );
            
            $this->db->insert('produk', $produk);
            redirect('admin/produk');
        }
    }
}