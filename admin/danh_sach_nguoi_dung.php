<?php
	include("controllers/c_nguoi_dung.php");
	$nguoi_dung = new C_nguoi_dung();
	$nguoi_dung->doc_danh_sach_nguoi_dung();
?>