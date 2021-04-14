<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycontroller extends CI_Controller {


//////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////TABLES/////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////

	///////////////////////////////////////DMSP//////////////////////////////////////////////
	public function HienThiDm()
	{
		$this->load->model('mymodel');
		$result['dm'] = $this->mymodel->HienThiDm()->result_array();
		$this->load->view('view_admin/examples/addModal', $result);
		$this->load->view('view_update/indexSP', $result);
	}


	public function tables()
	{
		$this->load->model('mymodel');
		$result['sp'] = $this->mymodel->HienThiDmsp()->result_array();
		$result['dm'] = $this->mymodel->HienThiDm()->result_array();
		$result['ncc'] = $this->mymodel->HienThiNCC()->result_array();
		$result['kh'] = $this->mymodel->HienThiKH()->result_array();
		$result['hdb'] = $this->mymodel->HienThiHDB()->result_array();
		$result['hdn'] = $this->mymodel->HienThiHDN()->result_array();
		$this->load->view('view_admin/examples/tables', $result);
	}


	public function ThemSP(){
		$data['masp'] = $this->input->post('input_masp');
		$data['tensp'] = $this->input->post('input_tensp');
		$data['dongia'] = $this->input->post('input_dongia');
		$data['donvitinh'] = $this->input->post('input_donvitinh');
		$data['soluong'] = $this->input->post('input_soluong');
		$data['mota'] = $this->input->post('input_mota');
		$data['iddm'] = $this->input->post('id_dm');
		
		$config['upload_path'] = './uploads/SanPham/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('input_img')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$dataimg = array('upload_data' => $this->upload->data());
			$data['img'] = $dataimg['upload_data']['file_name'];
		}
		if ( ! $this->upload->do_upload('input_img1')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$dataimg = array('upload_data' => $this->upload->data());
			$data['img1'] = $dataimg['upload_data']['file_name'];
		}
		if ( ! $this->upload->do_upload('input_img2')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$dataimg = array('upload_data' => $this->upload->data());
			$data['img2'] = $dataimg['upload_data']['file_name'];
		}
		if ( ! $this->upload->do_upload('input_img3')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$dataimg = array('upload_data' => $this->upload->data());
			$data['img3'] = $dataimg['upload_data']['file_name'];
		}
		if ( ! $this->upload->do_upload('input_img4')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$dataimg = array('upload_data' => $this->upload->data());
			$data['img4'] = $dataimg['upload_data']['file_name'];
		}

		$this->load->model('mymodel');
		$this->mymodel->ThemSP($data);
	}


	public function deleteSP($id){
		$this->load->model('mymodel');
		$this->mymodel->deleteSP($id);

	}

	///////////////////////////////////////NCC//////////////////////////////////////////////
	public function ThemNCC(){
		if(!empty($_POST)){

			$data['mancc'] = $this->input->post('input_mancc');
			$data['tenncc'] = $this->input->post('input_tenncc');
			$data['chinhanh'] = $this->input->post('input_chinhanh');
			$data['diachi'] = $this->input->post('input_diachi');
			$this->load->model('mymodel');
			$this->mymodel->ThemNCC($data);
		}
	}


	public function deleteNCC($id){

		$this->load->model('mymodel');
		$this->mymodel->deleteNCC($id);

	}
	public function EditSP($id){

			//lay du lieu theo id
		$this->load->model('mymodel');
		$result['info'] = $this->mymodel->EditSP($id)->result_array();
		$this->load->view('view_update/indexSP.php', $result);
		
	}

	public function UpdateSP($id){
		$data['masp'] = $this->input->post('input_masp');
		$data['tensp'] = $this->input->post('input_tensp');
		$data['dongia'] = $this->input->post('input_dongia');
		$data['donvitinh'] = $this->input->post('input_donvitinh');
		$data['mota'] = $this->input->post('input_mota');
		$data['iddm'] = $this->input->post('input_id_dm');

		if ($data) {
			$this->load->model('mymodel');
			$this->mymodel->UpdateSP($id, $data);
		}
		
		
	}

//////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////END TABLES/////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
	public function Dashboard()

	{
		$this->load->model('mymodel');
		$result['nv'] = $this->mymodel->HienThiNV()->result_array();

		$result['doanhthu'] = $this->mymodel->HienThiDoanhThu()->result_array();

		$result['luong'] = $this->mymodel->HienThiLuong()->result_array();

		$result['loinhuangop'] = $this->mymodel->HienThiLoiNhuanGop()->result_array();

		$result['soluongkh'] = $this->mymodel->HienThiSoLuongKH()->result_array();

		$this->load->view('view_admin/examples/dashboard',$result);
	}

	public function ThemNV()

	{
		$data['manv'] = $this->input->post('input_manv');
		$data['tennv'] = $this->input->post('input_tennv');
		$data['luong'] = $this->input->post('input_luong');
		$data['quequan'] = $this->input->post('input_quequan');
		$data['sdt'] = $this->input->post('input_sdt');
		
		$config['upload_path'] = './uploads/NhanVien/';
		$config['allowed_types'] = 'gif|jpg|png';
		
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload('input_img')){
			$error = array('error' => $this->upload->display_errors());
		}
		else{
			$dataimg = array('upload_data' => $this->upload->data());
			$data['img'] = $dataimg['upload_data']['file_name'];
		}

		$this->load->model('mymodel');
		$this->mymodel->ThemNV($data);
	}

	public function deleteNV($id){

		$this->load->model('mymodel');
		$this->mymodel->deleteNV($id);

	}

	public function EditNV($id){

			//lay du lieu theo id
		$this->load->model('mymodel');
		$result['info'] = $this->mymodel->EditNV($id)->result_array();
		$this->load->view('view_update/index.php', $result);

	}

	public function UpdateNV($id){

		$data['manv'] = $this->input->post('input_manv');
		$data['tennv'] = $this->input->post('input_tennv');
		$data['luong'] = $this->input->post('input_luong');
		$data['quequan'] = $this->input->post('input_quequan');
		$data['sdt'] = $this->input->post('input_sdt');


		if ($data) {
			$this->load->model('mymodel');
			$this->mymodel->UpdateNV($id, $data);
		}

	}


//////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////END DASHBOARD/////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
	public function notifications(){
		$this->load->model('mymodel');
		$result['BinhLuan0'] = $this->mymodel->HienThiBinhLuan0()->result_array();
		$result['BinhLuan1'] = $this->mymodel->HienThiBinhLuan1()->result_array();
		$this->load->view('view_admin/examples/notifications', $result);
	}
	public function KichHoatBinhLuan($id){
		$this->load->model('mymodel');
		$this->mymodel->KichHoatBinhLuan($id);
	}

	public function BoKichHoatBinhLuan($id){
		$this->load->model('mymodel');
		$this->mymodel->BoKichHoatBinhLuan($id);
	}

	public function DeleteBinhLuan($id){
		$this->load->model('mymodel');
		$this->mymodel->DeleteBinhLuan($id);
	}



//////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////END Notifications/////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
	public function User($id=1)
	{

		$this->load->model('mymodel');
		$result['user'] = $this->mymodel->HienThiUser($id)->result_array();
		$this->load->view('view_admin/examples/user', $result);
	}

//////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////END USER/////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////

	public function login(){
		$this->load->view('view_login/login');
	}

	public function register(){
		$this->load->view('view_register/register');
	}
}