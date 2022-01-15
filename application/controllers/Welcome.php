<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('headerAdmin');
                $this->load->view('fastprint/v_beranda');
                $this->load->view('footer');
	}
}
?>