<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

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
		$data['obat'] = $this->getdb->getobat();
		$data['main_view'] = 'obat_view';
		$this->load->view('template', $data);
	}

	public function addobat()
	{
		# code...
		$data['suplier'] = $this->getdb->getsuplier();
		$data['main_view'] = 'add_obat_view';
		$this->load->view('template', $data);
	}

	public function proses()
	{
		# code...
		$this->form_validation->set_rules('nama_obat', 'Nama', 'trim|required');
		$this->form_validation->set_rules('id_suplier', 'Suplier', 'trim|required');
		$this->form_validation->set_rules('produsen_obat', 'Produsen', 'trim|required');
		$this->form_validation->set_rules('harga_obat', 'Harga', 'trim|required');
		$this->form_validation->set_rules('stock_obat', 'Stock', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$config['upload_path'] = './assets/img/obat/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = 2000;
			
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('foto_obat')){
				if($this->insertdb->addobat($this->upload->data()) == TRUE){
					$this->session->set_flashdata('addobs', 'Tambah Obat Berhasil');
					redirect('obat');
				}else{
					$this->session->set_flashdata('addobg', 'Tambah Obatn Gagal');
					redirect('obat/addobat');
				}
			}else{
				$this->session->set_flashdata('addobg', display_errors());
				redirect('obat/addobat');
			}
		} else {
			# code...
			$this->session->set_flashdata('addobg', validation_errors());
			redirect('obat/addobat');
		}
	}

	public function detilobat($id)
	{
		# code...
		$data['obat'] = $this->getdb->getdetilobat($id);
		$data['main_view'] = 'detil_obat_view';
		$this->load->view('template', $data);
	}

	public function hapus($id)
	{
		# code...
		if ($this->hapusdb->delobat($id) == TRUE) {
				# code...
			$this->session->set_flashdata('delkars', 'Delete Obat Berhasil');
			redirect('obat');
			
		}else{
			$this->session->set_flashdata('delkarg', 'Delete Obat Gagal');
			redirect('obat');
		}
	}
}

/* End of file obat.php */
/* Location: ./application/controllers/obat.php */