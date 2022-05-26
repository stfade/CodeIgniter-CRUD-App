<?php

class UpdatePage extends CI_Controller {
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

    public function index() {
        // $session_id = $this->crud_model->get_session_id($_SESSION['mail']);
        /*
        $items = $this->crud_model->get_all($id);
        $view_data = array(
            "directory" => $items
        );
        */
        $this->load->view("includes/navbar");
        $this->load->view("update_page");
    }

    public function test($id) {
        $items = $this->crud_model->get_directory_with_id($id);
        $view_data = array(
            "directory" => $items
        );
        $this->load->view("includes/navbar");
        $this->load->view("update_page", $view_data);
    }

    public function update($id) {
        $avatar = $this->input->post("img");
        $name = $this->input->post("name");
        $surname = $this->input->post("surname");
        $number = $this->input->post("number");
        $mail = $this->input->post("mail");
        $id = $this->input->post("submit");
        // update islemi yapilacak
        // cruddaki update gereksiz
        $this->crud_model->update($id, array(
            "avatar"  =>  $avatar,
                "name"  =>  $name,
                "surname"  =>  $surname,
                "number"  =>  $number,
                "mail"  =>  $mail,
                "user_id"  =>  $id,
                "status" => TRUE
        ));
    }
}

?>