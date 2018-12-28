<?php

class City_model extends CI_model {

	public function getAllCity()
    {
        return $query = $this->db->get('city')->result_array();
        
    }

    public function deleteDataCity($id)
    {
        $this->db->delete('city', ['idcity' => $id]);
    }

    public function addDataCity()
    {
    	$data = [
            "cityname" => $this->input->post('cityname',true),
            "country" => $this->input->post('country',true)
        ];
        
        $this->db->insert('city', $data);
    }

    public function getCityById($id)
    {

    	$this->db->where('idcity',$id);
      	return $query = $this->db->where('idcity',$id)->get('city')->row_array();
    }

    public function editDataCity($id)
    {
    	$data = [
            "cityname" => $this->input->post('cityname',true),
            "country" => $this->input->post('country',true)
        ];
        $this->db->where('idcity',$this->input->post('idcity'));
        $this->db->update('city', $data);
    }

}