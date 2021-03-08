<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
require APPPATH . '/libraries/REST_Controller.php';
class Layout extends CI_Controller {
	function __construct() {
		parent::__construct ();
		// $session_data = $this->session->userdata ( 'logged_in' );
		
		// if (! $session_data ['user_id']) {
		// 	redirect ( '/verifylogin', 'refresh' );
		// 	exit ();
		// }

		// $this->load->helper ( 'url' );
		// $this->load->helper ( 'text' );

		// $this->user_id = ( int ) $session_data ['user_id'];
		// $this->perms = ( int ) $session_data ['role_id'];
		// $this->user_name = $session_data['user_name'];

		// // $this->_data ['title'] = 'GetFly Managers';
		// $this->_data ['user_info'] = $session_data;
	}
	public function render() {
		$this->_data ['header'] = $this->load->view ( 'layout/header', [ ], TRUE );
		$this->_data ['footer'] = $this->load->view ( 'layout/footer', [ ], TRUE );

		$this->load->view ( 'layout/index', $this->_data );
	}
	public function resposeNotFound() {
		$this->load->view ( 'components/page_not_found' );
	}
}
class PublicApi extends REST_Controller {
	function __construct() {
		parent::__construct ();
	}
}

class Web_Controller extends REST_Controller {
	function __construct() {
		parent::__construct ();
		$session_data = $this->session->userdata ( 'logged_in' );

		if (! $session_data ['user_id']) {
			redirect ( '/verifylogin', 'refresh' );
			exit ();
		}

		$this->user_id = ( int ) $session_data ['user_id'];
		$this->user_name = $session_data ['user_name'];
	}
	public function accessDenied() {
		$this->response ( array (
				'message' => 'Access Denied'
		), 400 );
	}
}

class Api_Controller extends REST_Controller {
	protected $allow_methods = ['POST', 'GET'];
	protected $allow_ips = [
		'127.0.0.1',
		'192.168.1.1',
		'192.168.1.99',
		'192.168.1.11',
		'118.70.146.246',
		'171.244.9.81',
		'171.244.9.82',
		'171.244.9.83',
		'171.244.9.84',
		'171.244.9.85',
		'123.30.180.68',
		'123.30.180.69',
		'123.30.180.70',
		'123.30.180.71',
		'210.211.125.111',
		'210.211.125.113',
		'210.211.125.116',
		'210.211.125.117',
		'210.211.125.118',
		'210.211.125.119',
		'210.211.125.120',
		'210.211.125.121',
		'210.211.125.122',
		'210.211.125.123',
		'210.211.125.125',
		'210.211.125.74',
		'210.211.125.86',
		'210.211.125.87',
		'103.63.109.88',
		'210.211.125.76',
		'192.168.0.113',
		'118.68.168.20', //vietguys
		'123.25.3.2', //hoatphathanoi
		'202.134.19.125', // Xaamspa
		'123.30.169.78', //Sao thai duong
	];

	function __construct() {
		parent::__construct ();
		// 1. Kiểm tra tính hợp lệ của phương thức gửi tới
// 		$this->method = $this->input->server('REQUEST_METHOD');
// 		if(!in_array($this->method, $this->allow_methods)){
// 			$this->response(['message' => 'Request Method not accepted'], 403);
// 		}
		// 2. Kiểm tra tính hợp lệ của IP Server
// 		$remote_ip_address = $_SERVER['REMOTE_ADDR'];
// 		if(!in_array($remote_ip_address, $this->allow_ips)){
// 			$this->response(['message' => 'IP Not accepted'], 403);
// 		}
	}
}
