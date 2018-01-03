<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
  ONPOTIK - Online Apotik
  Sistem Informasi Apotik Online
  Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */

class Pengaturan extends MyController {

    public function __construct() {
        parent::__construct();
        if($this->session->userdata('level') !== 'admin'){
            redirect();
        }
    }

    function index() {
        $this->data['profil_user'] = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->result();
        $this->data['apotik'] = $this->db->get('apotik')->result();
        $this->load->view('admin/pengaturan', $this->data);
    }

    function aksi_edit_toko() {
        $toko = array(
            'nama_website' => $this->input->post('nama_website'),
            'tagline_website' => $this->input->post('tagline_website'),
            'nama_rekening1' => $this->input->post('nama_rekening1'),
            'nama_rekening2' => $this->input->post('nama_rekening2'),
            'rekening1' => $this->input->post('rekening1'),
            'rekening2' => $this->input->post('rekening2'),
            'bank_rekening1' => $this->input->post('bank_rekening1'),
            'bank_rekening2' => $this->input->post('bank_rekening2'),
            'deskripsi_website' => $this->input->post('deskripsi_website'),
            'alamat_website' => $this->input->post('alamat_website'),
            'kontak_website' => $this->input->post('kontak_website'),
            'long_website' => $this->input->post('long_website'),
            'lat_website' => $this->input->post('lat_website'),
            'id_provinsi' => $this->input->post('id_provinsi'),
            'id_kabupaten' => $this->input->post('id_kabupaten')
        );

        $this->db->update('apotik', $toko, "id_website=1");
        redirect('admin/pengaturan');
    }

    function aksi_edit_profil() {
        $profil = array(
            'nama_depan' => $this->input->post('nama_depan'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat' => $this->input->post('alamat'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'kontak' => $this->input->post('kontak'),
        );
        
        $this->db->update('user', $profil, array('username' => $this->session->userdata('username')));
        redirect('admin/pengaturan');
    }

    function aksi_ubah_password() {
        $this->load->model('User_Model');
        $this->load->helper('user_helper');
        $data = $this->db->get_where('user', array('username' => $this->session->userdata('username')))->result();

        $password_crypt = $data[0]->password;
        $password_login = array('password' => $this->input->post('password_lama'));

        if ($password_crypt == crypt($password_login['password'], $password_crypt)) {
            echo 'cocok';
            $this->db->update(
                    'user', array('password' => bCrypt($this->input->post('password_baru'), 12)), array('username=' . $this->session->userdata('username'))
            );

            redirect('admin/pengaturan');
        } else {
            echo "<script>alert('Password ');history.go(-1);</script>";
        }
    }

}
