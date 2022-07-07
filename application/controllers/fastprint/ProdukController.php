<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukController extends CI_Controller {

        function __construct(){
            parent::__construct();		
            $this->load->model('fastprint/M_produk');
            $this->load->helper('url');
        }
        

        public function get_json(){
            $data = array("username"=>"tesprogrammer","password"=>md5("bisacoding"));
    
            $ch = curl_init(); 
            curl_setopt($ch, CURLOPT_URL, "http://recruitment.fastprint.co.id/tes/api_tes_programmer");
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            $output_json = curl_exec($ch); 
            curl_close($ch);
            $output = json_decode($output_json, true);

            foreach ($output['data'] as $value) {
                    $hasilku = [
                        //     'id_produk' => $value['id_produk'],
                            'nama_produk' => $value['nama_produk'],
                            'harga' => $value['harga'],
                            'kategori' => $value['kategori'],
                            'status' => $value['status']
                            
                        ];
                        
                        echo "<pre>";
                        print_r ($hasilku);
                        echo "</pre>";
                        
                        $this->db->query("INSERT INTO tb_produk (nama_produk, harga, kategori, status) VALUES ('".$hasilku['nama_produk']."','".$hasilku['harga']."','".$hasilku['kategori']."','".$hasilku['status']."')");
                
            }
                
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

        public function cek() {
                phpinfo();
        }
}

?>