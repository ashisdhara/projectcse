<?php

class Tasks extends CI_Controller {

    public function index ()
    {
        $this->load->view('tasks_view');
    }
    public function os()
    {
        $this->load->model('tasks_model');
        //$progress = $this->tasks_model->check_progress($user_id , $course_id);
            //$this->load->view('os1');
        //$question_number = $progress + 1 ; 
        $question_number = 1 ;
        $course_id = 1 ;
        $result = $this->tasks_model->get_question($course_id , $question_number );
        $question = $result['question'] ;
        $option1 = $result['option1'] ;
        $question_data = array(
            'question' => $question,
            'option1'=> $option1
        );
        $this->load->view('tasks_question_view' , $question_data);
    }
}