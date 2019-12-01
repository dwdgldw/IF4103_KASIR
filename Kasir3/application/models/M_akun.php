<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class M_akun extends CI_Model{

	public function validateAdmin($Username,$Password){
        $this->db->where('Username',$Username);
        $this->db->where('Password',$Password);
        $result = $this->db->get('admin');
        return $result;
    }
    
    public function validateEmployee($Username,$Password){
        $this->db->where('Username',$Username);
        $this->db->where('Password',$Password);
        $result = $this->db->get('employee');
        return $result;
    }
}