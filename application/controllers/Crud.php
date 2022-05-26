<?php

class Crud extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("crud_model");
        $this->load->library('session');
        $this->load->library('form_validation');

        if(!isset($_SESSION['mail'])) {
            redirect("auth/login");
        }
    }

    public function logout() {
        unset($_SESSION);
        redirect(base_url("login"));
    }

    // create new user
    public function create() {
        $this->form_validation->set_rules("name", "Name", "required|trim");
        $this->form_validation->set_rules("surname", "Surname", "required|trim");
        $this->form_validation->set_rules("number", "Number", "required|trim");
        $this->form_validation->set_rules("mail", "Mail", "required|trim");

        if($this->form_validation->run() == FALSE) {
            $this->index();
            return;
        }

        $avatar = $this->input->post("img");
        $name = $this->input->post("name");
        $surname = $this->input->post("surname");
        $number = $this->input->post("number");
        $mail = $this->input->post("mail");
        $session_id = $this->input->post("submit");

        $data = $this->crud_model->add(
            array(
                "avatar"  =>  $avatar,
                "name"  =>  $name,
                "surname"  =>  $surname,
                "number"  =>  $number,
                "mail"  =>  $mail,
                "user_id"  =>  $session_id,
                "status" => TRUE
            )
        );

        if($data) {
            redirect(base_url("crud"));
        }
    }

    // read users
    // http://localhost:3000/index.php/crud
    public function index() {
        $session_id = $this->crud_model->get_session_id($_SESSION['mail']);
        $items = $this->crud_model->get_all($session_id);
        $view_data = array(
            "directory" => $items
        );
        $this->load->view("includes/navbar");
        $this->load->view("user_list", $view_data);
    }

    // delete user
    public function delete($id) {
        $this->crud_model->update($id, array(
            "status" => 0
        ));
        
        redirect(base_url("crud"));
    }
}