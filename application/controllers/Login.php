<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MyController {

    public function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->helper('user_helper');
        $this->load->view('public/login', $this->data);
    }

    public function cek_login() {

        $this->load->model('User_Model');

        $data = array(
            'username' => $this->input->post('username'));
        $hasil = $this->User_Model->cek_user($data);

        if ($hasil->num_rows() == 1) {

            $password_crypt = $data['password'];
            $password_login = $post = array('password' => $this->input->post('password'));

            if ($password_crypt == crypt($password_login, $password_crypt)) {
                foreach ($hasil->result() as $sess) {
                    $sess_data['logged_in'] = 'Sudah Login';
                    $sess_data['username'] = $sess->username;
                    $sess_data['level'] = $sess->level;
                    $this->session->set_userdata($sess_data);
                }

                if ($this->session->userdata('level') == 'admin') {
                    redirect('admin/dashboard');
                } elseif ($this->session->userdata('level') == 'apoteker') {
                    redirect('apoteker/dashboard');
                } elseif ($this->session->userdata('level') == 'customer') {
                    redirect('customer/profil');
                }
            } else {
                echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
            }
        } else {
            echo "<script>alert('Gagal Login: Cek username , password!');history.go(-1);</script>";
        }
    }

}
