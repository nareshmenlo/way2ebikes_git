<?php

class Questions_model extends CI_Model {
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all()
    {
        $this->db->order_by('id desc');
        $query = $this->db->get('questions_and_answers');
        return $query->result();
    }

    function get_questions_count(){
        $this->db->select('*');
        $this->db->from('questions_and_answers');
        $this->db->where('status = "Active"');
        $query = $this->db->get();
        return $result =$query->num_rows();
    }

    function get_by_questions_range($start,$end){
        $query = $this->db->query("select * from questions_and_answers where status = 'Active' order by id desc limit $start,$end ");
        return $result =$query->result();
    }

     function getHeaderQuestions()
    {
        $this->db->order_by('id desc');
        $this->db->limit(10);
        $query = $this->db->get('questions_and_answers');
        return $query->result();
    }

    function get_single_question($id)
    {
        $this->db->where('id', $id);
        $query=$this->db->get('questions_and_answers');
        return @array_shift($query->result());
    }
    
    function insert_entry($data)
    {
        return $this->db->insert('questions_and_answers', $data);
    }

    function update_status($status,$id)
    {
        $this->db->update('questions_and_answers',['status'=>$status], array('id' => $id));
        return ($this->db->affected_rows() > 0)?1:0;          
    }

    function delete_post($id)
    {
        $this->db->delete('questions_and_answers', array('id' => $id));
        return ($this->db->affected_rows() > 0)?1:0;          
    }

    function update_entry($data,$id)
    {
        $this->db->update('questions_and_answers', $data, ['id' => $id]);
    }

}
