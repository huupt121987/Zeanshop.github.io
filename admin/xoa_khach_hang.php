<meta charset="utf-8">
<?php  
	include("controllers/c_khach_hang.php");
	$khach_hang = new C_khach_hang();
	$khach_hang->xoa_khach_hang();
?>