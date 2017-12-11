<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pages extends CI_Controller {

	function __construct()
	  {
	    parent::__construct();
			$this->load->library('cart');
			$this->load->model('M_menu');
	}

	public function index()
	{
		$data = array(
			'uri' => $this->uri->segment(1)
		);

		$this->load->view('user/template/header',$data);
		$this->load->view('user/index');
		$this->load->view('user/template/footer');

	}

	public function register()
	{

		$this->load->view('user/template/header');
		$this->load->view('user/register');
		$this->load->view('user/template/footer');
	}

public function logout()
{
	session_destroy();
	redirect('');
}
	public function login()
	{
		$newdata = array(
			'logged_in' => TRUE
		);
		$this->session->set_userdata($newdata);
		redirect('');
	}
	public function menu()
	{
		$data['menu'] = $this->M_menu->getMenu();
		$this->load->view('user/template/header');
		$this->load->view('user/menu');
		$this->load->view('user/template/footer');
	}
}
