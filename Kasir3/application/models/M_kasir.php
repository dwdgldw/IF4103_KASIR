<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class M_kasir extends CI_Model{
    
	 public function get_all_Barang(){
      $data = $this->db->get('barang_db');
      return $data->result_array();
    }

    public function addMBarang(){
        $data = [
            'id' => $this->input->post('id',true),
            'NamaBarang' => $this->input->post('NamaBarang',true),
            'Harga' => $this->input->post('Harga',true),
            'JenisBarang' => $this->input->post('JenisBarang',true),
            'Merk' => $this->input->post('Merk',true),
            'stok_barang' => $this->input->post('stok_barang',true),
        ];
        $this->db->insert('barang_db',$data);
    }

     public function deleteBarang($id) {
		$this->db->where('id',$id);
		return $this->db->delete('barang_db');
    }
    //   public function deleteBarang($id) {
    //     $this->db->where('id',$id);
    //     return $this->db->delete('barang_db');
    // }

    public function editMBarang($id){
		$data = [
            'id' => $this->input->post('id',true),
            'NamaBarang' => $this->input->post('NamaBarang',true),
            'Harga' => $this->input->post('Harga',true),
            'JenisBarang' => $this->input->post('JenisBarang',true),
            'Merk' => $this->input->post('Merk',true),
            'stok_barang' => $this->input->post('stok_barang',true),

        ];
		$this->db->where('id',$id);
		return $this->db->update('barang_db',$data);
    }

    public function getBarangById($id){
		$this->db->where('id',$id);
		return $this->db->get('barang_db')->row_array();
    }

   public function cariBarang(){
    $keyword = $this->input->post('keyword', true);
    $data  =   $this->db->query("SELECT * FROM barang_db where id = '$keyword' or NamaBarang = '$keyword' or JenisBarang = '$keyword' or Merk ='$keyword' ");
    return $data->result_array();
    }

    public function insertjualan(){
        $data = [
            'id' => $this->input->post('id', true),
            'jml_barang' => $this->input->post('jml_barang', true),
            'tgl_transaksi' => $this->input->post('tgl_transaksi', true),
        ];
        $this->db->insert('penjualan_db', $data);
    }
    
    public function getPenjualan(){
       $data = $this->db->query("SELECT (select jml_barang from penjualan_db join barang_db using (id) WHERE id_penjualan = (SELECT id_penjualan from penjualan_db where id_penjualan = (select max(id_penjualan) from penjualan_db))) * (SELECT harga FROM penjualan_db join barang_db using (id) WHERE id_penjualan = (SELECT id_penjualan from penjualan_db where id_penjualan = (select max(id_penjualan) from penjualan_db))) as tot from penjualan_db join barang_db using (id) WHERE id_penjualan = (SELECT id_penjualan from penjualan_db where id_penjualan = (select max(id_penjualan) from penjualan_db))");
        return $data->row()->tot;
    }

    public function getdata(){
        $data = $this->db->query("SELECT * from penjualan_db join barang_db using (id) WHERE id_penjualan = (SELECT id_penjualan from penjualan_db where id_penjualan = (select max(id_penjualan) from penjualan_db))");
        return $data->result_array();
    }
    public function getLaporan(){
        $data = $this->db->query("SELECT * FROM `penjualan_db` join barang_db using(id)");
        return $data->result_array();
    }
     
    public function deletePenjualan($id) {
        $this->db->where('id_penjualan',$id);
        return $this->db->delete('penjualan_db');
    }
    
}