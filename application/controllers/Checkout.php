<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends Layout
{

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
		$this->_data['main_content'] = $this->load->view('checkout/index', [], true);
		// $this->load->view('layout/index', $this->_data);
		$this->render();
	}

	public function cart()
	{
		// $this->load->view('layout/index');
		$this->_data['main_content'] = $this->load->view('checkout/cart', [], true);
		// $this->load->view('layout/index', $this->_data);
		$this->render();
	}

	public function add()
	{
		$ten = $this->input->post('ten');
		$ho = $this->input->post('ho');
		$email = $this->input->post('email');
		$sdt = $this->input->post('sdt');
		$dia_chi = $this->input->post('dia_chi');


		$data = array(
			'ten' => $ten,
			'ho' => $ho,
			'email' => $email,
			'sdt' => $sdt,
			'dia_chi' => $dia_chi,
			'TongTien' => $this->cart->total(),
			'Ngay' => date("Y/m/d")
		);
		// var_dump($data);
		// var_dump($this->cart->contents());
		$this->db->insert('b_hdb', $data);
		$insert_id = $this->db->insert_id();

		$data_chi_tiet = array();
		if ($this->cart->contents()) {
			foreach ($this->cart->contents() as $item) {
				$data_chi_tiet[] = array(
					'SoHDB' => $insert_id,
					'MaSP' => $item['id'],
					'SoLuong' => $item['qty'],
					'DonGia' => $item['price'],
					'ThanhTien' => $item['qty'] * $item['price'],
				);
			}
		}

		$this->db->insert_batch('b_cthdb', $data_chi_tiet);
		$this->cart->destroy();
		echo "
        <script>
            window.alert('Đặt hàng thành công!');
        </script>
    ";
		redirect(base_url(), 'refresh');
	}
}
