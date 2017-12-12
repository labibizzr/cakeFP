<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pages extends CI_Controller {

	function __construct()
	  {
	    parent::__construct();
			$this->load->library('cart');
			$this->load->model('M_menu');
			$this->load->model('M_customer');
			$this->load->model('M_order');
			$this->load->model('M_orderDetails');
			$this->load->helper(array('form', 'url'));
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
		$data['title'] = 'Register';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'password	', 'required');


		if ($this->form_validation->run() == FALSE){


		$this->load->view('user/template/header',$data);
		$this->load->view('user/registerLogin');
		$this->load->view('user/template/footer');
	}

	else {
	 $this->M_customer->createCustomer();
	 $this->session->set_flashdata('message_id', 'Registration success ! Please log in with your new account. <br/> You will be redirected in 5 seconds');//message rendered
	 $this->session->set_flashdata('seconds_redirect', 5);
	 $this->session->set_flashdata('url_redirect');

	 $this->load->view('temp_view');

	}
	}

public function logout()
{
	session_destroy();
	redirect('');
}
	public function login()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('emailUser', 'email', 'required');
		$this->form_validation->set_rules('passwordUser', 'password', 'required');

		if ($this->form_validation->run()==FALSE) {
			redirect('register');
		}
		else{

		$this->M_customer->login_authen();

		redirect('');
	}
	}

	public function menu()
	{
		$data['menu'] = $this->M_menu->getMenu();
		$data['title'] = 'Menu';

		$this->load->view('user/template/header',$data);

		$this->load->view('user/menu',$data);
		$this->load->view('user/template/footer');
	}

	public function checkout1()
	{

		if(!isset($_SESSION['logged_in']))
		redirect('');
		else{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('jalan', 'jalan', 'required');
		$this->form_validation->set_rules('zip', 'zip', 'required');
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'required');
		$this->form_validation->set_rules('kota', 'kota', 'required');
		$this->form_validation->set_rules('phone', 'phone', 'required');

		if($this->form_validation->run() == FALSE){
		$data['title'] = 'Checkout';
		$this->load->view('user/template/header',$data);
		$this->load->view('user/checkout1',$data);
		$this->load->view('user/template/orderSidebar');
		$this->load->view('user/template/footer');
		}
		else {
		$_SESSION['jalan'] = $this->input->post('jalan');
		$_SESSION['zip'] = $this->input->post('zip');
		$_SESSION['kecamatan'] = $this->input->post('kecamatan');
		$_SESSION['kota'] = $this->input->post('kota');
		$_SESSION['phone'] = $this->input->post('phone');

		redirect('checkout2');
		}
		}
	}

	public function checkout2()
	{
		if(!isset($_SESSION['logged_in']))
		redirect('');
		else{
		$data['title'] = 'Review';


		$this->load->view('user/template/header',$data);
		$this->load->view('user/checkout2',$data);
		$this->load->view('user/template/orderSidebar');
		$this->load->view('user/template/footer');
		}
	}
	public function checkout(){
		$orderID = $this->M_order->createOrder();
	 $this->M_orderDetails->createOrderDetails($orderID);
	 unset($_SESSION['jalan']);
	 unset($_SESSION['zip']);
	 unset($_SESSION['kecamatan']);
	 unset($_SESSION['kota']);
	 unset($_SESSION['phone']);
	 $this->cart->destroy();
		echo '<script language="javascript" type="text/javascript">
		 			alert("Pesanan telah diterima ! silahkan transfer sejumlah total ke rek. BCA 123455678");
					window.location = "' . site_url('') .'"
		 			</script>';

	}

public function basket()
{
	if(!isset($_SESSION['logged_in'])){
		echo '<script language="javascript" type="text/javascript">
		 			alert("Mohon login terlebih dahulu");
					window.location = "' . site_url('register') .'"
		 			</script>';
	}
	else{
	$data['title'] = 'Basket';
	$this->load->view('user/template/header',$data);
	$this->load->view('user/basket',$data);
	$this->load->view('user/template/orderSidebar');
	$this->load->view('user/template/footer');
}
}
public function customerOrderPage(){
	if(!isset($_SESSION['logged_in'])){
		echo '<script language="javascript" type="text/javascript">
		 			alert("Mohon login terlebih dahulu");
					window.location = "' . site_url('register') .'"
		 			</script>';
	}
	else{
		$data['title'] = 'Customer Orders';
		$data['orders'] = $this->M_order->getOrderbyCustomerId($_SESSION['customer_id']);
		$this->load->view('user/template/header',$data);
		$this->load->view('user/template/customerSidebar');
		$this->load->view('user/customer-orders',$data);
		$this->load->view('user/template/footer');
	}
}
public function customerOrderDetail($order_id){

	if(!isset($_SESSION['logged_in'])){
		echo '<script language="javascript" type="text/javascript">
		 			alert("Mohon login terlebih dahulu");
					window.location = "' . site_url('register') .'"
		 			</script>';
	}
	else {
		$data['title'] = 'Customer Order';
		$data['order'] = $this->M_order->getOrder($order_id);
		$data['details'] = $this->M_orderDetails->getOrderDetails($order_id);
		// echo var_dump($data['details']);
		$this->load->view('user/template/header',$data);
		$this->load->view('user/template/customerSidebar');
		$this->load->view('user/customer-order-detail',$data);
		$this->load->view('user/template/footer');
	}
}
	public function addMenuCart($menu_id){
		$dataMenu = $this->M_menu->getMenu($menu_id);

		$data = array(
        'id'      => $dataMenu[0]['menu_id'],
				'name'    => $dataMenu[0]['menu_name'],
        'price'   => $dataMenu[0]['menu_price'],
				'img'			=> $dataMenu[0]['img'],
        'qty'     => 10

);
$this->cart->insert($data);
redirect('menu');
	}
}
