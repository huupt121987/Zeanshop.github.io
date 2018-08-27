<?php
@session_start();
include("c_account.php");
class C_customer
{
	public function Xem_trang_thong_tin_khach_hang()
	{
		// Models
			// loai_mat_hang
			include("models/m_loai_mat_hang.php");
			$m_loai_mat_hang = new M_loai_mat_hang();
			$loai_mat_hangs = $m_loai_mat_hang->Doc_loai_mat_hang();
			// loai_san_pham
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham = new M_loai_san_pham();

			// khach_hang
			include("models/m_khach_hang.php");
			$m_khach_hang = new M_khach_hang(); 
			
			if(isset($_SESSION["ma_khach_hang"]))
			{
				$ma_khach_hang = $_SESSION["ma_khach_hang"];
				$khach_hang = $m_khach_hang->Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang);
			}
			else{
				session_destroy();
				header("location: .");
			}

			// hoa_don
			include("models/m_hoa_don.php");
			$m_hoa_don = new M_hoa_don();
			$hoa_dons = $m_hoa_don->Doc_hoa_don_theo_ma_khach_hang($ma_khach_hang);

		// Kiểm tra cập nhật
		$kiem_tra_cap_nhat = true;
		if(isset($_POST["btn_cap_nhat"]))
		{
			// Lấy giá trị
			$ma_khach_hang = $_SESSION["ma_khach_hang"];
			$ten_khach_hang = $_POST["ho_ten_cap_nhat"];
			$phai = $_POST["phai_cap_nhat"]=="Nam"?1:0;

			$G_ngay_sinh = $_POST["ngay_sinh_cap_nhat"];
			$arr_ngay_sinh=explode("/",$G_ngay_sinh);krsort($arr_ngay_sinh);
			$ngay_sinh = implode("-",$arr_ngay_sinh);

			$dien_thoai = $_POST["sdt_cap_nhat"];
			$dia_chi = $_POST["dia_chi_cap_nhat"];
			$email = $_POST["email_cap_nhat"];

			// Kiểm tra rỗng
			if($ten_khach_hang == ""){$err_ten_khach_hang = "*Tên khách hàng không được rỗng";$kiem_tra_cap_nhat=false;}
			if($ngay_sinh == ""){$err_ngay_sinh = "*Ngày sinh không được rỗng";$kiem_tra_cap_nhat=false;}
			if($dia_chi == ""){$err_dia_chi = "*Địa chỉ không được rỗng";$kiem_tra_cap_nhat=false;}
			if($dien_thoai == ""){$err_dien_thoai = "*Số điện thoại không được rỗng";$kiem_tra_cap_nhat=false;}
			elseif(!is_numeric($dien_thoai)){$err_dien_thoai = "*Số điện thoại không được là chữ";$kiem_tra_cap_nhat=false;}
			if($email == ""){$err_email = "*Email không được rỗng";$kiem_tra_cap_nhat=false;}
			if($kiem_tra_cap_nhat==false){$err_cap_nhat = "*Cập nhật thất bại";}
			
			if($kiem_tra_cap_nhat){
				$_SESSION["acp_cap_nhat"]="Cập nhật thành công";
			}
			if($kiem_tra_cap_nhat)
			{
			$m_khach_hang->Sua_khach_hang($ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $ma_khach_hang);

			// Refresh trang để nhận kết quả cập nhật
			$_SESSION["ten_khach_hang"]=$ten_khach_hang;
			header("Location: customer.php?cv=1");					
			}
		}

