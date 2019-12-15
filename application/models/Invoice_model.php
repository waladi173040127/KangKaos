<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Invoice_model extends CI_Model
{
	
	public function index(){
		date_default_timezone_set('Asia/Jakarta');
		$nama = $this->input->post('nama');
		

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
			$this->db->insert('pesanan', $data);
			return TRUE;
		}
	}

	public function tampil_data(){
		$result = $this->db->get('invoice');
		if ($result->num_rows() >0) {
			return $result->result();
		}else{
			return FALSE;
		}
	}
}