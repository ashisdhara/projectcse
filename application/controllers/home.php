<?php

class Home extends CI_Controller {

    public function index() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            $this->login();
        } else {
            $this->user_homepage();
        }
    }

    public function login() {
        $this->load->view('login_view');
    }

    public function login_submit() {
        session_start();
        $this->load->model('users_model');
        $email = $this->input->post('email_id');
        $password = $this->input->post('password');
        $result = $this->users_model->check_login($email, $password);
        $user_id = $result['id'];
        if ($result == 0) {
            echo "error!";
        } else {
            $_SESSION['user_id'] = $user_id;
            echo $_SESSION['user_id'];
            $url = base_url('/home');
            header("Location:$url");
        }
    }

    public function registration() {
        $this->load->view("registration_view");
    }

    public function registration_submit() {
        session_start();
        echo "inside register submit";
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $username = $this->input->post('username');
        $phonenumber = $this->input->post('phonenumber');
        //echo "$name";
        $this->load->model('users_model');
        $this->users_model->register_insert($username, $email, $password, $name, $phonenumber);
        $url = "home/login";
        header("Location:$url");
    }

    public function user_homepage() {
        $this->load->view("home_view");
    }

    public function display_queries_and_comments($course_id) {
         session_start();
        $this->load->model('qac_model');
        $_SESSION['course_id'] = $course_id ;
        /*if(isset($_POST['course_id']))
        {
             $course_id = $this->input->post('course_id');
             $_SESSION['course_id']=$course_id;

        }
 else */{
     //$course_id=$_SESSION['course_id'];

 }
        $search_data['list'] = $this->qac_model->get_queries_and_comments($course_id);
        
        $this->load->view("display_qac_view", $search_data);
    }


    public function insert_queries_and_comments() {
       session_start();
        $this->load->model('qac_model');
        $userid=$_SESSION['user_id'];
        $course_id=$_SESSION['course_id'];
        $comment=$this->input->post('comments');
        $this->qac_model->put_queries_and_comments($userid, $comment,$course_id);
        $url = "display_queries_and_comments/".$course_id;
        header("Location:$url");
    }

    public function queries() {
        $this->load->view('queries');
    }
    
    
    public function logout ()
    {
        session_destroy();
        $url = base_url('home/index');
        header("Location:$url");
    }
    
    public function contact_us()
    {
        $this->load->view('contact_us_view');
    }
    
    public function resources()
    {
        $this->load->view('resources_view');
    }
    
    public function fun ()
    {
        $this->load->view('fun_view');
    }
    
    public function progress()
    {
        $this->load->view('progress_view');
    }

}

