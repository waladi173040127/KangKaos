<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
	public function getAllProduk(){
		$query = "SELECT * FROM produk";
		return $this->db->query($query)->result_array();
	}
	public function delete($id){
        $this->db->delete('produk', ['id' => $id]);
    }
    public function getProdukById($id)
	{
		return $this->db->get_where('produk', ['id' => $id])->row_array();
	}

	public function find($id){
		$result= $this->db->where('id', $id)
							->limit(1)
							->get('produk');
		if ($result->num_rows() >0) {
			return $result->row();
		}else{
			return array();
		}
	}
}