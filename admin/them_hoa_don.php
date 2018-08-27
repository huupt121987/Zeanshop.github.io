<?php
	ini_set("display_errors",1);
	include("controllers/c_hoa_don.php");
	$hoa_don = new C_hoa_don();
	$hoa_don->them_hoa_don();
?>