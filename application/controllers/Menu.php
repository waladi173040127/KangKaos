<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Menu extends CI_Controller{

 	public function index(){
 		$data['title'] = 'Page User';
 		//$data['nama'] = $nama;
 		$this->load->view('templates/home_header', $data);
 		$this->load->view('menu/index');
 		$this->load->view('templates/home_footer');
 	}
 }

  ?>