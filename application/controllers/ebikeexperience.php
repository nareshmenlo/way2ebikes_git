<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ebikeexperience extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->model('home_model');
        $data["videos"] = $this->home_model->getVideos(10);
        $title['title'] = "OUR VIDEOS";
        $this->load->view('header', $title);
        $this->load->view('ebikeexperience', $data);
        $this->load->view('footer');
    }
}
