<?php

class Company_model extends CI_model {

	public function getAllCompany()
    {
        return $query = $this->db->get('company')->result_array();    
    }

    public function deleteDataCompany($id)
    {
        $this->db->delete('company', ['idcompany' => $id]);
    }

    public function addDataCompany()
    {
    	$data = [
            "name" => $this->input->post('companyname',true)
        ];
        
        $this->db->insert('company', $data);
    }

    public function getCompanyById($id)
    {
        $this->db->where('idcompany',$id);
        return $query = $this->db->where('idcompany',$id)->get('company')->row_array();
    }

    public function editDataCompany($id)
    {
    	$data = [
            "name" => $this->input->post('companyname',true)
        ];
        $this->db->where('idcompany',$this->input->post('idcompany'));
        $this->db->update('company', $data);
    }
}