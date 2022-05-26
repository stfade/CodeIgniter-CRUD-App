<?php

class Register extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("register_model");
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view("register");
    }
    
    public function create_user() {
        $this->form_validation->set_rules("username", "Username", "required|trim");
        $this->form_validation->set_rules("mail", "Mail", "required|trim|valid_email|is_unique[users.mail]");
        $this->form_validation->set_rules("password", "Password", "required|trim|min_length[5]");
        $this->form_validation->set_rules("re-password", "Password Retype", "required|trim|min_length[5]|matches[password]");

        if($this->form_validation->run() == FALSE) {
            $this->index();
            return;
        }

        $username = $this->input->post("username");
        $mail = $this->input->post("mail");
        $password = $this->input->post("password");

        $this->session->set_flashdata("success", "OK!");

        $data = $this->register_model->create_user(
            array(
                "username"  =>  $username,
                "mail"  =>  $mail,
                "password"  =>  $password
            )
        );

        if($data) {
            redirect(base_url("register"));
        }
    }
}