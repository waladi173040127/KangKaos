<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
	public function tampil_data(){
		return $this->db->get('produk');
	}
	public function tambah_produk($data, $table){
		$this->db->insert($table,$data);
	}
	public function edit_produk($where, $table){
		return $this->db->get_where($table, $where);
	}
	public function update_produk($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete_produk($where, $table){
        $this->db->where($where);
		$this->db->delete($table);
    }

    public function getProdukById($id_brg)
	{
		return $this->db->get_where('produk', ['id_brg' => $id_brg])->row_array();
	}
	public function find($id_brg){
		$result= $this->db->where('id_brg', $id_brg)
							->limit(1)
							->get('produk');
		if ($result->num_rows() >0) {
			return $result->row();
		}else{
			return array();
		}
	}

	public function cariDataProduk(){
		$keyword = $this->input->post('keyword', true);
		$this->db->like('name', $keyword);
		// $this->db->or_like('category', $keyword);
		return $this->db->get('produk')->result_array();
	}

	public function cariDataProdukAdmin(){
		$keyword = $this->input->post('keyword', true);
		$this->db->like('name', $keyword);
		// $this->db->or_like('category', $keyword);
		return $this->db->get('produk')->result();
	}


}