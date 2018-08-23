<?php

/**
 * 
 */
class DataModel extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function baca() {
        $query = $this->db->get("siswa");
        return $query->result_array();
    }

    function bacaById($id) {
        $query = $this->db->where("idSiswa", $id);
        $query = $this->db->get("siswa");
        return $query->row();
    }

    function input($data) {
        $query = $this->db->insert("siswa", $data);
        return $query;
    }

    function edit($id, $data) {
        $this->db->where("idSiswa", $id);
        $query = $this->db->update("siswa", $data);
        return $query;
    }

    function hapus($id) {
        $this->db->where("idSiswa", $id);
        $query = $this->db->delete("siswa");
        return $query;
    }

}

?>