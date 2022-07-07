<?php 
 
class M_produk extends CI_Model{
	function tampil_data(){
		return $this->db->get('tb_produk');
    }
    
    function tambah_data() {
        
		$data = array(
			'nama_produk' => $this->input->post('nama_produk'),
			'harga' => $this->input->post('harga'),
			'kategori' => $this->input->post('kategori'),
			'status' => $this->input->post('status')
			);
		$this->db->insert('tb_produk', $data);
		redirect('../fastprint/ProdukController');
    }
  
    function ubah_data ($id_produk) {
    	$data = array(
			'nama_produk' => $this->input->post('nama_produk'),
			'harga' => $this->input->post('harga'),
			'kategori' => $this->input->post('kategori'),
			'status' => $this->input->post('status')
			);
		$this->db->where(array('id_produk' => $id_produk));
		$this->db->update('tb_produk', $data);
		redirect('../fastprint/ProdukController');
	}
	
	function hapus_data ($id_produk) {
		$this->db->where(array('id_produk' => $id_produk));
		$this->db->delete('tb_produk');
		redirect('../fastprint/ProdukController');
    }

	function tambah_json() {
		$data = array(
			'nama_produk' => $this->input->post('nama_produk'),
			'harga' => $this->input->post('harga'),
			'kategori' => $this->input->post('kategori'),
			'status' => $this->input->post('status')
			);
		$this->db->insert('tb_produk', $data);
	}

	function ubah_json ($id_produk) {
    	$data = array(
			'nama_produk' => $this->input->post('nama_produk'),
			'harga' => $this->input->post('harga'),
			'kategori' => $this->input->post('kategori'),
			'status' => $this->input->post('status')
			);
		$this->db->where(array('id_produk' => $id_produk));
		$this->db->update('tb_produk', $data);
	}

}