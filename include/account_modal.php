<!-- Login Modal -->
<div id="modal_login" class="modal">
	<form class="acc modal-content animate" action="#" method="post">
		<div class="imgcontainer">
			<span onclick="document.getElementById('modal_login').style.display='none'" class="close" title="Đóng">&times;</span>
			<img src="public/layout/images/avatar.png" alt="" class="avatar">
		</div>

		<div class="container" style="width: 100%;">
			<p>
				<label><b>Tài khoản</b></label>
				<input type="text" placeholder="Nhập email" id="email_dang_nhap" name="email_dang_nhap">
			</p>

			<p>
				<label><b>Mật khẩu</b></label>
				<input type="password" placeholder="Nhập mật khẩu" id="pass_dang_nhap" name="pass_dang_nhap">
			</p>

			<p><button class="logbtn" type="submit" name="btn_dang_nhap" onclick="return Kiem_tra_dang_nhap()">Đăng nhập</button></p>

			<p>
				<input type="checkbox" checked="checked">Ghi nhớ đăng nhập
				<span><a href="#" >Đăng ký</a></span>
			</p>
		</div>

		<div class="container" style="background-color:#F5F5F5; width: 100%;">
			<button type="button" onclick="document.getElementById('modal_login').style.display='none'" class="cancelbtn">Hủy</button>
			<span class="psw"><a href="#">Quên mật khẩu?</a></span>
		</div>
	</form>
</div>

<!-- Register Modal -->
<div id="modal_register" class="modal">
	<form class="acc modal-content animate" action="" method="post">
		<div class="imgcontainer">
			<span onclick="document.getElementById('modal_register').style.display='none'" class="close" title="Đóng">&times;</span>
			<img src="public/layout/images/avatar.png" alt="" class="avatar">
		</div>

		<div class="container" style="width: 100%;">
			<p>
				<label><b>Họ tên</b></label>
				<input type="text" placeholder="Nhập họ tên" name="ho_ten_dang_ky" id="ho_ten_dang_ky">
			</p>

			<p>
				<label><b>Phái</b></label>
				<input type="radio" name="phai" id="c1" value="Nam" checked><label for="c1">Nam</label>
				<input type="radio" name="phai" id="c2" value="Nữ"><label for="c2">Nữ</label>
			</p>

			<p>
				<label><b>Ngày sinh</b></label>
				<input type="text" placeholder="Chọn ngày sinh" name="ngay_sinh_dang_ky" id="ngay_sinh_dang_ky" style="cursor: pointer;">
			</p>

			<p>
				<label><b>Điện thoại</b></label>
				<input type="text" placeholder="Nhập số điện thoại" name="sdt_dang_ky" id="sdt_dang_ky">
			</p>
			
			<p>
				<label><b>Địa chỉ</b></label>
				<input type="text" placeholder="Nhập địa chỉ" name="dia_chi_dang_ky" id="dia_chi_dang_ky">
			</p>

			<p>
				<label><b>Tài khoản</b></label>
				<input type="text" placeholder="Nhập email" name="email_dang_ky" id="email_dang_ky">
			</p>

			<p>
				<label><b>Mật khẩu</b></label>
				<input type="password" placeholder="Nhập mật khẩu" name="pass_dang_ky" id="pass_dang_ky">
			</p>

			<p><button class="logbtn" type="submit" name="btn_dang_ky" onclick="return Kiem_tra_dang_ky()">Đăng ký</button></p>

			<!-- <p><input type="checkbox" checked="checked">Ghi nhớ đăng nhập</p> -->
		</div>

		<div class="container" style="background-color:#F5F5F5; width: 100%;">
			<button type="button" onclick="document.getElementById('modal_register').style.display='none'" class="cancelbtn">Hủy</button>
			<span><a href="#">Đăng nhập</a></span>
		</div>
	</form>
</div>



<!-- script -->
<script type="text/javascript">

</script>