<?php

class Control extends CI_Controller {

    public function index() {
        session_start();
        if (!isset($_SESSION['name'])) {


            $this->load->view("registration_view");
        } else {
            $name = $_SESSION['name'];


            //$this->home($name);
            $this->load->model("model_quiz");
            $result = $this->model_quiz->get_user_details($name);
            if ($result == 0) {
                echo "Incorrect mail and passsword combination";
                $this->load->view("login");
            }


            $name = $result['name'];
            $gender = $result['gender'];
            $fb = $result['fb'];
            $codechef = $result['codechef'];
            $quiz = $result['quiz'];
            $quiz_taken = $result['test_taken'];
            if ($quiz_taken == 0) {
                $url = base_url("/control/quiz");
                $quiz_message = "If you want to take quiz click<a href='$url'> here </a> ";
            } else {
                $quiz_message = "you have scored $quiz marks";
            }
            $data = array('name' => $name,
                'gender' => $gender,
                'fb' => $fb,
                'codechef' => $codechef,
                'quiz_message' => $quiz_message
            );
            $this->load->view('home', $data);
        }
    }

    public function login() {
        $this->load->view("login");
    }

    public function login_submit() {
        session_start();
        $this->load->model("model_quiz");
        $mail = $this->input->post('lmail');
        $password = $this->input->post('lpassword');
        $result = $this->model_quiz->checklogin($mail, $password);
        $name = $result['name'];
        if ($result == 0) {
            echo "error logging in"."<br>";
             $url = base_url("/control/index");
             echo "click <a href=$url >here </a> to go back to login";
            
            
        } else {
            $_SESSION['name'] = $result['name'];
             $url = base_url("/control/index");
        header("Location:$url");
            
            
        }
       
    }

    public function register() {
        $this->load->view("register_view");
    }

    public function registration_submit() {
        session_start();
        $name = $this->input->post('rname');
        $gender = $this->input->post('rgender');
        $mail = $this->input->post('rmail');
        $password = $this->input->post('rpassword');
        $fb = $this->input->post('rfb');
        $codechef = $this->input->post('rcodechef');
        $this->load->model("model_quiz");
        $this->model_quiz->register_insert($name, $gender, $mail, $password, $fb, $codechef);
        $_SESSION['name'] = $name;
        $url = base_url("/control/index");
        header("Location:$url");
    }

    
    public function logout() {
        session_start();
        session_destroy();
        session_start();

        $this->load->view("login");
    }

}

?>
