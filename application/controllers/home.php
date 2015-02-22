<?php

class Home extends CI_Controller{
    public function index(){
        session_start();
        if(!isset($_SESSION['user_id']))
        {
            $this->load->view("registration_view");
        }
    }
}

