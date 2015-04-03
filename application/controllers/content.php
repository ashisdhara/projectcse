<?php

class Content extends CI_Controller {

    public function index ()
    {
        $this->load->view('content_view');
    }
    public function os()
    {
        $this->load->view('os1');
    }
}