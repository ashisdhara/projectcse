<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Model_quiz extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function checklogin($mail, $password) {

        $query = $this->db->query("select * from users where mail='$mail' AND password='$password'");
        if ($query->num_rows() == 0) {
            echo("error logging in ");
            return 0;
        } else {
            foreach ($query->result_array() as $row) {
                return $row;
            }
        }
    }

    public function register_insert($name, $gender, $mail, $password, $fb, $codechef) {
        $sql = "insert into users (name, gender , mail , password ,fb , codechef,quiz , test_taken) values "
                . "('$name','$gender','$mail','$password','$fb','$codechef',0,0)";
        $this->db->query($sql);
    }

    public function get_user_details($name) {
        $query = $this->db->query("select * from users where name='$name'");
        foreach ($query->result_array() as $row)
            return $row;
    }

    public function get_quiz_details($i) {
        $query = $this->db->query("select * from quiz where id =$i");
        foreach ($query->result_array() as $row)
            return $row;
    }

    public function insert_marks($marks, $name) {
        $query = $this->db->query("update users set quiz=$marks where name='$name'");
    }

    public function inform_test_taken($name) {
        $this->db->query("update users set test_taken = 1 where name ='$name'");
    }

    public function check_answer($i, $answer) {
        $query = $this->db->query("select answer from quiz where id = $i");
        foreach ($query->result_array() as $row) {
            if ($row['answer'] == $answer)
                return 1;
            else
                return 0;
        }
    }

}

?>