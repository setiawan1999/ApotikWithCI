<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		if($this->session->userdata('user')){
			$data['main_view'] = 'dashboard_view';
			$this->load->view('template', $data);
		}else{
			redirect('login');
		}
	}

}

/* End of file controlapotik.php */
/* Location: ./application/controllers/controlapotik.php */