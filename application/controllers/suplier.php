<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suplier extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('getdb');
		$this->load->model('insertdb');
		$this->load->model('hapusdb');
		$this->load->model('updatedb');
	}

	public function index()
	{
		$data['suplier'] = $this->getdb->getsuplier();
		$data['main_view'] = 'suplier_view';
		$this->load->view('template', $data);
	}

	public function addsuplier()
	{
		# code...
		$data['main_view'] = 'add_suplier_view';
		$this->load->view('template', $data);
	}

	public function proses()
	{
		# code...
		$this->form_validation->set_rules('nama_suplier', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat_suplier', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('kota_suplier', 'Kota', 'trim|required');
		$this->form_validation->set_rules('telp_suplier', 'Telepon', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			if ($this->insertdb->addsuplier() == TRUE) {
				# code...
				$this->session->set_flashdata('addsups', 'Tambah Suplier Berhasil');
				redirect('suplier');
			} else {
				# code...
				$this->session->set_flashdata('addsupg', 'Tambah Suplier Gagal');
				redirect('suplier/addsuplier');
			}
		} else {
			# code...
			$this->session->set_flashdata('addsupg', validation_errors());
			redirect('suplier/addsuplier');
		}
	}

	public function detilsuplier($id)
	{
		# code...
		$data['suplier'] = $this->getdb->getdetilsuplier($id);
		$data['main_view'] = 'detil_suplier_view';
		$this->load->view('template', $data);
	}

	public function hapus($id)
	{
		# code...
		if ($this->hapusdb->delsuplier($id) == TRUE) {
			# code...
			$this->session->set_flashdata('delsups', 'Delete Suplier Berhasil');
			redirect('suplier');
		}else{
			$this->session->set_flashdata('delsupg', 'Delete Suplier Gagal');
			redirect('suplier');
		}
	}

	public function editsuplier($id)
	{
		# code...
		if($this->input->post('submit')){
			if ($this->updatedb->updatesuplier($id) == TRUE) {
				# code...
				$this->session->set_flashdata('upds', 'Penggantian Data Suplier Berhasil');
				redirect('suplier');
			} else {
				# code...
				$this->session->set_flashdata('updg', 'Penggantian Data Suplier Gagal');
				redirect('suplier/editsuplier/'.$id);
			}
		}else{
			$data['suplier'] = $this->getdb->getdetilsuplier($id);
			$data['main_view'] = 'edit_suplier_view';
			$this->load->view('template', $data);
		}
	}
}

/* End of file suplier.php */
/* Location: ./application/controllers/suplier.php */