<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
	
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
		$data['transaksi'] = $this->getdb->gettransaksi();
		$data['main_view'] = 'transaksi_view';
		$this->load->view('template', $data);
	}

	public function addtransaksi()
	{
		# code...
		$data['obat'] = $this->getdb->getobat();
		$data['main_view'] = 'add_transaksi_view';
		$this->load->view('template', $data);
	}

	public function proses()
	{
		# code...
		$this->form_validation->set_rules('nama_pelanggan', 'Nama Pelanggan', 'trim|required');
		$this->form_validation->set_rules('obat', 'Obat', 'trim|required');
		$this->form_validation->set_rules('jum_obat', 'Jumlah Obat', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$jumobat = $this->input->post('jum_obat');
			$subharga = $this->getdb->getdetilobat($this->input->post('obat'))->HARGA;
			$harga = (int)$jumobat * (int)$subharga;
			$stock = $this->getdb->getdetilobat($this->input->post('obat'))->STOCK;
			$stockbaru = (int)$stock - (int)$jumobat;
			if ($stockbaru >= 0) {
				# code...
				if($this->insertdb->adddatatransaksi($harga) == TRUE){
					$data['nampel'] = $this->input->post('nama_pelanggan');
					$data['harga'] = $harga;
					$data['tglbeli'] = $this->input->post('tgl_beli');
					$data['namobat'] = $this->getdb->getdetilobat($this->input->post('obat'))->NAMA_OBAT;
					$data['nip'] = $this->session->userdata('nip');
					$data['idtran'] = $this->getdb->getidtransaksi()->ID_TRANSAKSI;
					$data['idobat'] = $this->input->post('obat');
					$data['jumobat'] = $jumobat;
					$data['subharga'] = $subharga;
					$data['main_view'] = 'add_detiltransaksi_view';
					$this->load->view('template', $data);
				}else{
					$this->session->set_flashdata('addtrang', 'Penambahan Transaksi Gagal');
					redirect('transaksi/addtransaksi');
				}
			}else{
				$this->session->set_flashdata('addtrang', 'Stock Obat Habis');
				redirect('transaksi/addtransaksi');
			}
		} else {
			# code...
			$this->session->set_flashdata('addtrans', 'Penambahan Transaksi Berhasil');
			redirect('transaksi');
		}
	}

	public function prosesdetil()
	{
		# code...
		if ($this->insertdb->adddetiltransaksi() == TRUE) {
			# code...
			$stock = $this->getdb->getdetilobat()->STOCK;
			$jumobat = $this->input->post('jum_obat');
			$stockbaru = (int)$stock - (int)$jumobat;
			if ($this->updatedb->editstock($this->input->post('id_obat'),$stockbaru)) {
				# code...
				$this->session->set_flashdata('addtrans', 'Penambahan Transaksi Berhasil');
				redirect('transaksi');
			} else {
				# code...
				$this->session->set_flashdata('addtrang', 'Penambahan Transaksi Gagal');
				redirect('transaksi/addtransaksi');
			}
		} else {
			# code...
			$this->session->set_flashdata('addtrang', 'Penambahan Transaksi Gagal');
			redirect('transaksi/addtransaksi');
		}
		
	}
}

/* End of file transaksi.php */
/* Location: ./application/controllers/transaksi.php */