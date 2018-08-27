<?php
	ini_set("display_errors",1);
	include("controllers/c_khach_hang.php");
	$khach_hang = new C_khach_hang();
	$khach_hang->them_khach_hang();
?>