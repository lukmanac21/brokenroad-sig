<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class mFunc extends CI_MODEL{
    public function loginData($table,$where){
        return $this->db->get_where($table,$where);
    }
    public function showDataMap(){
        $this->db->select('*');
        $this->db->from('tbl_maps');
        $this->db->join('tbl_wilayah', 'tbl_maps.id_wilayah = tbl_wilayah.id_wilayah');
        $this->db->join('tbl_arus', 'tbl_maps.id_arus = tbl_arus.id_arus');
        $this->db->join('tbl_jalan', 'tbl_maps.id_jalan = tbl_jalan.id_jalan');
        $this->db->join('tbl_keramaian', 'tbl_maps.id_keramaian = tbl_keramaian.id_keramaian');
        $query = $this->db->get();
        return $query->result();
    }
    public function showDataMaps($table,$where){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->join('tbl_wilayah', 'tbl_maps.id_wilayah = tbl_wilayah.id_wilayah');
        $this->db->join('tbl_arus', 'tbl_maps.id_arus = tbl_arus.id_arus');
        $this->db->join('tbl_jalan', 'tbl_maps.id_jalan = tbl_jalan.id_jalan');
        $this->db->join('tbl_keramaian', 'tbl_maps.id_keramaian = tbl_keramaian.id_keramaian');
        $this->db->where($where);
        $query = $this->db->get();
        return $query->result();
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
    public function updateData($table,$data,$where){
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function deleteData($table,$where){
        $this->db->where($where);
        $this->db->delete($table);
    }
}?>