<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$data["title"] = "Weight App";
		$data["header"] = "Weight App";
		$data["content"] = "pages/prime";
		$this->load->view("templates/template", $data);
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */