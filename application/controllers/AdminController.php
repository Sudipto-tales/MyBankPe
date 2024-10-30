<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{
    // public $error = ['error' => ["Message" => "Invalid Request!"], "empty" => ["Message" => "No Data Found"]];
    // public $str = "Welcome to MyBank API Interface! Use Proper Description and Access Points for the same.";
 
    public function __construct()
    {

        parent::__construct();
        $this->load->model('BlogModel');
        $this->load->model('EmailModel');
    }

    public function index(){
        $this->load->view('admin/dashboard');
    }
    public function submit()
    {

        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $data = array(
                'email' => $this->input->post('email'),
            );
            $this->EmailModel->insert_email($data);


        redirect();
    }
}

public function blog_upload(){
    $this->load->view('admin/blog_upload');
}


}

?>