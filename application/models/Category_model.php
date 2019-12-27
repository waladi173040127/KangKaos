<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{
	public function data_woman(){
		return $this->db->get_where('produk', array('category' => 
				'woman'));
	}

	public function data_man(){
		return $this->db->get_where('produk', array('category' => 
				'Man'));
	}
}