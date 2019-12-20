<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Home extends CI_Controller{
 	 public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    }

 	public function index(){
 		$data['title'] = 'Home';
 		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		$data['produk'] = $this->db->get('produk')->result_array();
 		if($this->input->post('keyword')){
 			$data['produk'] = $this->Produk_model->cariDataProduk();
 			
 		} 
 			$this->load->view('templates/home_header', $data); 
 			$this->load->view('home/index', $data);
 			$this->load->view('templates/home_footer');
 	
 		
 	}
 }

  ?>