<?php
	ini_set("display_errors",1);
	include("controllers/c_nguoi_dung.php");
	$c_nguoi_dung = new C_nguoi_dung();
	$c_nguoi_dung->dang_cap_nhat();
?>