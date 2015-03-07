<?php
class Users_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }

    
    public function register_insert($username, $email, $password, $name, $phonenumber ) {
        $sql = "insert into users (username, email_id , password , name , phone_number , student_or_faculty ) values "
                . "('$username','$email','$password','$name',$phonenumber,'y' )";
        $this->db->query($sql);
    }
}