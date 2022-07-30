<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_login'); //ini load model nya
	}

	public function index()
	{
		$this->load->view('v_login'); //ini load view login
	}

	function auth() {   //fungsi autentikasi 
		$email  = $this->input->post('email',TRUE);
		$password  = $this->input->post('password',TRUE);
		$data    = $this->M_login->check_user($email, $password);
		if(!empty($data)) {
			$username  = $data->username;
			$email = $data->email;
			$roles = $data->idroles;
			$sesdata = array(
				'ses_username'  => $username,
				'ses_email'		=> $email,
				'ses_roles'     => $roles,
				'ses_logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			if($roles === '1') {
				$this->load->view('Dashboard_admin');
			} elseif($roles == '2') {
				$this->load->view('Dashboard_users');
			} else {
				$this->load->view('Dashboard_users');
			}
		} else {
			echo "<script>alert('access denied');history.go(-1);</script>";
		}
	
	}

	function logout() {
		$this->session->sess_destroy();
		$this->load->view('v_login');
	}
	function product() {
		
		$this->load->view('v_product');
	}

	public function home()
	{
		
		$this->load->view('Dashboard_users');
		
	}

}