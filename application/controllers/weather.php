<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Weather extends CI_Controller {

	public function index()
	{
		$this->load->view('/weather/index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */