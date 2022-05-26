<?php

class Register_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public $tableName = "users";

    public function create_user($data = array()) {
        return $this->db->insert($this->tableName, $data);
    }
}