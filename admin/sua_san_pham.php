<?php
	include("controllers/c_san_pham.php");
	$san_pham = new C_san_pham();
	$san_pham->sua_san_pham();
	print_r($san_pham);
?>