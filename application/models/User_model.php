<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

    }

    public function login()
    {
        if ($this->db->get("users")->num_rows() == 0) {
            $username = "caydee";
            $pass = "15442";
            if (($this->input->post("username") === $username) && ($this->input->post("password") === $pass)) {
                $x = array(
                    "id" => "#1",
                    "Name" => "Dennis Kiptugen",
                    "email" => $username,
                    "password" => $pass,
                    "pass_status" => 1,
                    "user_status" => 1,
                    "user_image" => "assets/images/user.png"
                );
                return (object)$x;
            } else {
                $msg = array("error" => "Invalid username or password");
                return (object)$msg;
            }
        } else {
            $this->db->where("email", $this->input->post("username"));
            $this->db->or_where("username", $this->input->post("username"));
            $dbh = $this->db->get("users");
            if ($dbh->num_rows() > 0) {
                $password = $this->assist->secu($dbh->row()->auth_key, $this->input->post("password"));
                //return $password;
                $this->db->where("password", $password)
                    ->where("username", $dbh->row()->username);
                $dbh = $this->db->get("users");
                if ($dbh->num_rows() > 0) {
                    return $dbh->row();
                } else {
                    $msg = array("error" => "Invalid username or password");
                    return (object)$msg;
                }
            } else {
                $msg = array("error" => "Invalid username or password");
                return (object)$msg;
            }
        }

    }
}