<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends Frontend_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('page_m');
	}
}

/* End of file page.php */
/* Location: ./application/controllers/page.php */