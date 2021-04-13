<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Layout {

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
		$id_dm = $this->input->get('id_dm');
		$this->db->where('id_dm', $id_dm);
		$query = $this->db->get('b_dmsp');
		$data['product_list'] = $query->result();

		$query_dm = $this->db->get_where('b_dm', array('id_dm' => $id_dm));
		$data['category'] = $query_dm->result_array();

		$this->_data['main_content'] = $this->load->view('product/index', $data, true);
		$this->render();

	}

	public function detail($id='SP002')	
	{	

		$this->db->where('MaSp', $id);
		$query = $this->db->get('b_dmsp');
		$this->db->where('KichHoat', '1');
		$query1 = $this->db->get('b_cmt');
		$data['sp'] = $query->result_array();
		$data['cmt'] = $query1->result_array();
		// $this->load->view('layout/index');
		$this->_data['main_content'] = $this->load->view('product/detail', $data, true);
		// $this->load->view('layout/index', $this->_data);
		$this->render();


	}
}
