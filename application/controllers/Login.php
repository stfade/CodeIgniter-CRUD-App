<?php

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("login_model");
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view("login");
    }

    public function auth() {
        $this->form_validation->set_rules("mail", "Mail", "required|trim");
        $this->form_validation->set_rules("password", "Password", "required|trim");

        if($this->form_validation->run() == FALSE) {
            $this->index();
            return;
        }

        $mail = $_POST["mail"];
        $password = $_POST["password"];

        $data = $this->login_model->login($mail, $password);

        if($data) {
            $this->session->set_flashdata("success", "Giriş Başarili!");

            $_SESSION['user_logged'] = TRUE;
            $_SESSION['mail'] = $data->mail;

            redirect(base_url("crud"));
        }

        else {
            $this->session->set_flashdata("error", "Mail veya Sifre yanlis!");
            $this->index();
            return;
        }
    }
}