<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Menu extends CI_Controller{
 	public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model');
    }

 	public function index(){
 		$data['title'] = 'Page Menu';
 		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		$data['produk'] = $this->db->get('produk')->result_array();
 		$this->load->view('templates/home_header', $data);
 		$this->load->view('menu/index', $data);
 		$this->load->view('templates/home_footer');
 	}
 }

  ?>