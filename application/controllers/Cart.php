<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Cart extends CI_Controller{
 	public function __construct()
    {
        parent::__construct();
       // $this->load->library('form_validation');
        $this->load->model('Produk_model');
    }
 	public function index(){
 		$data['title'] = 'Page Cart';
 		//$data['nama'] = $nama;
 		$this->load->view('templates/cart_header', $data);
 		$this->load->view('cart/index');
 		$this->load->view('templates/cart_footer');
 	}
 	public function keranjang($id){
 		$barang = $this->Produk_model->find($id);
 		$data = array(
        'id'      => $barang->id,
        'qty'     => 1,
        'price'   => $barang->price,
        'name'    => $barang->name
        
			);

			$this->cart->insert($data);
			redirect('home');
 	}
 }

  ?>