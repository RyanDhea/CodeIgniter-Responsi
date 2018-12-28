<?php

class Company extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Company_model');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
    	$data['title'] = 'Company Page';
        $data['company'] = $this->Company_model->getAllCompany();
        $this->load->view('company/index',$data);
    }

    public function add()
    {
        $data['title'] = 'Tambah Company';
        $this->form_validation->set_rules('companyname','company Name','required');
        if($this->form_validation->run() == FALSE ) {
        $this->load->view('Company/add',$data);

         } else {
           $this->Company_model->addDataCompany();
           redirect('company');
            
        }
    }

    public function edit($id)
    {
        
        $data['title'] = 'Edit Company';
        $data['company'] = $this->Company_model->getCompanyById($id);
        $this->form_validation->set_rules('companyname','Company Name','required');

        if($this->form_validation->run() == FALSE ) {
        $this->load->view('company/edit',$data);

         } else {
           $this->Company_model->editDataCompany($id);
           redirect('company');
            
        }
    }

    public function delete($id)
    {
        $this->Company_model->deleteDataCompany($id);
        redirect('company');
    }

}