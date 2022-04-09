<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyCal extends CI_Controller {

	public function index($year = null, $month = null){
    if (!$year) {
      $year = date('Y');
    }
    if (!$month) {
      $month = date('m');
    }
    $this->load->model('mycal_model');
    if ($day = $this->input->post('day')) {
      $this->mycal_model->add_calendar_data(
      "$year-$month-$day",
      $this->input->post('data')
      );
    }
    $data['calendar'] = $this->mycal_model->generate($year, $month);

    $data["title"] = "Calendar";
		$data["header"] = "Health Calendar";
		$data["content"] = "pages/calendar";
		$this->load->view("templates/template", $data);

    }

}

/* End of file myCal.php */
/* Location: ./application/controllers/myCal.php */