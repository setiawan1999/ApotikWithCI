<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapusdb extends CI_Model {

	public function delkaryawan($id)
	{
		# code...
		$this->db->where('NIP_KARYAWAN',$id)
				 ->delete('karyawan');

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function delaccount($id)
	{
		# code...
		$this->db->where('NIP_KARYAWAN',$id)
				 ->delete('account');

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function delsuplier($id)
	{
		# code...
		$this->db->where('ID_SUPLIER',$id)
				 ->delete('suplier');

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}

	public function delobat($id)
	{
		# code...
		$data = array(
			'STATUS_OBAT' => 'hapus'
			);
		$this->db->where('ID_OBAT',$id)
				 ->update('obat',$data);

		if($this->db->affected_rows()){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}

/* End of file hapusmodel.php */
/* Location: ./application/models/hapusmodel.php */