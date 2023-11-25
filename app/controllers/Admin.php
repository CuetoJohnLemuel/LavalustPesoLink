<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admin extends Controller {

	public function adminhome() {
		$this->call->view('Admin/adminhome');
	}

	public function employerregistration() {
		$this->call->view('Admin/employerregistration');
	}

	public function jobvacancy() {
		$this->call->view('Admin/jobvacancy');
	}

	public function manageuser() {
		$this->call->view('Admin/manageuser');
	}
}
?>