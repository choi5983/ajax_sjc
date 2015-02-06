<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Note');
	}

	public function index()
	{
		$notes = $this->Note->get_all();
		$this->load->view('notes/index', array("notes" => $notes));
	}

	public function create()
	{
		$this->Note->insert($this->input->post());
		$this->retrieve_partial();
	}
	public function update()
	{
		$this->Note->update($this->input->post());
		$this->retrieve_partial();
	}
	public function delete()
	{
		$this->Note->delete($this->input->post());
		$this->retrieve_partial();
	}

	private function retrieve_partial()
	{
		$notes = $this->Note->get_all();
		$this->load->view('notes/partial_index', array("notes" => $notes));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */