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
			$this->db->insert_batch('b_cthdb', $data_chi_tiet);
		}

		$this->load->library('email');
		$this->email->from('tuvantran.it@gmail.com', 'TheFace');
		$this->email->to('tuvantran.it@gmail.com');
		$this->email->subject('Bạn nhận dược đơn hàng mới');
		$body = "
            <html>
            <head>
            <title>HTML email</title>
            </head>
            <body>
        ";
		$body .= "<b>Thông tin đặt hàng</b>";

		$body .= "
			<p>Họ tên: " . $ho . $ten . "</p>
			<p>Điện thoại: " . $sdt . "</p>
			<p>Email: " . $email . "</p>
			<p>Tổng tiền: " . number_format($this->cart->total()) . "</p>
		";
		$body .= "
            <a href='" . base_url('mycontroller/tables') . "'>Xem chi tiết tại đây</a>
        ";
		$body .= "
            </body>
            </html>
        ";
		$this->email->message($body);
		$this->email->send();

		//Gui cho khach hang
		$this->email->clear();
		$this->email->from('tuvantran.it@gmail.com', 'TheFace');
		$this->email->to($email);
		$this->email->subject('TheFace - Đơn hàng số ' . $insert_id);
		$body = "
            <html>
            <head>
            <title>HTML email</title>
			<style>
                    table, th, td {
                    border: 1px solid black;
                    }
                    .button {
                        background-color: #4CAF50; /* Green */
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        margin: 4px 2px;
                        cursor: pointer;
                    }
                    
                    .button1 {font-size: 10px;}
                </style>
            </head>
            <body>
        ";
		$body .= "<p>Cảm ơn bạn đã quan tâm đến sản phẩm của TheFace. Đơn đặt bàn của bạn đang được chúng tôi xử lý.</p>";
		$body .= "<b>Thông tin đặt hàng</b>";
		$body .= "<table>";
		$body .= "
            <tr>
                <th>Tên sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        ";
		foreach ($this->cart->contents() as $item) {
			$body .= "
                <tr>
                    <td>" . $item['name'] . "</td>
                    <td>" . number_format($item['price']) . "</td>
                    <td>" . $item['qty'] . "</td>
                    <td>" . number_format($item['subtotal']) . "</td>
                </tr>
            ";
		}
		$body .= "</table>";
		$body .= "<b>Tổng tiền: " . number_format($this->cart->total()) . " </b>";
		$body .= "
            </body>
            </html>
        ";
		$this->email->message($body);
		$this->email->send();

		$this->cart->destroy();
		echo "
        <script>
            window.alert('Đặt hàng thành công!');
        </script>
    ";
		redirect(base_url(), 'refresh');
	}
}
