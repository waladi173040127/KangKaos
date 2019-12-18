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
    public function detail_cart(){
        $data['title'] = 'Page Cart';
        $data['title2'] = 'Your Cart';
        $this->load->view('templates/home_header', $data);
        $this->load->view('cart/detail_cart');
        $this->load->view('templates/home_footer');
    }
 	public function keranjang($id_brg){
 		$barang = $this->Produk_model->find($id_brg);
 		$data = array(
        'id'      => $barang->id_brg,
        'qty'     => 1,
        'price'   => $barang->price,
        'name'    => $barang->name
        
			);

			$this->cart->insert($data);
			redirect('home');
 	}
 	public function delete_cart(){
 		$this->cart->destroy();
 		redirect('home');
 	}

 	public function pay_produk(){
         if ($this->session->userdata('email')) {
            $data['title'] = 'Pay Produk';
        $this->load->view('templates/home_header', $data);
        $this->load->view('cart/pay_produk');
        $this->load->view('templates/home_footer');
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
 			$this->load->view('templates/home_header', $data);
	 		$this->load->view('cart/send_produk');
	 		$this->load->view('templates/home_footer');
 		} else {
 			echo "Maat pesananan anda gagal diproses";
 		}
 		
 	}

 }

  ?>