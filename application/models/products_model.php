<?php

class Products_model extends CI_Model {
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_all()
    {
        $this->db->order_by('id desc');
        $query = $this->db->get('products');
        return $query->result();
    }

    function get_product_images($id)
    {
        $this->db->where('product_id', $id);
        $query = $this->db->get('product_images');
        return $query->result();
    }

    function get_product_feature_images($id)
    {
        $this->db->where('product_id', $id);
        $query = $this->db->get('product_feature_images');
        return $query->result();
    }

     function getHeaderproducts()
    {
        $this->db->order_by('id desc');
        $this->db->limit(10);
        $query = $this->db->get('products');
        return $query->result();
    }

    function get_single_post($id)
    {
        $this->db->where('id', $id);
        $query=$this->db->get('products');
        $response = @array_shift($query->result());
        return $response;
    }
    
    function insert_entry($data)
    {
        return $this->db->insert('products', $data);
    }

    function insert_product_image_entry($data)
    {
        return $this->db->insert('product_images', $data);
    }

    function insert_product_feature_image_entry($data)
    {
        return $this->db->insert('product_feature_images', $data);
    }

    function update_status($status,$id)
    {
        $this->db->update('products',['status'=>$status], array('id' => $id));
        return ($this->db->affected_rows() > 0)?1:0;          
    }

    function delete_product($id)
    {
        $this->db->delete('products', array('id' => $id));
        return ($this->db->affected_rows() > 0)?1:0;          
    }

    function delete_product_image($id)
    {
        $this->db->delete('product_images', array('id' => $id));
        return ($this->db->affected_rows() > 0)?1:0;          
    }

    function delete_product_feature_image($id)
    {
        $this->db->delete('product_feature_images', array('feature_id' => $id));
        return ($this->db->affected_rows() > 0)?1:0;          
    }

    function update_entry($data,$id)
    {
        $this->db->update('products', $data, ['id' => $id]);
    }

}
