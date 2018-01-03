<?php
/**
 * Created by PhpStorm.
 * User: Mangrove
 * Date: 12/12/2017
 * Time: 8:58 PM
 */

class cart_model extends MyController{
    function get_all_produk(){
        $hasil=$this->db->get('tbl_produk');
        return $hasil->result();
    }
}