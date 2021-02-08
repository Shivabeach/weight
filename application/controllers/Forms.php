<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {

	public function cal()
	  {
	    $this->form_validation->set_error_delimiters('<li class="error">', '</li>');
		$data = [
			'date' => $this->input->post('date'),
			'data' => $this->input->post('data')
		];
		$this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('data', 'Data Info', 'required|trim');
    if($this->form_validation->run() === FALSE) {
			echo validation_errors();
		}else
		{
			$this->db->insert('main', $data);
			echo "Yuge Success";
		}
	  }

	public function walk()
	{
		$this->form_validation->set_error_delimiters('<li class="error">', '</li>');
		$data = [
			'date'     => $this->input->post('date'),
			'distance' => $this->input->post('distance'),
			'place'    => $this->input->post('place'),
		];
		$this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('distance', 'Distance', 'required|trim');
    $this->form_validation->set_rules('place', 'Place', 'required|trim');

    if($this->form_validation->run() == false)
    {
    	echo validation_errors();
    }else
    {
    	$this->db->insert("walk", $data);
    	echo "You walked";
    }
	}

	public function thingers()
	{
		$data = [
			"rcontent" => $this->input->post("rcontent")

		];
		$this->form_validation->set_rules('rcontent', 'Right Content', 'trim');
    if($this->form_validation->run() == false)
    {
    	echo validation_errors();
    }else
    {
    	$this->db->insert("things", $data);
    	echo "Data is in";
    }
   }

    public function wronged()
    {
    	$data = [
			"wrong" => $this->input->post("wrong")

		];
		$this->form_validation->set_rules('wrong', 'Wrong Content', 'trim');
    if($this->form_validation->run() == false)
    {
    	echo validation_errors();
    }else
    {
    	$this->db->insert("wrong", $data);
    	echo "Wrong Data is in";
    }
	}
	// puts the blog form into database
	public function blogs()
	{
		$this->form_validation->set_error_delimiters('<li class="error">', '</li>');
		$data_in = [
			'date'    => $this->input->post('date'),
			'title'   => ucwords($this->input->post('title')),
			'content' => $this->input->post('content'),
			'tags'    => $this->input->post('tags'),
			'primeKeys' => $this->input->post('primeKeys')
		];
		$this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('title', 'Title', 'required|trim');
    $this->form_validation->set_rules('content', 'Content', 'required|trim');
    $this->form_validation->set_rules('tags', 'Tags', 'required|trim');
    $this->form_validation->set_rules('primeKeys', 'Prime Keys', 'trim');

    if($this->form_validation->run() == false)
    {
    	echo validation_errors();
    }else
    {
    	$this->db->insert("blog", $data_in);
    	echo "You Blogged";
    }
	}

}

/* End of file Forms.php */
/* Location: ./application/controllers/Forms.php */
