<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Cart extends CI_Controller{

 	public function index(){
 		$data['title'] = 'Page Cart';
 		//$data['nama'] = $nama;
 		$this->load->view('templates/cart_header', $data);
 		$this->load->view('cart/index');
 		$this->load->view('templates/cart_footer');
 	}
 }

  ?>