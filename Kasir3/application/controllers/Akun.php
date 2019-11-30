<?php
Class Akun extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_akun');
        $this->load->model('M_kasir');
        $this->load->library('form_validation');
        $this->load->helper(array('form','url'));
    }

    public function Login(){

        $data['barang_db'] = $this->M_kasir->get_all_Barang();
        $this->load->view('page_Header');
        $this->load->view('page_Home',$data);   
    }
    public function awal(){
        $this->load->view('page_Login');
    }

    public function Regristrasi(){
        $this->load->view('page_Regristrasi'); 
    }
    public function LoginAdmin(){
        $this->load->view('page_Header');
        $this->load->view('Admin/page_Login_Admin');   
    }

    public function SigninAdmin() {
        $Username= $this->input->post('Username',TRUE);
        $Password = $this->input->post('Password',TRUE);
        $validate = $this->M_akun->validateAdmin($Username,$Password);
        if($validate->num_rows() == 1){
            $data  = $validate->row_array();
            $name  = $data['Username'];
            $email = $data['Email'];
            $newdata = array( 
                'Username'  => $name, 
                'Email' => $email,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            redirect('Kasir/Laporan');
        }
        else{
            $this->session->set_flashdata('alert','Fail Login');
            redirect('Akun/LoginAdmin');
        }
    }

    public function SigninEmployee() {
        $Username= $this->input->post('Username',TRUE);
        $Password = $this->input->post('Password',TRUE);
        $validate = $this->M_akun->validateEmployee($Username,$Password);
        if($validate->num_rows() == 1){
            $data  = $validate->row_array();
            $name  = $data['Username'];
            $email = $data['Email'];
            $newdata = array( 
                'Username'  => $name, 
                'Email' => $email,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            redirect('Akun/Login');
        }
        else{
            $this->session->set_flashdata('alert','Salah');
            redirect('');
        }
    }

    public function Logout(){
        $this->session->sess_destroy();
        redirect('Akun/awal');
    }



    public function TambahEmployee(){

        $this->form_validation->set_rules('Nama_depan','Nama_depan', 'required');
        $this->form_validation->set_rules('Nama_belakang','Nama_belakang', 'required');
        $this->form_validation->set_rules('Username', 'Username', 'required');
        $this->form_validation->set_rules('Password', 'Password', 'required');
        $this->form_validation->set_rules('Tanggal_lahir', 'Tanggal_lahir', 'required');
        $this->form_validation->set_rules('Email', 'Email', 'required');
        
        if ($this->form_validation->run()==FALSE){
            $this->load->view('page_Regristrasi');
        }else{
            $this->M_akun->addEmployee();
            $this->session->set_flashdata('success','Silahkan Login');
            $this->load->view('page_Regristrasi');
        }
     }

}