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

	public function prime2()
	{
		$data["title"] = "Food Calculator";
		$data["header"] = "Food Calculator";
		$data["content"] = "pages/prime2";
		$this->load->view("templates/template", $data);
	}
	public function plan()
	{
		$data['title'] = "Food Plans";
		$data['header'] = "Diet Plans";
		$data['content'] = "pages/foodplan";
		$this->load->view("templates/template", $data);
	}
	public function costs()
	{
		$data["title"] = "Food Costs";
		$data["header"] = "Food Costs";
		$data["content"] = "pages/costs";
		$this->load->view("templates/template", $data);
	}
	public function fiber()
	{
		$data["title"] = "Fiber Content";
		$data["header"] = "Fiber Content";
		$data["content"] = "pages/fiber";
		$this->load->view("templates/template", $data);
	}
	public function purch()
	{
		if ($query = $this->forms->proteins()) {
			$data['protein'] = $query;
		}
		if ($query = $this->forms->veggies()) {
			$data['veggy'] = $query;
		}
		if ($query = $this->forms->acc()) {
			$data['acc'] = $query;
		}
		if ($query = $this->forms->profile()) {
			$data['profile'] = $query;
		}
		$data["title"] = "Purchases";
		$data["header"] = "Purchases to Live";
		$data["content"] = "pages/purch";
		$this->load->view("templates/template", $data);
	}

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */
