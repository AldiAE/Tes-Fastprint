<?php

class M_beranda extends CI_Model
{
	function tampil_data()
	{
		return $this->db->query("SELECT * FROM tb_produk WHERE status = 'bisa dijual'");
	}
}
