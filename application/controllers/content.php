<?php

class Content extends CI_Controller {

    
    public function index ()
    {
        $this->load->view('content_view');
    }
    public function subject1()
    {
        $this->load->view('subject1_1');
    }
    public function subject2()
    {
        $this->load->view('subject2_1') ;
    }
    public function subject1next ($page)
    {
        $this->load->view('subject1_'.$page);
    }
    public function subject2next ($page)
    {
        $this->load->view('subject2_'.$page);
    }
    
}