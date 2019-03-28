<?php

class Single_model extends CI_Model {
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all()
    {
        $this->db->order_by('id','desc');
        $query = $this->db->get('single');
        return $query->result();
    }

    function get_single_post($id)
    {
        $this->db->where('id', $id);
        $query=$this->db->get('single');
        return array_shift($query->result());
    }
    
    
    function update_entry($data,$id)
    {
        $this->db->update('single', $data, ['id' => $id]);
    }

    
}
