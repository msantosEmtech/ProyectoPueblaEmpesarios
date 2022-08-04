<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		date_default_timezone_set('America/Mexico_City');
        
	}

	public function index()
	{
        $data['title'] = "Home";

		$linkJsVista = base_url('assets/js/home.js');
		$footer = array(
            'scriptVista'=> '<script src="'.$linkJsVista.'"></script>'
        );

		$this->load->view('header', $data);
		$this->load->view('home/index');
		$this->load->view('footer', $footer);
	}
}
