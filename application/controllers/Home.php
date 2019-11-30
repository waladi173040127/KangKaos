<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Home extends CI_Controller{

 	public function index(){
 		$data['title'] = 'Home2';
 		//$data['nama'] = $nama;
 		$this->load->view('templates/home_header', $data);
 		$this->load->view('home/index');
 		$this->load->view('templates/home_footer');
 	}
 }

  ?>