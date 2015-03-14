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
    public function check_login($email,$password)
    {  
        $sql="select * from users where email_id='$email' and password='$password'";
        $query=$this->db->query($sql);
        if($query->num_rows()==0)
        {
            return 0;
          
        }
        else
            foreach($query->result_array() as $row){
            return $row;
            
            }
    }
}