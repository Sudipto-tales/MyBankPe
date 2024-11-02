<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PageController extends CI_Controller
{
  
	public function index()
	{
        $this->load->view('home');
    }
	public function feature()
	{
        $this->load->view('features');
    }


    public function payout()
	{
        $this->load->view('pages/payout');
    }

    public function payment_getway()
	{
        $this->load->view('pages/payment_gateway');
    }

    public function current_account()
	{
        $this->load->view('pages/current_account');
    }

    public function source_to_pay()
	{
        $this->load->view('pages/source_to_pay');
    }
    


}