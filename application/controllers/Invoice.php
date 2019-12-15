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
 		$data['invoice'] = $this->Invoice_model->tampil_data();
 		 $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
 		$this->load->view('invoice/index', $data);
        $this->load->view('templates/footer');
 	}
 }

  ?>