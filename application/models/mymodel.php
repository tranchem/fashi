<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function HienThiLoaiDm(){

		return $this -> db -> get('b_loaidm');
	}

}

/* End of file mymodel.php */
/* Location: ./application/models/mymodel.php */