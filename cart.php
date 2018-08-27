<?php
include("controllers/c_gio_hang.php");
$c_gio_hang = new C_gio_hang();

// Cập nhật giỏ hàng
if(isset($_POST["btn_cap_nhat_cart"]))
{
	$giohang=$c_gio_hang->layGioHang();
	//Xóa mặt hàng trong giỏ hàng
    foreach($giohang as $key=>$value)
    {
        if(isset($_POST["xoa_cart_".$key]))
        {
            $c_gio_hang->xoaMatHang($key,$_POST["xoa_cart_".$key]);
        }
    } 
    //cập nhật lại giỏ hàng
    $giohang=$c_gio_hang->layGioHang();
    if($giohang)
    {
        foreach($giohang as $key=>$value)
        {
            $soluong_moi=$_POST["sl_".$key];
            if($soluong_moi!=$value)
            {                        
                $c_gio_hang->capNhatGioHang($key,$soluong_moi,$_POST["dongia_".$key]);
            }
        }
    }		
	
}

// Xóa giỏ hàng
if(isset($_POST["btn_xoa_cart"]))
{
	$c_gio_hang->xoaGioHang();
}

// Mua hàng
if(isset($_POST["btn_mua_cart"]))
{
	if(!isset($_SESSION["ten_khach_hang"]))
	{
		echo "<script>alert('Bạn cần đăng nhập để mua hàng')</script>";
	}
	else
	{
		header("Location: xac_nhan_mua_hang.php?buy_cart=yes");
	}
}

$c_gio_hang->xem_gio_hang();
?>