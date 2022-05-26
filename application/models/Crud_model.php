<?php

class Crud_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public $tableName = "directory";

    public function get_all($id) {
        $this->db->select('*');
        $this->db->from('directory');
        $this->db->where(array('user_id' => $id, 'status' => 1));
        $query = $this->db->get()->result();

        return $query;
    }

    public function get_directory_with_id($id) {
        $this->db->select('*');
        $this->db->from('directory');
        $this->db->where(array('id' => $id, 'status' => 1));
        $query = $this->db->get()->result();

        return $query;
    }

    public function get_session_id($mail) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('mail' => $mail));
        $query = $this->db->get();

        return $query->row()->id;
    }

    public function get_session_username($mail) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('mail' => $mail));
        $query = $this->db->get();

        return $query->row()->username;
    }

    public function add($data) {
        return $this->db->insert($this->tableName, $data);
    }

    public function update($id, $data) {
        return $this->db->where("id", $id)->update($this->tableName, $data);
    }

    public function delete($id, $data = array()) {
        return $this->db->where("id", $id)->update($this->tableName, $data);
    }
}