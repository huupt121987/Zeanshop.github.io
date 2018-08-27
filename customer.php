<?php
include("controllers/c_customer.php");
$c_customer = new C_customer;
$c_customer->Xem_trang_thong_tin_khach_hang();

if(isset($_GET['buy_cart'])) 
{
    $key=$_GET['buy_cart'];
    if($key=='yes')
    {
        $c_customer->Mua_hang();
    }
}
?>