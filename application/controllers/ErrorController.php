<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ErrorController extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('EmailModel');
    }

    public function index()
    {
        $this->load->view('errors/comming_soon');
    }
}