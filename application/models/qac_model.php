<?php

class qac_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    
    function put_queries_and_comments($user_id,$comments,$course_id) {
        $sql = "insert into qac(user_id,comments,course_id) values($user_id,'$comments',$course_id)";
        $query = $this->db->query($sql);
        
            
    }
    
    public function get_queries_and_comments($course_id) {

        $sql = "select * from qac where course_id=$course_id";
        $query = $this->db->query("$sql");
        if ($query->num_rows() > 0) {
            foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
            return $data;
        } else {
            return false;
        }
    }

}
