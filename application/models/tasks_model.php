<?php

class Tasks_model extends CI_Model {

    public function check_progress($user_id, $course_id) {
        $query = $this->db->query("select marks_obtained from task_results where user_id = $user_id and course_id = $course_id");
        foreach ($query->result_array() as $row) {
            return $row['marks_obtained'];
        }
    }

    public function get_question($course_id, $question_no) {
        $query = $this->db->query("select * from tasks where course_id = $course_id and course_q_no = $question_no");

        foreach ($query->result_array() as $row) {
            return $row;
        }
    }
    
    public function correct_answer($user_id , $course_id)
    {
        $query = $this->db->query('');
        return ;
    }

}
