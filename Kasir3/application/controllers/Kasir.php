<?php
Class Kasir extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_kasir');
		$this->load->library('form_validation');
        $this->load->helper(array('form','url'));
	}

	public function index(){
		$data['barang_db'] = $this->M_kasir->get_all_Barang();
		$this->load->view("page_Login",$data);
	}

	public function Home(){
		$this->load->view('page_header');
		$this->load->view('page_Home');
	}
	
	public function ListPenjualan(){
		$data['penjualan'] = $this->M_kasir->getLaporan();
		$this->load->view('page_header');
		$this->load->view('Page_Penjualan_List',$data);
	}

	 public function TambahBarang(){
	 	$this->load->view('page_header');
	 	$this->load->view('page_Barang');
	 }

	public function ListBarang(){
        $data['barang_db'] = $this->M_kasir->get_all_Barang();
        if($this->input->post('keyword')){
            $data['barang_db'] = $this->M_kasir->cariBarang();
        }
        $this->load->view('page_header');
		$this->load->view('Page_Barang_List',$data);
	}

	public function Stok(){
		$data['barang_db'] = $this->M_kasir->get_all_Barang();
		if($this->input->post('keyword')){
            $data['barang_db'] = $this->M_kasir->cariBarang();
        }
		$this->load->view('page_header');
		$this->load->view('Page_Cek_Stok',$data);
	}

	public function About(){
		$this->load->view('page_header');
		$this->load->view('Page_About');
	}
    public function cariBarang(){
		$keyword = $this->input->post('keyword');
		$data['barang_db']=$this->M_kasir->cariBarang($keyword);

		$this->load->view('page_Header');
		$this->load->view('page_Barang_List',$data);
	}

	// --------------------------------------------------//
	public function Penjualan(){
		$data['get'] = $this->M_kasir->getdata();
		$data['tot'] = $this->M_kasir->getPenjualan();

		$this->load->view('page_Header', $data);
		$this->load->view('page_Penjualan', $data);
	}

	public function insertPenjualan(){

		$this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('jml_barang', 'jml_barang', 'required');
        $this->form_validation->set_rules('tgl_transaksi', 'tgl_transaksi', 'required');

        $this->M_kasir->insertjualan();

		$data['get'] = $this->M_kasir->getdata();
		$data['tot'] = $this->M_kasir->getPenjualan();

		$this->load->view('page_Header', $data);
		$this->load->view('page_Penjualan',$data);

	}

	public function Laporan(){
       $data['laporan'] = $this->M_kasir->getLaporan();
       $data['tot'] = $this->M_kasir->getPenjualan();
       $this->load->view('page_header');
       $this->load->view('Admin/Page_Laporan',$data);
    }
    public function cetakStruck(){
    	$data['laporan'] = $this->M_kasir->getLaporan();
    	$data['tot'] = $this->M_kasir->getPenjualan();
    	$this->load->view('page_Cetak',$data);
    }
    public function cetakPenjualan(){
    	$data['get'] = $this->M_kasir->getdata();
    	$data['tot'] = $this->M_kasir->getPenjualan();
    	$this->load->view('page_Cetak_Struck',$data);

    }
    	// public function addBarang(){

 //        $this->form_validation->set_rules('id','id', 'required');
 //        $this->form_validation->set_rules('NamaBarang', 'NamaBarang', 'required');
 //        $this->form_validation->set_rules('Harga', 'Harga', 'required');
 //        $this->form_validation->set_rules('JenisBarang', 'JenisBarang', 'required');
 //        $this->form_validation->set_rules('Merk', 'Merk', 'required');
 //        $this->form_validation->set_rules('stok_barang', 'stok_barang', 'required');
		
	// 	if ($this->form_validation->run()==FALSE){
 //            $this->load->view('page_Barang');
 //        }else{
 //          	$this->M_kasir->addMBarang();
 //            $this->session->set_flashdata('success','ditambahkan');
 //            redirect('Kasir/ListBarang');
 //        }
	//  }
	// public function deleteBarang($id){
 //        $this->M_kasir->deleteBarang($id);
 //        $this->session->set_flashdata('hapus','dihapus');
 //        redirect('Kasir/ListBarang');
 //    }
 
 //    public function editBarang($id){

 //    	$this->load->view('page_Header');
 //        $data['barang']=$this->M_kasir->getBarangById($id);

 //        $this->form_validation->set_rules('id','id', 'required');
 //        $this->form_validation->set_rules('NamaBarang', 'NamaBarang', 'required');
 //        $this->form_validation->set_rules('Harga', 'Harga', 'required');
 //        $this->form_validation->set_rules('JenisBarang', 'JenisBarang', 'required');
 //        $this->form_validation->set_rules('Merk', 'Merk', 'required');
 //        $this->form_validation->set_rules('stok_barang', 'stok_barang', 'required');

 //        if ($this->form_validation->run()==FALSE){
 //            $this->load->view('Page_Barang_Edit',$data);
 //        }else{
 //            $this->M_kasir->editMBarang($id);
 //            $this->session->set_flashdata('update','diubah');
 //            redirect('Kasir/ListBarang');
 //        }
        
 //    }
   

}