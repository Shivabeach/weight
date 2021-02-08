<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mycal extends CI_Controller {
    public function index()
    {
        $this->load->library('calendar');
    }
    public function display($year = null, $month = null) {
        if (!$year) {
        $year = date('Y');
    }
    if (!$month) {
        $month = date('m');
    }
    $this->load->model('mycal_model');
    if ($day = $this->input->post('day')) {
        $this->mycal_model->add_calendar_data("$year-$month-$day", htmlspecialchars_decode($this->input->post('data'))
        );
    }
    $data['title'] = 'Weight Record';
    $data['calendar'] = $this->mycal_model->generate($year, $month);
    $data['header'] = "weight calendar";
    $data['content'] = "pages/calendar";
    $this->load->view('template/template', $data);
  }
}
/* End of file mycal.php */
/* Location: ./application/controllers/mycal.php */
