<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DigitalizacionEmpresas extends CI_Controller {

	public function __construct(){
		parent::__construct();

		date_default_timezone_set('America/Mexico_City');
        
	}

	public function index()
	{
        $data['title'] = "Digitalización de empresas";

		$linkJsVista = base_url('assets/js/home.js');
		$footer = array(
            'scriptVista'=> '<script src="'.$linkJsVista.'"></script>',
			'centrado' =>'text-center'
        );

		$this->load->view('header', $data);
		$this->load->view('digitalizacionEmpresas/index');
		$this->load->view('footer', $footer);
	}
}