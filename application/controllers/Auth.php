<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Auth extends CI_Controller{

 	public function index(){
 		$data['judul'] = 'Page Login';
 		//$data['nama'] = $nama;
 		$this->load->view('templates/auth_header', $data);
 		$this->load->view('auth/index');
 		// $this->load->view('templates/home_footer');
 	}
 }

  ?>