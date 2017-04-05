<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function Inicio()
	{
		$datos = array('titulo' => "Zafiro");
		//$data['encabezado'] = "Menú";
		$this->load->view('header', $datos);
		$this->load->view('Principal');
		$this->load->view('footer');
	}

	public function iniciarSesion()
	{
		$datos = array('titulo' => "Inicio  Sesión");
		$this->load->view('header', $datos);
		$this->load->view('InicioSesion');
		$this->load->view('footer');
	}

	public function registrarUsuario()
	{
		$datos = array('titulo' => "Registro");
		$this->load->view('header', $datos);
		$this->load->view('Registro');
		$this->load->view('footer');
	}
	

}
