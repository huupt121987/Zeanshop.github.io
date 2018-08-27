<meta charset="utf-8">
<?php  
	include("controllers/c_nguoi_dung.php");
	$nguoi_dung = new C_nguoi_dung();
	$nguoi_dung->xoa_nguoi_dung();
?>