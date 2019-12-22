<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Cart extends CI_Controller{
 	public function __construct()
    {
        parent::__construct();
       $this->load->library('form_validation');
        $this->load->model('Produk_model');
        $this->load->model('Invoice_model');
    }
    public function detail_cart(){
        $data['title'] = 'Page Cart';
        $data['title2'] = 'Your Cart';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->tampil_data()->result();
        $this->load->view('templates/hm_header', $data);
        $this->load->view('cart/detail_cart');
        $this->load->view('templates/hm_footer');
    }
 	public function keranjang($id_brg){
 		$barang = $this->Produk_model->find($id_brg);
 		$data = array(
        'id'      => $barang->id_brg,
        'category'      => $barang->category,
        'image'   => $barang->image,
        'qty'     => 1,
        'price'   => $barang->price,
        'name'    => $barang->name
        
			);

			$this->cart->insert($data);
			redirect('category');
 	}

     // hapus produk di keranjang
      public function delete_invoice($rowid)
    {
       $data = array(
            'rowid' => $rowid,
            'qty' => 0
       );
       $this->cart->update($data);
        redirect('cart/detail_cart');
    }
      public function kurangi_invoice($rowid)
    {
        $barang = $this->Produk_model->find($id_brg);
        $data = array(
            'rowid' => $rowid,
            'qty' => 1
       );
       
       $this->cart->update($data);
        redirect('cart/detail_cart');
    }
   
 	public function delete_cart(){
 		$this->cart->destroy();
 		redirect('cart/detail_cart');
 	}

 	public function pay_produk(){
        $this->form_validation->set_rules('nama', 'Name', 'required');
        $this->form_validation->set_rules('addres', 'Address', 'required');
        $this->form_validation->set_rules('noHp', 'noHp', 'required');
         if ($this->session->userdata('email')) {
             if ($this->form_validation->run() == FALSE)
                {
                  $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                  $data['title'] = 'Pay Produk';
                  $this->load->view('templates/hm_header', $data);
                  $this->load->view('cart/pay_produk');
                  $this->load->view('templates/hm_footer');
                }
                else
                {
                 $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                 $data['title'] = 'Send Proudk';
                 $data['title2'] = 'Your Cart';
                 $is_processed = $this->Invoice_model->index();
                 if ($is_processed) {
                  $this->cart->destroy();
                    // $this->load->view('templates/home_header', $data);
                  $this->load->view('cart/send_produk');
                    // $this->load->view('templates/home_footer');
                   }else {
                  echo "Maat pesananan anda gagal diproses";
                  }
                }
             
        } else {
            $this->session->set_flashdata('message2', '<div class="alert alert-success" role="alert">please, login before you pay your produk !</div>');
              redirect('auth');
        }
 	}
 	public function send_produk(){
       
 		
 	}

   

 }

  ?>