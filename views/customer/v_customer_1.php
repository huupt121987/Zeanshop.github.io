<h2>Thông Tin Tài Khoản</h2>
<form action="" method="post">
	<p>
		<span>Họ tên</span>
		<input type="text" name="ho_ten_cap_nhat" id="ho_ten_cap_nhat" value="<?php echo $khach_hang->ten_khach_hang ?>" placeholder="">
		<span class="err"><?php echo isset($err_ten_khach_hang)?$err_ten_khach_hang:"" ?></span>
	</p>
	<p>
		<span>Phái</span>
		<input type="radio" name="phai_cap_nhat" id="phai_cap_nhat_1" value="Nam" <?php echo $khach_hang->phai==1?"checked":"" ?> placeholder=""><label for="phai_cap_nhat_1">Nam</label>
		<input type="radio" name="phai_cap_nhat" id="phai_cap_nhat_2" value="Nữ" <?php echo $khach_hang->phai==0?"checked":"" ?> placeholder=""><label for="phai_cap_nhat_2">Nữ</label>
	</p>

	<p>
		<span>Ngày sinh</span>
		<input type="text" name="ngay_sinh_cap_nhat" id="ngay_sinh_cap_nhat" value="<?php echo date('d/m/Y',strtotime($khach_hang->ngay_sinh)) ?>" placeholder="">
		<span class="err"><?php echo isset($err_ngay_sinh)?$err_ngay_sinh:"" ?></span>
	</p>

	<p>
		<span>Địa chỉ</span>
		<input type="text" name="dia_chi_cap_nhat" id="dia_chi_cap_nhat" value="<?php echo $khach_hang->dia_chi ?>" placeholder="">
		<span class="err"><?php echo isset($err_dia_chi)?$err_dia_chi:"" ?></span>
	</p>	

	<p>
		<span>Điện thoại</span>
		<input type="text" name="sdt_cap_nhat" id="sdt_cap_nhat" value="<?php echo $khach_hang->dien_thoai ?>" placeholder="">
		<span class="err"><?php echo isset($err_dien_thoai)?$err_dien_thoai:"" ?></span>
	</p>

	<p>
		<span>Email</span>
		<input type="text" name="email_cap_nhat" id="email_cap_nhat" value="<?php echo $khach_hang->email ?>" placeholder="">
		<span class="err"><?php echo isset($err_email)?$err_email:"" ?></span>
	</p>

	<p>
		<button class="btn_customer" type="submit" name="btn_cap_nhat">Cập nhật</button>
		<span class="<?php echo isset($err_cap_nhat)?'err':'acp' ?>">
			<?php echo isset($err_cap_nhat)?$err_cap_nhat:(isset($acp_cap_nhat)?$acp_cap_nhat:"") ?>
		</span>
	</p>

</form>	