<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * ONPOTIK - Online Apotik
 * Sistem Informasi Apotik Online
 * Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */

class MyController extends CI_Controller {

    public $data = array();
    public function __construct() {
        parent::__construct();
        $temp = $this->db->get_where('apotik', array('id_website' => 1))->result_array();
        $this->data = $temp[0];
        $this->data;
    }

}
