<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // Load necessary models and libraries
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Display logged-in user and products
    public function index()
    {
        $data['title'] = 'Density Living';
        $data['content'] = 'user/home/home_index';

        $this->load->view('user/layouts/main', $data); // Load the view and pass data
    }
}