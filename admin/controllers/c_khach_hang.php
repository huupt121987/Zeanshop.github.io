<?php

	ini_set("display_errors",1);
	include("models/m_khach_hang.php");
	class C_khach_hang
{
	
	public function doc_danh_sach_khach_hang() 
	{
		// Models
		$m_khach_hang = new M_khach_hang();
		$khach_hang = $m_khach_hang->doc_khach_hang();

		// Pagination
		include("Pager.php");
		$p=new pager();
		$limit=15;
		$count=count($khach_hang);
		$vt = $p->findStart($limit);
		$pages = $p->findPages($count,$limit);
		$curpage = $_GET["page"];
		$lst = $p->pageList($curpage,$pages);
		$khach_hang = $m_khach_hang->doc_khach_hang($vt,$limit);

		// Views
		$title = " Danh Sách Khách Hàng";
		$view = "views/khach_hang/v_danh_sach_khach_hang.php";
		include("include/layout_admin.php");

	}

//------------------------------------------------------------------------------------------
	public function them_khach_hang()
	{
		// Models
		$m_khach_hang = new M_khach_hang();		
		if(isset($_POST["btn_cap_nhat"]))
		{
			$ten_khach_hang = $_POST["ten_khach_hang"];
			$phai = $_POST["phai"];
			$ngay_sinh = date("Y-m-d",strtotime($_POST["ngay_sinh"]));
			$dia_chi = $_POST["dia_chi"];
			$dien_thoai = $_POST["dien_thoai"];
			$email =$_POST["email"];
			$password =$_POST["password"];
			$khach_hang = $m_khach_hang->them_khach_hang($ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $password);
			 if($khach_hang)
			 {
				// // Click Lưu Chuyển Trang Danh Sách
				echo "<script>window.location='danh_sach_khach_hang.php'</script>";
			}
			else // Thêm có lỗi
			{
				echo "<script>window.location='them_khach_hang.php'</script>";
			}
		}

		// Views
		$title = "Thêm Khách Hàng";
		$view = "views/khach_hang/v_them_khach_hang.php";
		include("include/layout_admin.php");
	}

//------------------------------------------------------------------------------------------
	public function sua_khach_hang()
	{
		// Models

		//load data 1 row
		$m_khach_hang = new M_khach_hang();
		$ma_khach_hang = $_GET["ma_khach_hang"];
		$khach_hang = $m_khach_hang->doc_khach_hang_theo_ma_khach_hang($ma_khach_hang);
		//Submit Data
		if(isset($_POST["btn_cap_nhat"]))
		{
			$ten_khach_hang = $_POST["ten_khach_hang"];
			$phai=$_POST["phai"];
			$ngay_sinh = date("Y-m-d",strtotime($_POST["ngay_sinh"]));
			$dia_chi=$_POST["dia_chi"];
			$dien_thoai=$_POST["dien_thoai"];
			$email=$_POST["email"];
			$password=$_POST["password"];
			$khach_hangs = $m_khach_hang->sua_khach_hang($ma_khach_hang,$ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email,$password);

			if($khach_hangs)
			{
				// Thông báo
				echo "<script>window.location='danh_sach_khach_hang.php'</script>";
			}
			else // Thêm có lỗi
			{
				echo "<script>alert('Cập nhật có lỗi')</script>";
			}
					
		}
		// Views
		$title = "Sửa Khách Hàng";
		$view = "views/khach_hang/v_sua_khach_hang.php";
		include("include/layout_admin.php");
	}

//------------------------------------------------------------------------------------------
	public function xoa_khach_hang()
	{
		// Models
		$ma_khach_hang=$_GET["ma_khach_hang"];
		$m_khach_hang = new M_khach_hang();
		$khach_hang = $m_khach_hang->xoa_khach_hang($ma_khach_hang);
		if($khach_hang)
		{
			echo "<script>window.location='danh_sach_khach_hang.php'</script>";
		}
		else
		{
			echo "<script>alert('Xóa không thành công')</script>";
		}
	}
	
}

?>