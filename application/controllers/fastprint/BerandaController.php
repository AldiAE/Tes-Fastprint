<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaController extends CI_Controller {
	function __construct(){
            parent::__construct();		
            $this->load->model('fastprint/M_beranda');
            $this->load->helper('url');
    }

    public function index(){     
            $data['query'] = $this->M_beranda->tampil_data();

                $this->load->view('headerAdmin', $data);
                $this->load->view('fastprint/v_beranda', $data);
                $this->load->view('footer', $data);
         }
}