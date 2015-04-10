<?php

class Tasks extends CI_Controller {

    public function index ()
    {
        $this->load->view('tasks_view');
    }
    public function subject1()
    {
        session_start();
        
        $_SESSION['course_id'] = 1;
        $this->gen_question($course_id);
    }
    
    public function subject2()
    {
        session_start();
        
        $_SESSION['course_id'] = 2;
        $this->gen_question($course_id);
    }
    
    
    public function gen_question($course_id )
    {
        $user_id = $_SESSION['user_id'];
        $this->load->model('tasks_model');
        $progress = $this->tasks_model->check_progress($user_id , $course_id);
            //$this->load->view('os1');
        $question_number = $progress + 1 ; 
        
        $course_id = $_SESSION['course_id'] ;
        $result = $this->tasks_model->get_question($course_id , $question_number );
        $question = $result['question'] ;
        
        $option1 = $result['option1'] ;
        $option2 = $result['option2'] ;
        $option3 = $result['option3'] ;
        $option4 = $result['option4'] ;
        $course_q_no = $result['course_q_no'];
        $answer = $result['answers_option'];
        $_SESSION['answer'] = $answer ;
        $question_data = array(
            'question' => $question,
            'option1'=> $option1 , 
            'option2' => $option2 ,
            'option3' => $option3 ,
            'option4' => $option4 ,
            'q_no' => $question_number
        );
        $this->load->view('tasks_question_view' , $question_data);
    }
    
    public function submit_answer()
    {
        $given_answer = $this->input->post('answer');
        $actual_answer = $_SESSION['answer'];
        $course_id = $_SESSION['course_id'] ;
        $user_id = $_SESSION['user_id'] ;
        if ($given_answer === $actual_answer)
        {
            $this->tasks_model->correct_answer($user_id , $course_id);
            $this->gen_question($course_id);
        }
        else
        {
            $this->load->view('failed_task_view');
        }
    }
}