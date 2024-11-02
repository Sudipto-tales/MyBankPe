<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogController extends CI_Controller
{
    public function index(){
        $this->load->view('blog_single');
    }

    public function blog(){
        $this->load->view('blog_list');
    }
    
    public function blog_upload(){
        $this->load->view('admin/blog_upload');
    }

    


    public function save_data()
    {  
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $data = array(
                'blog_name' => $this->input->post('blog_name'),
                'uploaded_by' => $this->input->post('uploaded_by'),
                'blog_dsc' => $this->input->post('blog_summary'),
                'blog' => $this->input->post('blog'),
                'tags' => $this->input->post('tags')
            );
            }
        $this->BlogModel->insert_blog($data);

        redirect('BlogController/blog_upload');
    }
}