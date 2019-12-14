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
}