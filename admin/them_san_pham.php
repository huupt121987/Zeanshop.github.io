<?php
	ini_set("display_errors",1);
	include("controllers/c_san_pham.php");
	$san_pham = new C_san_pham();
	$san_pham->them_san_pham();
?>