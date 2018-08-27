<?php
@session_start();
$_SESSION["ma_loai_san_pham"]=$_GET["ma_loai_san_pham"];
header('Location: ../../products.php');
?>