<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('loginmodel');
		$this->load->model('getdb');
	}

	public function index()
	{
		if($this->session->userdata('user')){
			redirect('dashboard');
		}else{
			$data['main_view'] = 'login_view';
			$this->load->view('template', $data);
		}
	}

	public function do_login()
	{
		# code...
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == TRUE) {
			# code...
			if($this->loginmodel->proses() == TRUE){
				$array = array(
					'user' => $this->input->post('username'),
					'role' => $this->getdb->getrole($this->input->post('username'))->ROLE_KARYAWAN,
					'status' => $this->getdb->getrole($this->input->post('username'))->STATUS_KARYAWAN,
					'nip' => $this->getdb->getrole($this->input->post('username'))->NIP_KARYAWAN,
				);
				
				$this->session->set_userdata( $array );
				$this->session->set_flashdata('logins', 'Login Berhasil');
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('loging', 'Login Gagal');
				redirect('login');
			}
		} else {
			# code...
			$this->session->set_flashdata('loging', validation_errors());
			redirect('login');
		}		
	}

	public function logout()
	{
		# code...
		session_destroy();
		redirect('login');
	}

}

/* End of file controllogin.php */
/* Location: ./application/controllers/controllogin.php */