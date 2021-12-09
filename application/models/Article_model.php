<?php

class Article_model extends CI_Model
{
    public function getArticle($id_artikel = null){
        if ($id_artikel === null) {
            return $this->db->get('artikel')->result_array();
        }else{
            return $this->db->get_where('artikel',['id_artikel' => $id_artikel])->result_array();
        }
    }

    public function deleteArticle($id_artikel){
        $this->db->delete('artikel', ['id_artikel' => $id_artikel]);
        return $this->db->affected_rows();
    }

    public function createArticle($data){
        $this->db->insert('artikel',$data);
        return $this->db->affected_rows();
    }

    public function updateArticle($data,$id_artikel){
        $this->db->update('artikel',$data,['id_artikel' => $id_artikel]);
        // return $this->db->affected_rows();
        return $this->db->update('artikel',$data,['id_artikel' => $id_artikel]);
    }
}