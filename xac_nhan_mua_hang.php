<?php
include("controllers/c_customer.php");
$c_customer = new C_customer;

if(isset($_GET['buy_cart'])) 
{
    $key=$_GET['buy_cart'];
    if($key=='yes')
    {
        $c_customer->Mua_hang();
    }
    else
    {
    	header("Location: .");
    }
}
?>