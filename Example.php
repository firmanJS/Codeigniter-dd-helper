<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Example extends CI_Controller {
	public function index()
	{
		// Load helper
		$this->load->library('dd');
		$a = array('a','b');
		dd($a);
	}
}