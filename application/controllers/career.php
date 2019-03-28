<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Career extends CI_Controller {
    
    function __construct() {
        parent::__construct(); 
    }

    public function index()
    {
        $title['title'] = "Way2ebikes | Career";
        $this->load->view('header',$title);
        $this->load->view('career');
        $this->load->view('footer');
    }
}
