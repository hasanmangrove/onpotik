<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
ONPOTIK - Online Apotik
Sistem Informasi Apotik Online
Kelompok 4 - Ardi | Didik | Irsalina | Hasan | Faisal
 */

class Produk extends MyController
{
    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->data['produk'] = $this->db->get('produk')->result();
        $this->load->view('public/produk', $this->data);
    }

    function checkout(){
        $this->load->view('public/checkout', $this->data);
    }

    function aksi_checkout(){
        var_dump($this->cart->contents());
    }

    function add_to_cart(){ //fungsi Add To Cart
        $data = array(
            'id' => $this->input->post('produk_id'),
            'name' => $this->input->post('produk_nama'),
            'price' => $this->input->post('produk_harga'),
            'qty' => $this->input->post('quantity'),
        );
        $this->cart->insert($data);
        echo $this->show_cart(); //tampilkan cart setelah added
    }

    function show_cart(){ //Fungsi untuk menampilkan Cart
        $output = '';
        $no = 0;
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                <tr>
                    <td>'.$items['name'].'</td>
                    <td>'.number_format($items['price']).'</td>
                    <td>'.$items['qty'].'</td>
                    <td>'.number_format($items['subtotal']).'</td>
                    <td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
                </tr>
            ';
        }
        $output .= '
            <tr>
                <th colspan="3">Total</th>
                <th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
            </tr>
        ';
        return $output;
    }

    function load_cart(){ //load data cart
        echo $this->show_cart();
    }

    function hapus_cart(){ //fungsi untuk menghapus item cart
        $data = array(
            'rowid' => $this->input->post('row_id'),
            'qty' => 0,
        );
        $this->cart->update($data);
        echo $this->show_cart();
    }

    function getCity($province){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=$province",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: 1fd1ec08511ef9da5f498941a4087a05"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            //echo $response;
            $data = json_decode($response, true);
            //echo json_encode($k['rajaongkir']['results']);


            for ($j=0; $j < count($data['rajaongkir']['results']); $j++){


                echo "<option value='".$data['rajaongkir']['results'][$j]['city_id']."'>".$data['rajaongkir']['results'][$j]['city_name']."</option>";

            }
        }
    }

    function getCost()
    {
        $origin = $this->input->get('origin');
        $destination = $this->input->get('destination');
        $berat = $this->input->get('berat');
        $courier = $this->input->get('courier');

        $data = array('origin' => $origin,
            'destination' => $destination,
            'berat' => $berat,
            'courier' => $courier

        );

        $this->load->view('public/src/getCost', $data);
    }
}