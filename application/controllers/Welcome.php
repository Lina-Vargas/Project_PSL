<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function Index()
	{
		$datos = array('titulo' => "Zafiro");
		//$data['encabezado'] = "Menú";
		$this->load->view('header', $datos);
		$this->load->view('Principal');
		$this->load->view('footer');
	}
}
