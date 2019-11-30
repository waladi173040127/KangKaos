<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Category extends CI_Controller{

 	public function index(){
 		$data['title'] = 'Page Category';
 		//$data['nama'] = $nama;
 		$this->load->view('templates/ct_header', $data);
 		$this->load->view('category/index');
 		$this->load->view('templates/home_footer');
 	}
 }

  ?>