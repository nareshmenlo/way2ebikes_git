<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class AdminProducts extends CI_Controller {

    function __construct() {
        parent::__construct();
        if (!is_loggedIn()) {
            redirect('admin/login');
        }
        $this->load->model('products_model');
    }

    public function index() {
        $data['products'] = $this->products_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/products', $data);
        $this->load->view('admin/footer');
    }

    public function create() {
        if($this->input->post()){
            $this->form_validation->set_rules('product_title', 'Title', 'trim|required|xss_clean|unique');
            $this->form_validation->set_rules('product_desc', 'Product Description', 'trim');
            $this->form_validation->set_rules('product_slug', 'Product Slug', 'trim');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/header');
                $this->load->view('admin/newproduct',$data);
                $this->load->view('admin/footer');
            } else {
                $post_insert_data=[
                    'product_title'=>$this->input->post('product_title'),
                    'product_desc'=>$this->input->post('product_desc'),
                    'product_slug'=>preg_replace('/[^a-zA-Z0-9_.]/', '-', $this->input->post('product_slug')),
                    'status'=>'Not Active',
                ];   
                $this->products_model->insert_entry($post_insert_data);
                $this->session->set_flashdata('success', 'New product created successfully please make active...!');
                redirect('products'); 
            }
        }else{
            $this->load->view('admin/header');
            $this->load->view('admin/newproduct');
            $this->load->view('admin/footer');
        }
    }

    public function updateimages($id) {
        if(isset($_FILES['product_image'])){
            $filesCount = count($_FILES['product_image']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['product_image']['name'][$i];
                $_FILES['file']['type']     = $_FILES['product_image']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['product_image']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['product_image']['error'][$i];
                $_FILES['file']['size']     = $_FILES['product_image']['size'][$i];
                $upload_image_name="";
                $upload_file_res=$this->do_upload('file');
                //print_r($upload_file_res);exit;
                if(is_array($upload_file_res)){
                    if(!$upload_file_res['error']){
                        $upload_image_name=$upload_file_res['data']['file_name'];
                        $post_insert_data=[
                            'product_id'=>$id,
                            'product_image'=>$upload_image_name
                        ];
                        $this->products_model->insert_product_image_entry($post_insert_data);
                    }
                }
            } 
            redirect('adminproducts/productimages/'.$id);       
        }
              
    }

    public function updatefeatureimages($id) {
        if(isset($_FILES['feature_image'])){
            $filesCount = count($_FILES['feature_image']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['feature_image']['name'][$i];
                $_FILES['file']['type']     = $_FILES['feature_image']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['feature_image']['tmp_name'][$i];
                $_FILES['file']['error']     = $_FILES['feature_image']['error'][$i];
                $_FILES['file']['size']     = $_FILES['feature_image']['size'][$i];
                $upload_image_name="";
                $upload_file_res=$this->do_upload_feature('file');
                //print_r($upload_file_res);exit;
                if(is_array($upload_file_res)){
                    if(!$upload_file_res['error']){
                        $upload_image_name=$upload_file_res['data']['file_name'];
                        $post_insert_data=[
                            'product_id'=>$id,
                            'feature_image'=>$upload_image_name
                        ];
                        $this->products_model->insert_product_feature_image_entry($post_insert_data);
                    }
                }
            } 
            redirect('adminproducts/productfeatureimages/'.$id);       
        }
              
    }

    public function edit($id=0) {
        if($id>0){
            $data['product_details'] = $this->get_single_post($id);
            $this->load->view('admin/header');
            $this->load->view('admin/editproduct',$data);
            $this->load->view('admin/footer');
        }else{
            redirect('products');
        }
    }

    function do_upload_feature($fieldname){
        $config['upload_path'] = './useruploadfiles/featureimages';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload($fieldname)){
            $result = array('error' =>true,'data'=>$this->upload->display_errors());
            return $result;
        }else{
            $result = array('error' =>false,'data'=>$this->upload->data());
            return $result;
        }
    }

    function do_upload($fieldname){
        $config['upload_path'] = './useruploadfiles/productimages';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload($fieldname)){
            $result = array('error' =>true,'data'=>$this->upload->display_errors());
            return $result;
        }else{
            $result = array('error' =>false,'data'=>$this->upload->data());
            return $result;
        }
    }

    public function make_active_not() {
        if($this->input->post('productid')){
            $status=$this->input->post('status')=="Active"?"Deactive":"Active";
            echo json_encode(['productid'=>$this->input->post('productid'),'success'=>((int)$this->products_model->update_status($status,$this->input->post('productid')))]);
            die();
        }
    }

    public function viewproduct($id=0) {
        $data['productdata']=$this->get_single_post($id);
        $this->load->view('admin/header');
        $this->load->view('admin/viewproduct',$data);
        $this->load->view('admin/footer');
    }

    function get_single_post($id){
        if($id==0){
            redirect('products');
        }
        $postdata=$this->products_model->get_single_post($id);
        if($postdata==NULL){
            $this->session->set_flashdata('error', 'Sorry some thing went wrong...(selected post is not available)!');             
            redirect('products');
        }else{
            return $postdata;
        }
    }

    public function update($id) {
        $data['productdata']=$this->get_single_post($id);
        if($this->input->post()){
            $this->form_validation->set_rules('product_title', 'Title', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/header');
                $this->load->view('admin/editproduct',$data);
                $this->load->view('admin/footer');
            } else {
                $post_updated_data=[
                    'product_title'=>$this->input->post('product_title'),
                    'product_desc'=>$this->input->post('product_desc'),
                    'product_slug'=>preg_replace('/[^a-zA-Z0-9_.]/', '-', $this->input->post('product_slug'))
                ];
                $this->products_model->update_entry($post_updated_data,$id);
                $this->session->set_flashdata('success', 'product updated successfully..!');             
                redirect('products');     
            }
        }else{
            $this->load->view('admin/header');
            $this->load->view('admin/editproduct',$data);
            $this->load->view('admin/footer');
        }
    }

    public function delete_product() {
        if($this->input->post('productid')){
            $product_id = $this->input->post('productid');
            $postdata=$this->get_single_post($product_id);
            if(is_object($postdata)){
                $res=json_encode(['success'=>((int)$this->products_model->delete_product($product_id))]);
                $this->session->set_flashdata('success', 'Post deleted successfully');             
                echo $res;
            }
        }
    }

    public function delete_product_image() {
        if($this->input->post('productimageid')){
            $productimageid = $this->input->post('productimageid');
            $res=json_encode(['success'=>((int)$this->products_model->delete_product_image($productimageid))]);
            $this->session->set_flashdata('success', 'Product image deleted successfully');
            echo $res;
        }
    }
    public function delete_product_feature_image() {
        if($this->input->post('feature_id')){
            $feature_id = $this->input->post('feature_id');
            $res=json_encode(['success'=>((int)$this->products_model->delete_product_feature_image($feature_id))]);
            $this->session->set_flashdata('success', 'Product feature image deleted successfully');
            echo $res;
        }
    }

    public function productimages($id) {
        $data['product_details'] = $this->products_model->get_single_post($id);
        $data['product_images'] = $this->products_model->get_product_images($id);
        $this->load->view('admin/header');
        $this->load->view('admin/viewproductimages', $data);
        $this->load->view('admin/footer');
    }

    public function productfeatureimages($id) {
        $data['product_details'] = $this->products_model->get_single_post($id);
        $data['product_feature_images'] = $this->products_model->get_product_feature_images($id);
        $this->load->view('admin/header');
        $this->load->view('admin/viewproductfeatureimages', $data);
        $this->load->view('admin/footer');
    }

}
