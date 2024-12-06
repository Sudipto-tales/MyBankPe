<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BlogController extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('BlogModel');
    }
    public function index(){
        $this->load->view('blog');
    }

    public function blog(){
        $data['data'] = $this->BlogModel->blogs_get();
        $data['l_data'] = $this->BlogModel->get_last_blog();
        $this->load->view('blog_list',$data);
    }
    
    public function blog_upload(){
        $this->load->view('admin/blog_upload');
    }

    public function blog_search(){
        $query = $this->input->post('searchbar');
        $data['data'] = $this->BlogModel->search_blogs($query);
        $this->load->view('blogsearch_result',$data);
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