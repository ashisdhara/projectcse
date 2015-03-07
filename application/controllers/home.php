<?php

class Home extends CI_Controller{
    public function index(){
        session_start();
        if(!isset($_SESSION['user_id']))
        {
        $this->register(); 
    }
        
    }
    
     public function register() {
     $this->load->view("registration_view");}
     
     public function registration_submit()
     {
         session_start();
         echo "inside register submit" ; 
         $name = $this->input->post('name');
         $email = $this->input->post('email');
         $password = $this->input->post('password');
         $username = $this->input->post('username');
         $phonenumber = $this->input->post('phonenumber');
         //echo "$name";
         $this->load->model('users_model');
         $this->users_model->register_insert($username , $email , $password , $name , $phonenumber);
         $url="home/register";
         header("Location:$url");
     }
}

