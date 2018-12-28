<?php
class Members extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Members_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['title'] = 'Members Page';
        $data['members'] = $this->Members_model->getAllMembers();
        $this->load->view('members/index',$data);
    }
    public function detail($id){
    	$data['title'] = 'Members Detail Page';
        $data['members'] = $this->Members_model->getMembersById($id);
        $this->load->view('members/detail_members',$data);
    }

    public function add(){
    	$data['title'] = 'Add Members Data';
    	$data['company'] = $this->Members_model->getAllCompany();
    	$data['city'] = $this->Members_model->getAllCity();

    	$this->form_validation->set_rules('fullname','Nama','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run() == FALSE ) {

        $this->load->view('members/add',$data);

         } else {
           $this->Members_model->addDataMembers();
           redirect('members');
            
        }
    }

    public function delete($id){
        $this->Members_model->deleteDataMembers($id);
        redirect('members');
    }

    public function edit($id)
    {
    	
    	$data['title'] = 'Edit Members Data';
    	$data['company'] = $this->Members_model->getAllCompany();
    	$data['city'] = $this->Members_model->getAllCity();
    	$data['members'] = $this->Members_model->getMembersById($id);
    	$this->form_validation->set_rules('fullname','Nama','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        if($this->form_validation->run() == FALSE ) {

        $this->load->view('members/edit',$data);

         } else {
           $this->Members_model->editDataMembers($id);
           redirect('members');
            
        }
    }


}