<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukController extends CI_Controller {

        function __construct(){
            parent::__construct();		
            $this->load->model('fastprint/M_produk');
            $this->load->helper('url');
        }

        

        public function index(){     
            $data['query'] = $this->M_produk->tampil_data();
    		$data['tb_produk'] = $this->M_produk->tampil_data();

                $this->load->view('headerAdmin', $data);
                $this->load->view('fastprint/v_produk', $data);
                $this->load->view('footer', $data);
         }

        public function add(){
                $id_produk = $this->input->post('id_produk');

                if(empty($id_produk)) {
                        $this->M_produk->tambah_data();
                } else {

                        $this->M_produk->ubah_data($id_produk);
                } 
                        
        }
        

        public function delete(){
                $id_produk = $this->input->post('id_produk1');
                $this->M_produk->hapus_data($id_produk);
        }
}
