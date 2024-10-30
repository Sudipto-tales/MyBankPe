<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmailController extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('EmailModel');
    }

    public function index()
    {
        $this->load->view('admin/mail');
    }
}