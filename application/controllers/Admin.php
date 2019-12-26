<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 class Admin extends CI_Controller{
 	public function __construct()
    {
        parent::__construct();
        is_logged_in();
           $this->load->model('Produk_model');
    }
 	public function index(){
 		$data['title'] = 'Produk KangKaos';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->Produk_model->tampil_data()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
 	}

    public function man(){
        $data['title'] = 'Man';
        $data['title2'] = 'Produk MAN';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get('produk')->result_array();
        $data['man'] = $this->Category_model->data_man()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/man', $data);
        $this->load->view('templates/footer');
    }

    public function woman(){
        $data['title'] = 'Woman';
        $data['title2'] = 'Produk Woman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['woman'] = $this->Category_model->data_woman()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/woman', $data);
        $this->load->view('templates/footer');
    }

 }