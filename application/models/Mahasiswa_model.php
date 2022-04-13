<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model {

    public function getAll(){
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function simpan($data){
        $this->db->insert('mahasiswa', $data);
    }

    public function detail($id){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    public function edit($data){
        $this->db->where('id', $data['id']);
        $this->db->update('mahasiswa', $data);
    }

    public function delete($data){
        $this->db->where('id', $data['id']);
        $this->db->delete('mahasiswa', $data);
    }

}

/* End of file ModelName.php */

?>