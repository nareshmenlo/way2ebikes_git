<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Becomeadealer extends CI_Controller {
    
    function __construct() {
        parent::__construct(); 
    }

    public function index()
    {        
        $title['title'] = "Way2ebikes | Become a Dealer";
        $this->load->view('header',$title);
        $this->load->view('becomeadealer');
        $this->load->view('footer');
    }
    
}
