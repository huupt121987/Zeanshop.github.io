<?php 
	ini_set("display_errors",1);
	include("controllers/c_nguoi_dung.php");
	$nguoi_dung = new C_nguoi_dung();
	$nguoi_dung->Hien_thi_nguoi_dung();
?>