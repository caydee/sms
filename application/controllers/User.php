<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model", "umod");
        $this->data["title"] = "sms";
        $this->data["description"] = "";
        $this->data["keywords"] = "sms";
        $this->data["msg"] = "";
    }

    public function index()
    {
        if ($this->input->post("login_btn")) {
            //var_dump($this->input->post());
            $login = $this->umod->login();

            if (isset($login->error)) {
                $this->data["msg"] = $login->error;
            } else {
                $newdata = (array)$login;
                $newdata["login"] = TRUE;
                $this->session->set_userdata($newdata);
                redirect("home", "refresh");
            }
        }
        $this->load->view("modules/login", $this->data);
    }

    public function profile()
    {
        $this->data["subtitle"] = "profile";
        $this->data["view"] = "profile";
        $this->load->view("structure", $this->data);
    }

    public function manageusers()
    {
        $this->data["subtitle"] = "Manage users";
        $this->data["view"] = "users";
        $this->load->view("structure", $this->data);
    }

    public function logout()
    {
        $data = array('id', 'Name', 'email', 'password', 'role', 'user_status', 'pass_status', 'userimg', 'login', '__ci_last_regenerate');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        $this->cache->clean();
        redirect('login', 'refresh');
        //echo "yei";
    }

    public function changepassword()
    {
        $this->data["msg"] = "";
        if ($this->input->post()) {

        }
        $this->load->view("modules/changepassword", $this->data);
    }

    public function conpasswordchange()
    {
        $this->data["msg"] = "";
        if ($this->input->post()) {

        }
        $this->load->view("modules/cpasswordchange", $this->data);
    }
}
