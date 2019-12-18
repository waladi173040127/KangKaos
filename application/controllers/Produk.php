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
        $data['produk'] = $this->Produk_model->tampil_data()->result();
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
            // $this->db->insert('produk', $data);
            $this->Produk_model->tambah_produk($data, 'produk');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your produk is ready!</div>');
            redirect('produk');
        }
       
    }
    public function edit($id_brg){
        $data['title'] = 'Menu Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id_brg' => $id_brg);
        $data['produk'] = $this->Produk_model->edit_produk($where, 'produk')->result();
        $data['category'] = ['Woman', 'Man'];
         $data['size'] = ['M', 'L', 'XL'];
        $data['produk2'] = $this->Produk_model->getProdukById($id_brg);
         $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('produk/edit_produk', $data);
            $this->load->view('templates/footer');
    }

    public function update(){
                    // cek jika ada gambar yang akan di upload
            $upload_image = $_FILES['image']['name'];

            if($upload_image){
                $old_image = $data['produk']['image'];
                if($old_image != 'default.jpg'){
                    unlink(FCPATH . 'assets/images/profile/' . $old_image);
                }

                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/images/profile/';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('image')){
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                }else{
                    echo $this->upload->dispay_errors();
                }
            }
        $id_brg                 = htmlspecialchars($this->input->post('id_brg', true));
        $name                 = htmlspecialchars($this->input->post('name', true));
        $category                 = htmlspecialchars($this->input->post('category', true));
        $size                = htmlspecialchars($this->input->post('size', true));
        $price                = htmlspecialchars($this->input->post('price', true));
        $stock                 = htmlspecialchars($this->input->post('stock', true));
        $detail                 = htmlspecialchars($this->input->post('detail', true));

        $data = array(
            'name' => $name,
            'category' => $category,
            'size' => $size,
            'price' => $price,
            'stock' => $stock,
            'detail' => $detail
        );
        $where = array('id_brg' => $id_brg);
        $this->Produk_model->update_produk($where,$data,'produk');
          $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">update Produk!</div>');
        redirect('produk');
    }
    public function hapus($id_brg)
    {
        $where = array('id_brg' => $id_brg);
         $this->Produk_model->delete_produk($where,'produk');
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
    public function detailProdukAdmin($id_brg){
       $data['title'] = 'Menu Produk';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id_brg' => $id_brg);
        $data['produk2'] = $this->Produk_model->edit_produk($where, 'produk')->result();
         $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('produk/detailProdukAdmin', $data);
            $this->load->view('templates/footer');
    }
    
}
