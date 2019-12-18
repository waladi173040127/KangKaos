<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Produk_model extends CI_Model
{
	public function getAllProduk(){
		$query = "SELECT * FROM produk";
		return $this->db->query($query)->result_array();
	}
	public function delete($id_brg){
        $this->db->delete('produk', ['id_brg' => $id_brg]);
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

	public function edit_produk($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}




}