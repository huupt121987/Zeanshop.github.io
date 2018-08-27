<?php
include("controllers/c_home.php");
$c_home = new C_home();
if(isset($_GET["func"]))
{
	$c_home->Thoat_dang_nhap();	
}
$c_home->Xem_trang_chu();
?>