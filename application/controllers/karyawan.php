<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

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
		$data['karyawan'] = $this->getdb->getkaryawan();
		$data['main_view'] = 'karyawan_view';
		$this->load->view('template', $data);
	}

	public function addkaryawan()
	{
		# code...
		$data['main_view'] = 'add_karyawan_view';
		$this->load->view('template', $data);
	}

	public function proses()
	{
		# code...
		$this->form_validation->set_rules('nama_karyawan', 'Nama', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir_karyawan', 'Tanggal Lahir', 'trim|required');
		$this->form_validation->set_rules('alamat_karyawan', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('jk_karyawan', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('role_karyawan', 'Role', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			$config['upload_path'] = './assets/img/karyawan/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = 2000;
			
			$this->upload->initialize($config);
			
			if ($this->upload->do_upload('foto_karyawan')){
				if($this->insertdb->addpetugas($this->upload->data()) == TRUE){
					$data['nama'] = $this->input->post('nama_karyawan');
					$data['alamat'] = $this->input->post('alamat_karyawan');
					$data['role'] = $this->input->post('role_karyawan');
					$data['ttl'] = $this->input->post('tgl_lahir_karyawan');
					$data['jk'] = $this->input->post('jk_karyawan');
					$cnt = count($this->getdb->getkaryawan());
					$data['nip'] = $this->getdb->getnipterakhir();
					$data['main_view'] = 'add_username_view';
					$this->load->view('template', $data);
				}else{
					$this->session->set_flashdata('addkarg', 'Tambah Karyawan Gagal');
					redirect('karyawan/addkaryawan');
				}
			}else{
				$this->session->set_flashdata('addkarg', 'Penambahan Foto Gagal');
				redirect('karyawan/addkaryawan');
			}
		} else {
			# code...
			$this->session->set_flashdata('addkarg', validation_errors());
			redirect('karyawan/addkaryawan');
		}
	}

	public function prosesusername()
	{
		# code...
		$this->form_validation->set_rules('username_karyawan', 'Username', 'trim|required');
		$this->form_validation->set_rules('password_karyawan', 'Password', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			if ($this->insertdb->addaccount($this->input->post('nip_karyawan')) == TRUE) {
				# code...
				$this->session->set_flashdata('addkars', 'Tambah Karyawan Berhasil');
				redirect('karyawan');
			} else {
				# code...
				$this->session->set_flashdata('addkarg', 'Tambah Karyawan Gagal');
				redirect('karyawan/addkaryawan');
			}
			
		} else {
			# code...
			$this->session->set_flashdata('addkarg', 'Tambah Username Gagal');
			redirect('karyawan/addkaryawan');
		}
	}

	public function hapus($id)
	{
		# code...
		if($this->session->userdata('role') == 'superadmin'){
			if ($this->hapusdb->delaccount($id) == TRUE) {
				# code...
				if ($this->hapusdb->delkaryawan($id) == TRUE) {
					# code...
					$this->session->set_flashdata('delkars', 'Delete Karyawan Berhasil');
					redirect('karyawan');
				}else{
					$this->session->set_flashdata('delkarg', 'Delete Karyawan Gagal');
					redirect('karyawan');
				}
			}else{
				$this->session->set_flashdata('delkarg', 'Delete Acoount Gagal');
				redirect('karyawan');
			}
		}else{
			redirect('karyawan');
		}
	}

	public function detilkaryawan($id)
	{
		# code...
		$data['karyawan'] = $this->getdb->getdetilkaryawan($id);
		$data['main_view'] = 'detil_karyawan_view';
		$this->load->view('template', $data);
	}

	public function editkaryawan($id)
	{
		# code...
		if($this->session->userdata('role') == 'superadmin'){
			if($this->input->post('submit')){

				$config['upload_path'] = './assets/img/karyawan/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = 2000;
				
				$this->upload->initialize($config);
				
				if ($this->upload->do_upload('foto_karyawan')){
					if ($this->updatedb->updatekaryawan($id,$this->upload->data()) == TRUE) {
						# code...
						$this->session->set_flashdata('upds', 'Penggantian Data Berhasil');
						redirect('karyawan');
					} else {
						# code...
						$this->session->set_flashdata('updg', 'Penggantian Data Gagal');
						redirect('karyawan/editkaryawan/'.$id);
					}
				}
				else{
					$this->session->set_flashdata('updg', $this->upload->display_errors());
					redirect('karyawan/editkaryawan/'.$id);
				}
			}else{
				$data['karyawan'] = $this->getdb->getdetilkaryawan($id);
				$data['main_view'] = 'edit_karyawan_view';
				$this->load->view('template', $data);
			}
		}else{
			redirect('karyawan');
		}
	}
}

/* End of file karyawan.php */
/* Location: ./application/controllers/karyawan.php */