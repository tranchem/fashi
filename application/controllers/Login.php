<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Layout {

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
	public function index()
	{
		// $this->load->view('layout/index');
		$this->_data['main_content'] = $this->load->view('login/index', [], true);
		// $this->load->view('layout/index', $this->_data);
		$this->render();

	}
	public function dangnhap()
	{
		// $this->load->view('layout/index');
		$this->_data['main_content'] = $this->load->view('login/dangnhap_admin', [], true);
		// $this->load->view('layout/index', $this->_data);
		$this->render();


	}
	public function dangky()
	{
		$hoten=$this->input->post('hoten')
		$truong=$this->input->post('truong')
		$email=$this->input->post('email')
		$password=$this->input->post('password')
		$hokhau=$this->input->post('hokhau')
		$thanhpho=$this->input->post('thanhpho')
		$quocgia=$this->input->post('quocgia')
		$sdt=$this->input->post('sdt')
		$ghichu=$this->input->post('ghichu')
		$anh=$this->input->post('anh')
		
		// $this->load->view('layout/index');
		$this->_data['main_content'] = $this->load->view('login/dangky_admin', [], true);
		// $this->load->view('layout/index', $this->_data);


		$this->render();
	

	}
	public function dangky_add_action()
	{
		// var_dump($this->input->post());die();
		$id = $this->input->post('id');
		$name = $this->input->post('name');

		$data = array(
			'id' =>  $id,
			'hoten' =>  $hoten,
			'truong' =>  $hoten,
			'email' =>  $email,
			'password' =>  $password,
			'hokhau' =>  $hokhau,
			'thanhpho' =>  $thanhpho,
			'quocgia' =>  $quocgia,
			'sdt' =>  $sdt,
			'ghichu' =>  $ghichu,
			'anh' =>  $anh,

		);
		$this->db->where('id_menu', $id_menu);
		if ($this->db->insert('tbl_menu', $data)) {
			echo "
        <script>
            window.alert('Thêm mới thành công!');
			window.location.href = document.referrer;
        </script>
    ";
		}
	}
}
