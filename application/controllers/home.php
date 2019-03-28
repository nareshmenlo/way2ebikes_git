<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class  Home extends CI_Controller {
    
    function __construct() {
        parent::__construct();  
        $this->load->model('home_model');
    }
    public function index()
    {
        
        $data=$side=[];
        $lang=is_eng_language()?'english':'telugu';
        $data['banners'] = $this->home_model->getAllBanners();
       // $data['articles'] = $this->home_model->getAllSpecialArticles($lang);  
        //$data['gallery'] = $this->home_model->getLatestGallery();  
       // $data['videos'] = $this->home_model->getLatestVideo();
       // $data['aboutus'] = $this->home_model->getPageContent('aboutus', $lang)[0];
        $title['title'] = "Way2ebikes";
        $this->load->view('header',$title);
        $this->load->view('home',$data);
        $this->load->view('footer');
    }

    public function contactus(){
        $title['title'] = "Way2ebikes Contact Us";
        $this->load->view('header',$title);
        $this->load->view('contactus');
        $this->load->view('footer');    
    }

    public function aboutus(){
        $title['title'] = "Way2ebikes About Us";
        $lang=is_eng_language()?'english':'telugu';
        $data['aboutus'] = $this->home_model->getPageContent('aboutus', $lang)[0];
        $this->load->view('header',$title);
        $this->load->view('aboutus',$data);
        $this->load->view('footer');    
    }

    public function langchange(){
        if(!$this->session->userdata('language') || $this->session->userdata('language') === "telugu") {
            $this->session->set_userdata('language','english');                        
        }elseif($this->session->userdata('language') === "english"){
            $this->session->set_userdata(['language'=>'telugu']);            
        }
        redirect($_SERVER['HTTP_REFERER']);
    }
}
