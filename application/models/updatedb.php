<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Updatedb extends CI_Model {

	public function updatekaryawan($id,$foto)
	{
		# code...
		$object = array(
				'NAMA_KARYAWAN' => $this->input->post('nama_karyawan'),
				'ALAMAT_KARYAWAN' => $this->input->post('alamat_karyawan'),
				'ROLE_KARYAWAN' => $this->input->post('role_karyawan'),
				'TTL_KARYAWAN' => $this->input->post('ttl_karyawan'),
				'JK_KARYAWAN' => $this->input->post('jk_karyawan'),
				'FOTO_KARYAWAN' => $foto['file_name']
			);
		$this->db->where('NIP_KARYAWAN',$id)
				 ->update('karyawan', $object);

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function updatesuplier($id)
	{
		# code...
		$object = array(
				'NAMA_SUPLIER' => $this->input->post('nama_suplier'),
				'ALAMAT_SUPLIER' => $this->input->post('alamat_suplier'),
				'KOTA_SUPLIER' => $this->input->post('kota_suplier'),
				'TELP_SUPLIER' => $this->input->post('telp_suplier'),
			);
		$this->db->where('ID_SUPLIER',$id)
				 ->update('suplier', $object);

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function editstock($id,$stock)
	{
		# code...
		$object = array(
				'STOCK' => $stock
			);
		$this->db->where('ID_OBAT',$id)
				 ->update('obat', $object);

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}

/* End of file updatedb.php */
/* Location: ./application/models/updatedb.php */