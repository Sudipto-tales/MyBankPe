<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactUsController extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->model('ContactModel');
    }

    public function index()
    {
        $this->load->view('contact_us');
    }

    public function submit()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $data = array(
                'p_name' => $this->input->post('p_name'),
                'p_email' => $this->input->post('p_email'),
                'comp_name' => $this->input->post('comp_name'),
                'adress' => $this->input->post('adress'),
                'ph_no' => $this->input->post('ph_no'),
                'website' => $this->input->post('website'),
                'msg' => $this->input->post('msg')
            );
            $this->ContactModel->insert_contact($data);
        }

        redirect('contact_us');

    }

    public function contact_view()
    {

        $data['data'] = $this->ContactModel->get_contact();
        $this->load->view('admin/CustomerMassages',$data);
    }

    public function remove($id)
{
    $this->ContactModel->delete_contact($id);
    redirect('admin/CustomerMassages');
}

}