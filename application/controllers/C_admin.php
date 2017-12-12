<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	function __construct()
		{
			parent::__construct();
			$this->load->model('M_menu');
			$this->load->helper(array('form', 'url'));

	}

	public function index()
	{

		if($_SESSION['logged_in_admin']){

		$data['title'] = 'Home';
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/index');
		$this->load->view('admin/template/footer');
	}
	else {
		redirect('admin/login');
	}
 }

	public function login()
	{
		$this->load->helper('form');
    $this->load->library('form_validation');
		$_SESSION['logged_in_admin'] = TRUE;
		$this->load->view('admin/login_admin');
	}

public function tabelMenu()
{
	if($_SESSION['logged_in_admin']){

	$data['menu'] = $this->M_menu->getMenu();
  $data['title'] = "Tabel Menu";

	$this->load->view('admin/template/header',$data);
	$this->load->view('admin/tabelMenu',$data);
	$this->load->view('admin/template/footer');
	}
	else {
	redirect('admin/login');
	}
}

public function editMenu($menu_id)
{
	if($_SESSION['logged_in_admin']){

		$this->load->library('form_validation');
	$data['menu'] = $this->M_menu->getMenu($menu_id);
  $data['title'] = "Tabel Menu";
	$config['upload_path']          = './assets/uploads/';
	$config['allowed_types']        = 'gif|jpg|png';
	$config['max_size']             = 0;
	$config['file_name']						= 'gambar_menu_' . $menu_id;
	$config['overwrite']						= TRUE;
	// $config['max_width']            = 1024;
	// $config['max_height']           = 768;

  $this->load->library('upload', $config);
	$this->form_validation->set_rules('nama', 'nama', 'required');
	$this->form_validation->set_rules('harga', 'harga', 'required');

	if ($this->form_validation->run() == FALSE)
	        {
$data['error'] = '';
	$this->load->view('admin/template/header',$data);
	$this->load->view('admin/form/editMenu',$data);
	$this->load->view('admin/template/footer');
					}

					else  if ( ! $this->upload->do_upload('userfile'))
                {

                      	$data['error'] =  $this->upload->display_errors();
												$this->load->view('admin/template/header',$data);
												$this->load->view('admin/form/editMenu',$data);
												$this->load->view('admin/template/footer');
	}
	else
                {
                        $data = array('upload_data' => $this->upload->data());

												$dataedit = array(
													'menu_id' => $menu_id,
													'menu_name' => $this->input->post('nama'),
													'menu_price' => $this->input->post('harga'),
													'img' => $this->upload->data('file_name')
												);
												$this->M_menu->editMenu($dataedit);
                      redirect('admin/tabel/menu');
                }
}

	else {
	redirect('admin/login');
	}
}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}
}
