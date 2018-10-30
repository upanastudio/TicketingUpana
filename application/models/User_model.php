<?php
	class User_model extends CI_Model{
    // Log user in
		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			// $this->db->where('akses_level', $akses_level);
			$result = $this->db->get('users');

			if($result->num_rows() == 1){
				return $result->row(0)->id_users;
			} else {
				return false;
			}
		}
	}
?>
