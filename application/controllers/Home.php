<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Home extends CI_Controller{

 	public function index(){
 		$data['title'] = 'Home';
 		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		$data['produk'] = $this->db->get('produk')->result_array();
 		$this->load->view('templates/home_header', $data);
 		$this->load->view('home/index', $data);
 		$this->load->view('templates/home_footer');
 	}
 }

  ?>