<?php

class City extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('City_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
    	$data['title'] = 'City';
        $data['city'] = $this->City_model->getAllCity();
        $this->load->view('city/index',$data);
    }

    public function add()
    {
        $data['title'] = 'Tambah City';
        $this->form_validation->set_rules('cityname','City Name','required');
        $this->form_validation->set_rules('country','Country','required');
        if($this->form_validation->run() == FALSE ) {

        $this->load->view('city/add',$data);

         } else {
           $this->City_model->addDataCity();
           $this->session->set_flashdata('flash', 'City berhasil ditambahkan');
           redirect('city');
            
        }
    }
    public function edit($id)
    {
        $data['title'] = 'Edit City';
        $data['city'] = $this->City_model->getCityById($id);
        $this->form_validation->set_rules('cityname','City Name','required');
        $this->form_validation->set_rules('country','Country','required');
        if($this->form_validation->run() == FALSE ) {
        $this->load->view('city/edit',$data);

         } else {
           $this->City_model->editDataCity($id);
           $this->session->set_flashdata('flash', 'City berhasil diubah');
           redirect('city');
            
        }
    }

    public function delete($id)
    {
        $data['title'] = 'Edit City';
        $this->City_model->deleteDataCity($id);
        $this->session->set_flashdata('flash','City berhasil dihapus');
        redirect('city');
    }

}