		if(isset($_POST["btn_doi_mat_khau"]))
		{
			// Lấy giá trị
			$ma_khach_hang = $_SESSION["ma_khach_hang"];
			$mat_khau_hien_tai = $_POST["mat_khau_hien_tai"];
			$mat_khau_moi = $_POST["mat_khau_moi"];
			$mat_khau_nhap_lai = $_POST["mat_khau_nhap_lai"];

			// Kiểm tra rỗng
			if($mat_khau_hien_tai == ""){$err_mat_khau_hien_tai = "*Mật khẩu hiện tại không được rỗng";$kiem_tra_cap_nhat=false;}
			elseif(md5($mat_khau_hien_tai)!=$m_khach_hang->Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang)->password){$err_mat_khau_hien_tai = "*Mật khẩu hiện tại không đúng"; $kiem_tra_cap_nhat=false;}
			elseif($mat_khau_moi == ""){$err_mat_khau_moi = "*Mật khẩu mới không được rỗng";$kiem_tra_cap_nhat=false;}
			elseif($mat_khau_nhap_lai == ""){$err_mat_khau_nhap_lai = "*Mật khẩu nhập lại không được rỗng";$kiem_tra_cap_nhat=false;}
			if($kiem_tra_cap_nhat==false){$err_cap_nhat = "*Cập nhật thất bại";}

			// Kiểm tra trùng khớp mật khẩu
			if(md5($mat_khau_hien_tai)==$m_khach_hang->Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang)->password && $kiem_tra_cap_nhat)
			{
				if($mat_khau_moi == $mat_khau_nhap_lai)
				{
					$m_khach_hang->Sua_mat_khau_khach_hang($mat_khau_moi,$ma_khach_hang);
					$acp_cap_nhat = "Cập nhật thành công";
				}
				else
				{
					$err_mat_khau_nhap_lai = "*Mật khẩu nhập lại không đúng";
					$err_cap_nhat = "*Cập nhật thất bại";
					$kiem_tra_cap_nhat=false;
				}
			}
		}

		// Adds
		$tieu_de = "Thông Tin Khách Hàng";
		$view = "views/customer/v_customer.php";
		if(isset($_GET["cv"]))
		{
			if($_GET["cv"]==3)
			{
				$view_customer="v_customer_3.php";
			}
			elseif($_GET["cv"]==2)
			{
				$view_customer="v_customer_2.php";
			}
			else{
				$view_customer="v_customer_1.php";
				if(isset($_SESSION["acp_cap_nhat"]))
				{
					$acp_cap_nhat = $_SESSION["acp_cap_nhat"];
					unset($_SESSION["acp_cap_nhat"]);
				}
			}
		}
		else{
			header("location: .");
		}


		// Views
		include("include/layout.php");
	}

	public function Mua_hang()
	{
		// Thêm hóa đơn
		$ma_hoa_don = NULL;
		$ma_khach_hang=$_SESSION["ma_khach_hang"];
		$ngay_hoa_don = date("Y-m-d");
		$tong_tien = $_SESSION["tong_tien"];
		$hinh_thuc_thanh_toan = "Tiền mặt";
		$ghi_chu="";
		include("models/m_hoa_don.php");
		$m_hoa_don = new M_hoa_don();
		$hoa_don=$m_hoa_don->Them_hoa_don($ma_hoa_don, $ma_khach_hang, $ngay_hoa_don, $tong_tien, $hinh_thuc_thanh_toan,$ghi_chu);
		if($hoa_don>0)
		{
			$gio_hang=$_SESSION['gioHang'];print_r($_SESSION['gioHang']);print_r($_SESSION["truyen_don_gia"]);

			foreach($gio_hang as $key=>$value)
			{
				echo $key;
				foreach ($_SESSION["truyen_don_gia"] as $key_1 => $value_1) {
					echo $key_1;
					if($key==$key_1)
					{
						echo "<br>".$hoa_don."<br>";
						echo $key."<br>";
						echo $value."<br>";
						echo $value_1."<br>";
						$m_hoa_don->Them_chi_tiet_hoa_don($hoa_don,$key,$value,$value_1);	
					}
				}
			}
            unset($_SESSION['gioHang']);
            unset($_SESSION['thanh_tien']);
            unset($_SESSION['so_luong']);
		}
		header("Location: customer.php?cv=3");
	}
}
?>