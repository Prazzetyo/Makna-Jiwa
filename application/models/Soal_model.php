<?php

class Soal_model extends CI_Model
{
    public function getSoal($id_kategori = null){
        if ($id_kategori === null) {
            return $this->db->get('soal')->result_array();
        }else{
            return $this->db->get_where('soal',['id_kategori' => $id_kategori])->result_array();
        }
    }

    public function deleteSoal($id){
        $this->db->delete('soal', ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function createSoal($data){
        $this->db->insert('soal',$data);
        return $this->db->affected_rows();
    }

    public function updateSoal($data,$id_kategori){
        $this->db->update('soal',$data,['id' => $id_kategori]);
        return $this->db->affected_rows();
    }
}