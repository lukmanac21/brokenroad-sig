<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class mFunc extends CI_MODEL{
    public function loginData($table,$where){
        return $this->db->get_where($table,$where);
    }
    public function showData($table){
        $query = $this->db->get($table);
        return $query->result();
    }
    public function addData($table,$data){
        $this->db->insert($table,$data);
    }
    public function editData($table,$where){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
    }
    public function updateData($table,$where){

    }
    public function deleteData($table,$where){
        
    }
}?>