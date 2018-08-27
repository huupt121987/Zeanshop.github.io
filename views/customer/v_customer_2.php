<h2>Đổi Mật Khẩu</h2>
<form action="" method="post">
	<p>
		<span>Mật khẩu hiện tại</span>
		<input type="password" name="mat_khau_hien_tai" value="" placeholder="">
		<span class="err"><?php echo isset($err_mat_khau_hien_tai)?$err_mat_khau_hien_tai:"" ?></span>
	</p>
	<p>
		<span>Mật khẩu mới</span>
		<input type="password" name="mat_khau_moi" value="" placeholder="">
		<span class="err"><?php echo isset($err_mat_khau_moi)?$err_mat_khau_moi:"" ?></span>
	</p>
	<p>
		<span>Nhập lại mật khẩu</span>
		<input type="password" name="mat_khau_nhap_lai" value="" placeholder="">
		<span class="err"><?php echo isset($err_mat_khau_nhap_lai)?$err_mat_khau_nhap_lai:"" ?></span>
	</p>

	<p>
		<button class="btn_customer" type="submit" name="btn_doi_mat_khau" onclick="">Đổi mật khẩu</button>
		<span class="<?php echo isset($err_cap_nhat)?'err':'acp' ?>">
			<?php echo isset($err_cap_nhat)?$err_cap_nhat:(isset($acp_cap_nhat)?$acp_cap_nhat:"") ?>
		</span>
	</p>

</form>	