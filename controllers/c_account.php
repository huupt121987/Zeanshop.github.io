<?php
@session_start();



if(isset($_POST["btn_dang_nhap"]))
{
	$user = $_POST["email_dang_nhap"];
	$pass = $_POST["pass_dang_nhap"];
	Account::luu_dang_nhap($user,$pass);
}
if(isset($_POST["btn_dang_ky"]))
{
	// ma_khach_hang, ten_khach_hang, phai, ngay_sinh, dia_chi, dien_thoai, email, password
	$ma_khach_hang = NULL;
	$ten_khach_hang = $_POST["ho_ten_dang_ky"];
	$phai = $_POST["phai"]=="Nam"?1:0;

	$ngay_sinh = $_POST["ngay_sinh_dang_ky"];
	$arr_ngay_sinh=explode("/",$ngay_sinh);krsort($arr_ngay_sinh);
	$ngay_sinh = implode("-",$arr_ngay_sinh);

	$dien_thoai = $_POST["sdt_dang_ky"];
	$dia_chi = $_POST["dia_chi_dang_ky"];
	$email = $_POST["email_dang_ky"];
	$password = $_POST["pass_dang_ky"];
	Account::luu_dang_ky($ma_khach_hang, $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $password);
}
Class Account
{
	static function luu_dang_nhap($user,$pass)
	{
		// khach_hang
		include("models/m_khach_hang.php");
		$m_khach_hang = new M_khach_hang();
		$khach_hang_dang_nhap = $m_khach_hang->Doc_khach_hang_dang_nhap($user,$pass);
		$_SESSION["ten_khach_hang"]=$khach_hang_dang_nhap->ten_khach_hang;
		if(!isset($_SESSION["ten_khach_hang"]))
		{
			// session_destroy();
			// $_SESSION['thong_bao_loi']="Tài khoản hoặc mật khẩu không chính xác";
			header("Location: .");		
		}
		$_SESSION["ma_khach_hang"]=$khach_hang_dang_nhap->ma_khach_hang;
		// $_SESSION['ngay']=date("d/m/Y h:i:s");
	}
	static function luu_dang_ky($ma_khach_hang, $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $password)
	{
		// khach_hang
		include("models/m_khach_hang.php");
		$m_khach_hang = new M_khach_hang();
		$khac_hang_dang_ky = $m_khach_hang->Them_khach_hang($ma_khach_hang, $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $password);
		$khac_hang_dang_ky = $m_khach_hang->Doc_khach_hang_dang_nhap($email, $password);
		$_SESSION["ten_khach_hang"]=$khac_hang_dang_ky->ten_khach_hang;
		if(!isset($_SESSION["ten_khach_hang"]))
		{
			// session_destroy();
			// $_SESSION['thong_bao_loi']="Tài khoản hoặc mật khẩu không chính xác";
			header("Location: .");		
		}
		$_SESSION["ma_khach_hang"]=$khac_hang_dang_ky->ma_khach_hang;
		// $_SESSION['ngay']=date("d/m/Y h:i:s");
	}

}	

?>
