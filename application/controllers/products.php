<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('products_model');
    }

    public function index() {
        $data['products'] = $this->products_model->get_all();
        $this->load->view('header');
        $this->load->view('products', $data);
        $this->load->view('footer');
    }

    public function view($id=1) {
        $data['product_details'] = $this->products_model->get_single_post($id);
        $this->load->view('header');
        $this->load->view('viewproduct', $data);
        $this->load->view('footer');
    }
}
