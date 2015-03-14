<?php

class Home extends CI_Controller{
    public function index(){
        session_start();
        if(!isset($_SESSION['user_id']))
        {
        $this->login(); 
    }
    else
    {
        $this->user_homepage();
    }
        
    }
    public function login()
	{
		$this->load->view('login_view') ;
	}
    public function login_submit()
    {    session_start();
        $this->load->model('users_model');
        $email = $this->input->post('email_id');
        $password = $this->input->post('password');
        $result=$this->users_model->check_login($email,$password);
        $user_id=$result['id'];
        if($result==0)
        {
            echo "error!";
        }
        else
        {
            $_SESSION['user_id']=$user_id;
            echo $_SESSION['user_id'];
            $url=base_url('/home');
            header("Location:$url");
        }
    }

     public function registration() {
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
         $url="home/login";
         header("Location:$url");
     }
     public function user_homepage()
     {
         $this->load->view("home_view");
     }
     public function display_queries_and_comments()
     {   $this->load->model('qac_model');
            
         $result=$this->qac_model->get_queries_and_comments($this->input->post('courseid'));
         $this->load->view('qac_view',$result);
         
     }
     public function display_queries_and_comments($course_id)
     {   $this->load->model('qac_model');
         $result=$this->qac_model->get_queries_and_comments($this->input->post('courseid'));
         $this->load->view('qac_view',$result);
         
     }
     public function insert_queries_and_comments()
     {
         
     }
}

