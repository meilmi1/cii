<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function check_user($email, $password) { //ini fungsi cek user
		$this->db->select('*'); //select all
		$this->db->from('users'); // table name
		$this->db->where('email', $email); // where email is equal to $email
		$this->db->where('password', $password); // and password is equal to  $password (
		$result = $this->db->get()->row(); //get row data dari DB
		return $result;
	}

	

}