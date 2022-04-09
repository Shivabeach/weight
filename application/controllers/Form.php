<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

	public function purchase()
	{
		$data = [
			"item" => trim($this->input->post("item")),
			"cost" => trim($this->input->post("cost")),
			"cat"  => trim($this->input->post("cat")),
			"date" => trim($this->input->post("date"))
		];
		$this->form_validation->set_rules('item', 'Item required', 'required');
		$this->form_validation->set_rules('cost', 'Cost required', 'required|numeric');
		$this->form_validation->set_rules('cat', 'category required', 'required');
		$this->form_validation->set_rules('date', 'Date required', 'required');

	if($this->form_validation->run() === FALSE) {
      echo validation_errors();
    }else {
      $this->db->insert("purchase", $data);
      echo "success";
		}
	}

	public function entry()
  {
    $data = [
      'date' => $this->input->post('date'),
      'data' => html_escape($this->input->post('data'))
    ];

    $this->form_validation->set_rules('date', 'Date', 'required');
    $this->form_validation->set_rules('data', 'Data', 'required|trim');
    if( $this->form_validation->run() == FALSE) {
            echo validation_errors();
        }else
        {
            $this->db->insert('calendar', $data);
            echo "grand shit";
        }
  }

}
/* End of file Form.php */
/* Location: ./application/controllers/Form.php */