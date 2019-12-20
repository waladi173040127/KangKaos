<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Invoice extends CI_Controller{
 	public function __construct()
    {
        parent::__construct();
       $this->load->library('form_validation');
        $this->load->model('Produk_model');
    }
 	public function index(){
 		$data['title'] = 'Page Invoice';
 		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
    $data['a'] = $this->db->get('invoice')->result_array();
 		$data['invoice'] = $this->Invoice_model->tampil_data();
 		 $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
 		$this->load->view('invoice/index', $data);
        $this->load->view('templates/footer');
 	}

 	public function detail_invoice($id_invoice){
 		$data['title'] = 'Page Invoice';
 		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		$data['invoice'] = $this->Invoice_model->ambil_id_invoice($id_invoice);
 		$data['pesanan'] = $this->Invoice_model->ambil_id_pesanan($id_invoice);
 		 $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
 		$this->load->view('invoice/detail_invoice', $data);
        $this->load->view('templates/footer');
 	}
      public function delete_invoice($id_invoice)
    {
        $where = array('id_invoice' => $id_invoice);
         $this->Invoice_model->delete_invoice($where,'invoice');
        redirect('invoice');
    }
 	
 }

  ?>