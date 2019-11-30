<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class M_akun extends CI_Model{

	public function validateAdmin($Username,$Password){
        $this->db->where('Username',$Username);
        $this->db->where('Password',$Password);
        $result = $this->db->get('admin');
        return $result;
    }
    public function addEmployee(){
        $data = [
            'Nama_depan' => $this->input->post('Nama_depan',true),
            'Nama_belakang' => $this->input->post('Nama_belakang',true),
            'Username' => $this->input->post('Username',true),
            'Password' => $this->input->post('Password',true),
            'Tanggal_lahir' => $this->input->post('Tanggal_lahir',true),
            'Email' => $this->input->post('Email',true),
        ];
        $this->db->insert('employee',$data);
    }
    public function validateEmployee($Username,$Password){
        $this->db->where('Username',$Username);
        $this->db->where('Password',$Password);
        $result = $this->db->get('employee');
        return $result;
    }
}