<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shopping_cart extends Layout
{

    function index()
    {
        // $this->load->model("shopping_cart_model");
        $query = $this->db->get('b_dmsp');
        $data["product"] = $query->result();
        $this->load->view("shopping_cart", $data);
    }

    function add()
    {
        $this->load->library("cart");
        $data = array(
            "id"  => $_POST["id"],
            "name"  => $_POST["name"],
            "price"  => $_POST["price"],
            "qty"  => $_POST["qty"]
        );
        // var_dump($data);
        $this->cart->insert($data);
        echo $this->view();
    }

    function load()
    {
        echo $this->view();
    }

    function remove()
    {
        $this->load->library("cart");
        $row_id = $_POST["row_id"];
        $data = array(
            'rowid'  => $row_id,
            'qty'  => 0
        );
        $this->cart->update($data);
        echo $this->view();
    }

    function clear()
    {
        $this->load->library("cart");
        $this->cart->destroy();
        echo $this->view();
    }

    function view()
    {
        $this->load->library("cart");
        // var_dump($this->cart->contents());
        $output = '';
        $output .= '
  <h3>Giỏ hàng</h3><br />
  <div class="table-responsive">
   <div align="right">
    <button type="button" id="clear_cart" class="btn-b btn-warning">Xóa giỏ hàng</button>
   </div>
   <br />
   <table class="table table-bordered">
    <tr>
     <th width="40%">Tên</th>
     <th width="15%">Số lượng</th>
     <th width="15%">Đơn giá</th>
     <th width="15%">Tổng</th>
     <th width="15%">Hành động</th>
    </tr>

  ';
        $count = 0;
        foreach ($this->cart->contents() as $items) {
            $count++;
            $output .= '
   <tr> 
    <td>' . $items["name"] . '</td>
    <td>' . $items["qty"] . '</td>
    <td>' . number_format($items["price"]) . '</td>
    <td>' . number_format($items["subtotal"]) . '</td>
    <td><button type="button" name="remove" class="btn-b btn-danger btn-xs remove_inventory" id="' . $items["rowid"] . '">Xóa</button></td>
   </tr>
   ';
        }
        $output .= '
   <tr>
    <td colspan="4" align="right">Tổng cộng</td>
    <td>' . number_format($this->cart->total()) . '</td>
   </tr>
  </table>

  </div>
  ';

        if ($count == 0) {
            $output = '<h3 align="center">Giỏ hàng trống</h3>';
        }
        return $output;
    }
}
