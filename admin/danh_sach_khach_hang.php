<?php
	include("controllers/c_khach_hang.php");
	$khach_hang = new C_khach_hang();
	$khach_hang->doc_danh_sach_khach_hang();
?>