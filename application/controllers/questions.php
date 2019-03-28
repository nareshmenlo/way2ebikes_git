<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Questions extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
        if (!is_loggedIn()) {
            redirect('admin/login');
        }
		$this->load->model('questions_model');
	}

	public function index() {
        $data['questions'] = $this->questions_model->get_all();
        $this->load->view('admin/header');
        $this->load->view('admin/questions', $data);
        $this->load->view('admin/footer');
    }

	public function create() {
		if($this->input->post()){
			$post_insert_data=[
                'question'=>$_REQUEST['question'],
                'answer'=>$_REQUEST['answer'],
                'date'=>date('Y-m-d'),
                'status'=>'Not Active'
            ];   
            $this->questions_model->insert_entry($post_insert_data);
            $this->session->set_flashdata('success', 'New question created successfully please make active...!');
            redirect('questions'); 
		} else {
            $this->load->view('admin/header');
            $this->load->view('admin/newquestion');
            $this->load->view('admin/footer');
        }        
    }

	public function make_active_not() {
        if($this->input->post('questionid')){
            $status=$this->input->post('status')=="Active"?"Deactive":"Active";
            echo json_encode(['questionid'=>$this->input->post('questionid'),'success'=>((int)$this->questions_model->update_status($status,$this->input->post('questionid')))]);
            die();
        }
    }


    public function update($id) {
        $data['question_details']=$this->get_single_question($id);
        if($this->input->post()){
            $this->form_validation->set_rules('question', 'Question', 'trim|required|xss_clean');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/header');
                $this->load->view('admin/editquestion',$data);
                $this->load->view('admin/footer');
            } else {
                $post_updated_data=[
                    'question'=>$this->input->post('question'),
                    'answer'=>$this->input->post('answer')
                ];   
                $this->questions_model->update_entry($post_updated_data,$id);
                $this->session->set_flashdata('success', 'question updated successfully..!');
                redirect('questions');     
            }
        }else{
            $this->load->view('admin/header');
            $this->load->view('admin/editquestion',$data);
            $this->load->view('admin/footer');
        }
    }

    public function delete_post() {
        if($this->input->post('questionid')){
            $postdata=$this->get_single_question($this->input->post('questionid'));
            if(is_object($postdata)){
                $res=json_encode(['success'=>((int)$this->questions_model->delete_post($this->input->post('questionid')))]);
                $this->session->set_flashdata('success', 'Post deleted successfully');             
                echo $res;
            }
        }
    }

    function get_single_question($id){
        if($id==0){
            redirect('questions');
        }
        $postdata=$this->questions_model->get_single_question($id);
        if($postdata==NULL){
            $this->session->set_flashdata('error', 'Sorry some thing went wrong...(selected post is not available)!');             
            redirect('banners');
        }else{
            return $postdata;
        }
    }

}
