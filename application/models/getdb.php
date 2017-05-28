<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getdb extends CI_Model {

	public function getnipterakhir()
	{
		# code...

		return $this->db->order_by('NIP_KARYAWAN','DESC')
						->limit(1)
						->get('karyawan')
						->row();
	}

	public function getkaryawan()
	{
		# code...
		return $this->db->get('karyawan')
						->result();
	}

	public function getdetilkaryawan($id)
	{
		# code...
		return $this->db->where('NIP_KARYAWAN',$id)
						->get('karyawan')
						->row();
	}

	public function getrole($username)
	{
		# code...
		return $this->db->where('username',$username)
						->join('karyawan', 'account.NIP_KARYAWAN = karyawan.NIP_KARYAWAN')
						->get('account')
						->row();
	}

	public function getsuplier()
	{
		# code...
		return $this->db->get('suplier')
						->result();
	}

	public function getdetilsuplier($id)
	{
		# code...
		return $this->db->where('ID_SUPLIER',$id)
						->get('suplier')
						->row();
	}

	public function getobat()
	{
		# code...
		return $this->db->get('obat')
						->result();
	}

	public function getdetilobat($id)
	{
		# code...
		return $this->db->where('ID_OBAT',$id)
						->get('obat')
						->row();
	}

	public function gettransaksi()
	{
		# code...
		return $this->db->get('data_transaksi')
						->result();
	}

	public function getdetiltransaksi($id)
	{
		# code...
		return $this->db->where('ID_TRANSAKSI',$id)
						->join('detail_transaksi','data_transaksi.ID_TRANSAKSI = detail_transaksi.ID_TRANSAKSI')
						->get('data_transaksi')
						->row();
	}

	public function getidtransaksi()
	{
		# code...
		return $this->db->order_by('ID_TRANSAKSI', 'desc')
						->limit(1)
						->get('data_transaksi')
						->row();
	}
}

/* End of file getdb.php */
/* Location: ./application/models/getdb.php */