<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {


//////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////TABLES/////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////DMSP//////////////////////////////////////////////
	public function HienThiDmsp(){

		return $this -> db -> get('b_dmsp');
	}

	public function ThemSP($data){
		$object = array(
			'MaSP' =>$data['masp'],
			'TenSP' =>$data['tensp'],
			'DonGia' =>$data['dongia'],
			'MoTa'=>$data['mota'],
			'DVT' =>$data['donvitinh'],
			'SL' => $data['soluong'],
			'Anh' =>$data['img'] 
		);
		$this->db->insert('b_dmsp', $object);
		redirect(base_url('Mycontroller/tables'),'refresh');
	}


	public function deleteSP($id){
		$this->db->where('MaSP', $id);
		$this->db->delete('b_dmsp');
		redirect(base_url('Mycontroller/tables'),'refresh');
	}
	public function EditSP($id){
		$this->db->where('MaSP', $id);
		return $this->db->get('b_dmsp');
	}

	public function UpdateSP($id, $data){

		
		
	}
///////////////////////////////////////NCC//////////////////////////////////////////////
	
	public function HienThiNCC(){

		return $this -> db -> get('b_ncc');
	}

	public function ThemNCC($data){
		$object = array(
			'MaNCC' =>$data['mancc'],
			'TenNCC' =>$data['tenncc'],
			'ChiNhanh' =>$data['chinhanh'],
			'DiaChi'=>$data['diachi']
		);
		$this->db->insert('b_ncc', $object);
		redirect(base_url('Mycontroller/tables'),'refresh');
	}



	public function deleteNCC($id){
		$this->db->where('MaNCC', $id);
		$this->db->delete('b_ncc');
		redirect(base_url('Mycontroller/tables'),'refresh');
	}

///////////////////////////////////////KH//////////////////////////////////////////////

	public function HienThiKH(){

		return $this -> db -> get('b_kh');
	}
	public function HienThiHDB(){
		$this->db->select('*');
		$this->db->from('b_hdb');
		$this->db->join('b_cthdb', 'b_hdb.SoHDB = b_cthdb.SoHDB', 'inner'); 
		$query = $this->db->get();
		return $query;
	}

	public function HienThiHDN(){
		$this->db->select('*');
		$this->db->from('b_hdn');
		$this->db->join('b_cthdn', 'b_hdn.SoHDN = b_cthdn.SoHDN', 'inner'); 
		$query = $this->db->get();
		return $query;
	}
//////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////END TABLES/////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
	public function HienThiDoanhThu(){
		$this->db->select('SUM(ThanhTien) AS TT');
		$this->db->from('b_hdb');
		$this->db->join('b_cthdb', 'b_hdb.SoHDB = b_cthdb.SoHDB', 'inner'); 
		$query = $this->db->get();
		return $query;
	}

	public function HienThiLuong(){
		$this->db->select('SUM(Luong) AS Luong');
		$this->db->from('b_nv');
		$query = $this->db->get();
		return $query;
	}

	public function HienThiLoiNhuanGop(){
		$this->db->select('SUM(b_cthdb.ThanhTien) - SUM(b_cthdn.ThanhTien) AS LoiNhuanGop');
		$this->db->from('b_cthdb');
		$this->db->join('b_cthdn', 'b_cthdb.MaSP = b_cthdn.MaSP', 'inner'); 
		$query = $this->db->get();
		return $query;
	}
	public function HienThiSoLuongKH(){
		$this->db->select('COUNT(MaKH) AS MaKH');
		$this->db->from('b_kh');
		$query = $this->db->get();
		return $query;
	}
	public function HienThiNV(){
		return $this -> db -> get('b_nv');
	}

	public function ThemNV($data){
		$object = array(
			'MaNV' =>$data['manv'],
			'TenNV' =>$data['tennv'],
			'Luong' =>$data['luong'],
			'DiaChi'=>$data['quequan'],
			'SDT'=>$data['sdt'],
			'Anh' => $data['img']
		);
		$this->db->insert('b_nv', $object);
		redirect(base_url('Mycontroller/dashboard'),'refresh');
	}

	public function deleteNV($id){
		$this->db->where('MaNV', $id);
		$this->db->delete('b_nv');
		redirect(base_url('Mycontroller/dashboard'),'refresh');
	}

	public function EditNV($id){
		$this->db->where('MaNV', $id);
		return $this->db->get('b_nv');
	}
	public function UpdateNV($id, $data){

		
		$object = array('TenNV'=> $data['tennv'],
						'Luong'=> $data['luong'],
						'DiaChi'=>$data['quequan'],
						'SDT'=> $data['sdt']

						);

		$this->db->where('MaNV', $id);
		$this->db->update('b_nv', $object);
		redirect(base_url('Mycontroller/dashboard'),'refresh');
	}

	//////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////END DASHBOARD/////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
	public function HienThiBinhLuan0(){
		$this->db->where('KichHoat', '0');
		return $this -> db -> get('b_cmt');
	}

	public function HienThiBinhLuan1(){
		$this->db->where('KichHoat', '1');
		return $this -> db -> get('b_cmt');
	}


	public function KichHoatBinhLuan($id){
		$object = array('KichHoat' => '1');
		$this->db->where('id', $id);
		$this->db->update('b_cmt', $object);
		redirect(base_url('Mycontroller/Notifications'),'refresh');
	}

	public function BoKichHoatBinhLuan($id){
		$object = array('KichHoat' => '0');
		$this->db->where('id', $id);
		$this->db->update('b_cmt', $object);
		redirect(base_url('Mycontroller/Notifications'),'refresh');
	}

	public function deleteBinhLuan($id){
		$this->db->where('id', $id);
		$this->db->delete('b_cmt');
		redirect(base_url('Mycontroller/Notifications'),'refresh');
	}
	//////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////END NOTIFICATIONS/////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////
	public function HienThiUSer($id){
		return $this -> db -> get('b_admin');
	}
}

/* End of file mymodel.php */
/* Location: ./application/models/mymodel.php */