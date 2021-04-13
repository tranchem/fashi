<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<!-- ADD Modal SP-->
<div class="modal fade" id="exampleModalSP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
   <form action="ThemSP" method="post" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
      </div>
      <div class="modal-body">
        <input type="text" placeholder="Mã sản phẩm" class="form-control" name="input_masp" required="">
        <input type="text" placeholder="Tên sản phẩm" class="form-control"  name="input_tensp" required="">
        <input type="text" placeholder="Đơn giá" class="form-control" name="input_dongia" required="">
        <input type="text" placeholder="Đơn vị tính" class="form-control"  name="input_donvitinh" required="">
        <input type="text" placeholder="Số lượng" class="form-control" name="input_soluong" required="">
        <div>
          <textarea id="" cols="30" rows="10"class="form-control" placeholder="Mô tả" name="input_mota"></textarea>
        </div>
        <label for="input_img">Chọn ảnh</label>
        <input type="file" name="input_img">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Hủy</button>
        <input type="submit" class="btn btn-primary" value="Lưu">
      </div>
    </form>
  </div>
</div>
</div>

<!--  -->

<!-- Modal NCC-->
<div class="modal fade" id="exampleModalNCC" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form action="ThemNCC" method="POST">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm Nhà cung cấp</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" placeholder="Mã nhà cung cấp" class="form-control" name="input_mancc" required="">
        <input type="text" placeholder="Tên nhà cung cấp" class="form-control"name="input_tenncc" required="">
        <input type="text" placeholder="Chi nhánh"class="form-control"name="input_chinhanh" required="">
        <input type="text" placeholder="Địa chỉ"class="form-control"name="input_diachi" required="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
        <input type="submit" class="btn btn-primary" value="Lưu">
      </div>
    </form>
  </div>
</div>
</div>

<!--  -->

<!-- Modal nv-->
<div class="modal fade" id="exampleModalNV" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form action="ThemNV" method="POST" enctype="multipart/form-data" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm nhân viên</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="text" placeholder="Mã nhân viên" class="form-control" name="input_manv" required="">
        <input type="text" placeholder="Tên nhân viên" class="form-control"name="input_tennv" required="">
        <input type="text" placeholder="Lương"class="form-control"name="input_luong" required="">
        <input type="text" placeholder="Quê quán"class="form-control"name="input_quequan" required="">
         <input type="text" placeholder="Số điện thoại"class="form-control"name="input_sdt" required="">
        <div class="modal-body"><input type="file" name="input_img"></div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
        <input type="submit" class="btn btn-primary" value="Lưu">
      </div>
    </form>
  </div>
</div>
</div>

<!--  -->
</body>
</html>