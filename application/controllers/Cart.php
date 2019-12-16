<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Cart extends CI_Controller{
 	public function __construct()
    {
        parent::__construct();
       // $this->load->library('form_validation');
        $this->load->model('Produk_model');
        $this->load->model('Invoice_model');
    }
 	public function index(){
 		$data['title'] = 'Page Cart';
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
 	public function detail_cart(){
 		$data['title'] = 'Page Cart';
 		$this->load->view('templates/cart_header', $data);
 		$this->load->view('cart/detail_cart');
 		$this->load->view('templates/cart_footer');
 	}

 	public function delete_cart(){
 		$this->cart->destroy();
 		redirect('home');
 	}

 	public function pay_produk(){
         if ($this->session->userdata('email')) {
            $data['title'] = 'Pay Produk';
        $this->load->view('templates/cart_header', $data);
        $this->load->view('cart/pay_produk');
        $this->load->view('templates/cart_footer');
        } else {
            $this->session->set_flashdata('message2', '<div class="alert alert-success" role="alert">please, login before you pay your produk !</div>');
        redirect('auth');
            redirect('auth/index');

        }
 		

 	}
 	public function send_produk(){
 		$data['title'] = 'Send Proudk';
 		
 		$is_processed = $this->Invoice_model->index();
 		if ($is_processed) {
 			$this->cart->destroy();
 			$this->load->view('templates/cart_header', $data);
	 		$this->load->view('cart/send_produk');
	 		$this->load->view('templates/cart_footer');
 		} else {
 			echo "Maat pesananan anda gagal diproses";
 		}
 		
 	}

 }

  ?>