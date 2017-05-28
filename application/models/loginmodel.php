<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginmodel extends CI_Model {

	public function proses()
	{
		# code...
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->db->where('username',$username)
				 ->where('password',$password)
				 ->get('account');

		if($this->db->affected_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}

/* End of file loginmodel.php */
/* Location: ./application/models/loginmodel.php */