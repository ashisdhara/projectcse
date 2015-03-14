<?php

class Users_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function get_queries_and_comments($course_id) {
        $sql = "select * from qac where course_id='$course_id'";
        $query = $this->db->query($sql);
        if ($query->num_rows() == 0) {
            return 0;
        } else
            return $query->result_array();
            
    }
    function put_queries_and_comments($user_id,$comments,$course_id) {
        $sql = "insert into qac(user_id,comments,course_id) values($user_id,'$comments',$course_id)";
        $query = $this->db->query($sql);
        
            
    }

}
