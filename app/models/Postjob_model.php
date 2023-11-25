<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Postjob_model extends Model {
	public function __construct() {
		parent:: __construct();
        $this->call->database();
        // $this->call->library('session');
	}

    public function insertthis($employer_name,
    $company_name,
    $occupation_title,
    $required_no,
    $location,
    $qualification,
    $job_description,
    $prefered,
    $status,
    $category,
    $salary,
    $per) 
    {
        $data = array(
            'employer_name' => $employer_name,
            'company_name' => $company_name,
            'occupation_title' => $occupation_title,
            'required_no' => $required_no,
            'location' => $location,
            'qualification' => $qualification,
            'job_description' => $job_description,
            'prefered' => $prefered,
            'status' => $status,
            'dateposted' => $dateposted,
            'category' => $category,
            'salary' => $salary,
            'per' => $per,

        );

        return $this->db->table('postjob')
            ->insert($data);

        if($result)
            return true;
    }
}
?>
