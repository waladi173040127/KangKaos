<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice_model extends CI_Model
{
	public function getIdProdukByUser($id_brg){
		$result = $this->db->get_where('produk', ['id_brg' => $id_brg]);
		if ($result->num_rows() >0) {
			return $result->result();
		}else{
			return false;
		}
	}
	public function index(){
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		

		$invoice = array(
			'nama' => $nama,
			'alamat' => '=',
			'tgl_pesan' => date('Y-m-d H:i:s'),
			'batas_bayar' => date('Y-m-d H:i:s', mktime( date('H'), date('i'),date('s'),date('m'),date('d') +1,date('Y')))

		);
		$this->db->insert('invoice', $invoice);
		$id_invoice = $this->db->insert_id();

		foreach($this->cart->contents() as $i){
			$data = array(
				'id_invoice' => $id_invoice,
				'id_brg' => $i['id'],
				'name' => $i['name'],
				'jumlah' => $i['qty'],
				'harga' => $i['price']
			);
			$barang =$this->db->get_where('produk', ['id_brg' => $i['id'] ])->row_array();
			$this->db->insert('pesanan', $data);
			$this->db->update('produk', ['stock' => ($barang['stock'] - $i['qty'])], ['id_brg' => $i['id']]);
			
			
		}
		return true;
	}

	public function tampil_data(){
		$result = $this->db->get('invoice');
		if ($result->num_rows() >0) {
			return $result->result();
		}else{
			return false;
		}
	}

	public function ambil_id_invoice($id_invoice){
		//barang ????
		$result = $this->db->where('id_invoice', $id_invoice)->limit(
				1)->get('invoice');
		if ($result->num_rows() > 0) {
			return $result->row();
		} else {
			return false;
		}
	}

	public function ambil_id_pesanan($id_invoice){
		$result = $this->db->where('id_invoice', $id_invoice)->get('pesanan');
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return false;
		}
	}

	public function delete_invoice($where, $table){
        $this->db->where($where);
		$this->db->delete($table);
    }
    
}