<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Model {

	public function proteins()
	{
		$this->db->where('cat', 'protein');
		$this->db->select("id, item, date, cost, cat");
		$this->db->order_by('date', 'asc');
		$query = $this->db->get('purchase');
    return $query->result();
	}
	public function veggies()
	{
		$this->db->where('cat', 'veg');
		$this->db->select("id, item, date, cost, cat");
		$this->db->order_by('date', 'asc');
		$query = $this->db->get('purchase');
    return $query->result();
	}
	public function acc()
	{
		$this->db->where('cat', 'accessory');
		$this->db->select("id, item, date, cost, cat");
		$this->db->order_by('date', 'asc');
		$query = $this->db->get('purchase');
    return $query->result();
	}
	public function profile()
	{
		$this->db->where('cat', 'profile');
		$this->db->select("id, item, date, cost, cat");
		$this->db->order_by('date', 'asc');
		$query = $this->db->get('purchase');
    return $query->result();
	}

}

/* End of file Forms.php */
/* Location: ./application/models/Forms.php */