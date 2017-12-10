<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/* 
ONPOTIK - Online Apotik
Sistem Informasi Apotik Online
Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */

class User extends MyController {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_Model');
    }
    
    function index() {
        $this->data['jumlahUser'] = $this->User_Model->hitungSemuaUser();
        $this->data['user'] = $this->User_Model->getSemuaUser();
        $this->load->view('admin/user', $this->data);
    }
    
    function getDetail($id = null){
        if($id !== null){
            return $this->User_Model->getDetail();
        } else {
            show_404();
        }
    }
    
    function aksiTambah(){
        $user = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level')
        );
        
        $this->User_Model->tambahUser($user, 'user');
        redirect('admin/user');
    }
    
    //  ajax
    public function ajax_edit($id) {
        $data['userEdit'] = $this->User_Model->getById($id);
        echo json_encode($data);
    }
}