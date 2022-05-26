<?php

class Login_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
    }

    public $tableName = "users";

    public function login($mail, $password) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('mail' => $mail, 'password' => $password));
        $query = $this->db->get();

        return $user = $query->row();
    }
}