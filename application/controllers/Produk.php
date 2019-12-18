<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
       $this->load->library('form_validation');
        $this->load->model('Produk_model');
    }
	 public function index()
    {
        $data['title'] = 'Menu Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Produk_model', 'produk');
       // $data['index'] = $this->produk->getAllProduk();
        $data['produk'] = $this->db->get('produk')->result_array();
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('size', 'Size', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');
        $this->form_validation->set_rules('detail', 'Detail', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('produk/index', $data);
            $this->load->view('templates/footer');
        } else {

            //cek kalo gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/images/produk/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'category' => htmlspecialchars($this->input->post('category', true)),
                'size' => htmlspecialchars($this->input->post('size', true)),
                'price' => htmlspecialchars($this->input->post('price', true)),
                'stock' => htmlspecialchars($this->input->post('stock', true)),
                'detail' => htmlspecialchars($this->input->post('detail', true))
                
            ];
            $this->db->insert('produk', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your produk is ready!</div>');
            redirect('produk');
        }
       
    }
    public function hapus($id_brg)
    {
        $this->Produk_model->delete($id_brg);
       // $this->db->delete('produk', ['id' => $id]);
        redirect('produk');
    }


    public function detailProduk($id_brg){

        $data['title'] = 'Detail Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get('produk')->result_array();
        $data['produk2'] = $this->Produk_model->getProdukById($id_brg);
        $this->load->view('templates/cart_header', $data);
        $this->load->view('produk/detailProduk', $data);
        $this->load->view('templates/cart_footer');
    }

      public function detailProduk($id){

        $data['title'] = 'Detail Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get('produk')->result_array();
        $data['produk2'] = $this->Produk_model->getProdukById($id_brg);
        $this->load->view('templates/cart_header', $data);
        $this->load->view('produk/detailProduk', $data);
        $this->load->view('templates/cart_footer');
    }

    public function edit($id){
        $where = array('id' => $id);
        $data['produk'] = $this->Produk_model->edit_produk($where, 'produk')->result();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('produk/editProduk', $data);
            $this->load->view('templates/footer');
    }
    public function update(){
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $price = $this->input->post('price');
        $category = $this->input->post('category');
        $size = $this->input->post('size');
        $detail = $this->input->post('detail');
        $stock = $this->input->post('stock');
        $image = $this->input->post('image');

        $data = array(

            'name' => $name,
            'price' => $price,
            'category' => $category,
            'size' => $size,
            'detail' => $detail,
            'stock' => $stock,
            'image' => $image
        );

        $where = array(
            'id' => $id
        );

        $this->Produk_model->update_data($where,$data, 'produk');
        redirect('Produk');
    }
    
}
