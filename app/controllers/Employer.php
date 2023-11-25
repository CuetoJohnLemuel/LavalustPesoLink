<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Employer extends Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->call->model('postjob_model');
		// $this->call->library('session');
	}

	public function employerhome() {
		$this->call->view('Employer/employerhome');
	}

	public function postvacancy() {
		$this->call->view('Employer/postvacancy');
	}

	public function jobpost() {
		$this->call->view('Employer/jobpost');
	}

	public function jobapplicants() {
		$this->call->view('Employer/jobapplicants');
	}

	public function postjob() {
		$employer_name = $this->io->post('employer_name');
        $company_name = $this->io->post('company_name');
        $occupation_title = $this->io->post('occupation_title');
        $required_no = $this->io->post('required_no');
        $location = $this->io->post('location');
		$qualification = $this->io->post('firstname');
        $job_description = $this->io->post('job_description');
        $prefered = $this->io->post('prefered');
        $status = $this->io->post('status');
        $category = $this->io->post('category');
		$salary = $this->io->post('salary');
        $per = $this->io->post('per');
	
		$result = $this->postjob_model->insertthis($employer_name, $company_name, $occupation_title, $required_no, $location, $qualification, $job_description, $prefered, $status, $category, $salary, $per);

		if($result)
			redirect('/');
	}
}
?>