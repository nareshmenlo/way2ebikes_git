<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {
    
    function __construct() {
        parent::__construct(); 
    }

    public function index()
    {        
        $title['title'] = "Way2ebikes | Contact";
        $this->load->view('header',$title);
        $this->load->view('contactus');
        $this->load->view('footer');
    }
    
}
