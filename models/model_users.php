<?php

class Model_users extends CI_Model {

	public function can_log_in() {

		$this->db->where('email', $this->input->post('email'));
		$this->db->where('passwd', sha1($this->input->post('password')));
		$query = $this->db->get('members');

		if ($query->num_rows == 1) {
			return true;
		} else {
			return false;

		}

	}

}