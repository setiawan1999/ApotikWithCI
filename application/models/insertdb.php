<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertdb extends CI_Model {

	public function addpetugas($foto)
	{
		# code...
		$object = array(
				'ALAMAT_KARYAWAN' => $this->input->post('alamat_karyawan'),
				'NAMA_KARYAWAN' => $this->input->post('nama_karyawan'),
				'ROLE_KARYAWAN' => $this->input->post('role_karyawan'),
				'TTL_KARYAWAN' => $this->input->post('tgl_lahir_karyawan'),
				'FOTO_KARYAWAN' => $foto['file_name'],
				'JK_KARYAWAN' => $this->input->post('jk_karyawan')
			);

		$this->db->insert('karyawan', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}	

	public function addaccount($nip)
	{
		# code...
		$object = array(
				'USERNAME' => $this->input->post('username_karyawan'),
				'NIP_KARYAWAN' => $nip,
				'PASSWORD' => $this->input->post('password_karyawan')
			);

		$this->db->insert('account', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function addsuplier()
	{
		# code...
		$object = array(
					'ALAMAT_SUPLIER' => $this->input->post('alamat_suplier'),
					'NAMA_SUPLIER' => $this->input->post('nama_suplier'),
					'KOTA_SUPLIER' => $this->input->post('kota_suplier'),
					'TELP_SUPLIER' => $this->input->post('telp_suplier')
				);

			$this->db->insert('suplier', $object);

			if ($this->db->affected_rows()) {
				# code...
				return TRUE;
			}else{
				return FALSE;
			}
	}

	public function addobat($foto)
	{
		# code...
		$object = array(
				'NAMA_OBAT' => $this->input->post('nama_obat'),
				'PRODUSEN' => $this->input->post('produsen_obat'),
				'HARGA' => $this->input->post('harga_obat'),
				'FOTO_OBAT' => $foto['file_name'],
				'ID_SUPLIER' => $this->input->post('id_suplier'),
				'STOCK' => $this->input->post('stock_obat'),
				'STATUS_OBAT'=> 'ada'
			);

		$this->db->insert('obat', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function adddatatransaksi($harga)
	{
		# code...
		$object = array(
				'TOTAL_HARGA' => $harga,
				'TGL_BELI' => $this->input->post('tgl_beli'),
				'NAMA_PELANGGAN' => $this->input->post('nama_pelanggan')
				);

		$this->db->insert('data_transaksi', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		} else {
			# code...
			return FALSE;
		}
		
	}

	public function adddetiltransaksi()
	{
		# code...
		$object = array(
				'ID_OBAT' => $this->input->post('id_obat'),
				'NIP_KARYAWAN' => $this->input->post('nip_karyawan'),
				'ID_TRANSAKSI' => $this->input->post('id_transaksi'),
				'JUM_OBAT' => $this->input->post('jum_obat'),
				'SUB_HARGA' => $this->input->post('sub_harga'),
				'NAM_OBAT' => $this->input->post('obat'),
				);

		$this->db->insert('detil_transaksi', $object);

		if ($this->db->affected_rows()) {
			# code...
			return TRUE;
		} else {
			# code...
			return FALSE;
		}
	}
}

/* End of file insertdb.php */
/* Location: ./application/models/insertdb.php */