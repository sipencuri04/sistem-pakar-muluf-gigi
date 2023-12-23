<?php
class M_data extends CI_Model {
    function get_data($table) {
        return $this->db->get($table);
    }
    
    function insert_data($data, $table) {
        $this->db->insert($table, $data);
    }
    
    function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }    


    
    
    function delete_data($table, $where, $data = null) {
        if ($data !== null) {
            $this->db->where($where);
            $this->db->update($table, $data);
        } else {
            $this->db->delete($table, $where);
        }
    }
    
    function cek_login($table, $where) {
        return $this->db->get_where($table, $where);
    } 
}
?>
