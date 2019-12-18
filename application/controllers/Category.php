<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Category extends CI_Controller{

 	public function index(){
 		$data['title'] = 'Page Category';
 		$data['title2'] = 'Popular on Little Closet';
 		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		$data['produk'] = $this->db->get('produk')->result_array();
 		$this->load->view('templates/home_header', $data);
 		$this->load->view('category/index', $data);
 		$this->load->view('templates/home_footer');
 	}
 	public function woman(){
 		$data['title'] = 'Page Woman';
 		$data['title2'] = 'Popular on Woman';
 		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		$data['woman'] = $this->Category_model->data_woman()->result();
 		$this->load->view('templates/home_header', $data);
 		$this->load->view('category/woman', $data);
 		$this->load->view('templates/home_footer');
 	}
 	public function man(){
 		$data['title'] = 'Page Category';
 		$data['title2'] = 'Popular on Man';
 		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
 		 $data['produk'] = $this->db->get('produk')->result_array();
 		$data['man'] = $this->Category_model->data_man()->result();
 		$this->load->view('templates/home_header', $data);
 		$this->load->view('category/man', $data);
 		$this->load->view('templates/home_footer');
 	}
 }

  ?>