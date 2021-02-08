<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		if($query = $this->pagesModel->walks()) {
			$data['waled'] = $query;
		}
		if($query = $this->pagesModel->last_date()) {
			$data['last'] = $query;
		}
		$data['title'] = "Openers";
		$data["header"] = "openers";
		$data["content"] = "pages/prime";
		$this->load->view("template/template", $data);
	}

	public function forms()
	{
		$data['title'] = "Forms";
		$data["header"] = "Forms";
		$data["content"] = "pages/forms";
		$this->load->view("template/template", $data);
	}

	public function blog()
	{
		if($query = $this->pagesModel->get_blog()) {
			$data['blog'] = $query;
		}
		if($query = $this->pagesModel->getKeys()){
			$data['keys'] = $query;
		}
		$data['title'] = "Blog";
		$data["header"] = "Blog";
		$data["content"] = "pages/blog";
		$this->load->view("template/template", $data);

	}

public function things()
	{
		if($query = $this->pagesModel->rcontent()) {
			$data['right'] = $query;
		}
		if($query = $this->pagesModel->wrong()) {
			$data['wrong'] = $query;
		}
		$data['title'] = "Things Gone";
		$data["header"] = "How Things Go";
		$data["content"] = "pages/things";
		$this->load->view("template/template", $data);
	}

	public function single()
	{
		if($query = $this->pagesModel->singleFile()) {
			$data['single'] = $query;
		}

		$data['title'] = "Single View";
		$data["header"] = "Single View";
		$data["content"] = "pages/single";
		$this->load->view("template/template", $data);
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */
