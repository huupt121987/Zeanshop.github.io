<?php
	ini_set("display_errors",1);
	include("models/m_hoa_don.php");
	class C_hoa_don
{
	
	public function doc_danh_sach_hoa_don() 
	{
		// Models
		$m_hoa_don = new M_hoa_don();
		$hoa_don = $m_hoa_don->doc_hoa_don_va_chi_tiet_hoa_don();

		// Pagination
		include("Pager.php");
		$p=new pager();
		$limit=15;
		$count=count($hoa_don);
		$vt = $p->findStart($limit);
		$pages = $p->findPages($count,$limit);
		$curpage = $_GET["page"];
		$lst = $p->pageList($curpage,$pages);
		$hoa_dons = $m_hoa_don->doc_hoa_don_va_chi_tiet_hoa_don($vt,$limit);

		// Views
		$title = " Danh Sách Hóa Đơn";
		$view = "views/hoa_don/v_danh_sach_hoa_don.php";
		include("include/layout_admin.php");

	}
//------------------------------------------------------------------------------------------
	public function them_hoa_don()
	{
		// Models
		$m_hoa_don = new M_hoa_don();		
		if(isset($_POST["btn_cap_nhat"]))
		{
			$ten_hoa_don = $_POST["ten_hoa_don"];
			$phai = $_POST["phai"];
			$ngay_sinh = date("Y-m-d",strtotime($_POST["ngay_sinh"]));
			$dia_chi = $_POST["dia_chi"];
			$dien_thoai = $_POST["dien_thoai"];
			$email =$_POST["email"];
			$password =$_POST["password"];
			$hoa_don = $m_hoa_don->them_hoa_don($ten_hoa_don, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $password);
			 if($hoa_don)
			 {
				// // Click Lưu Chuyển Trang Danh Sách
				echo "<script>window.location='danh_sach_hoa_don.php'</script>";
			}
			else // Thêm có lỗi
			{
				echo "<script>window.location='them_hoa_don.php'</script>";
			}
		}

		// Views
		$title = "Thêm Hóa Đơn";
		$view = "views/hoa_don/v_them_hoa_don.php";
		include("include/layout_admin.php");
	}

//------------------------------------------------------------------------------------------
	// public function sua_hoa_don()
	// {
	// 	// Models

	// 	//load data 1 row
	// 	$m_hoa_don = new M_hoa_don();
	// 	$ma_hoa_don = $_GET["ma_hoa_don"];
	// 	$hoa_don = $m_hoa_don->doc_hoa_don_theo_ma_hoa_don($ma_hoa_don);
	// 	//Submit Data
	// 	if(isset($_POST["btn_cap_nhat"]))
	// 	{
	// 		$ten_hoa_don = $_POST["ten_hoa_don"];
	// 		$phai=$_POST["phai"];
	// 		$ngay_sinh = date("Y-m-d",strtotime($_POST["ngay_sinh"]));
	// 		$dia_chi=$_POST["dia_chi"];
	// 		$dien_thoai=$_POST["dien_thoai"];
	// 		$email=$_POST["email"];
	// 		$password=$_POST["password"];
	// 		$hoa_dons = $m_hoa_don->sua_hoa_don($ma_hoa_don,$ten_hoa_don,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email,$password);

	// 		if($hoa_dons)
	// 		{
	// 			// Thông báo
	// 			echo "<script>window.location='danh_sach_hoa_don.php'</script>";
	// 		}
	// 		else // Thêm có lỗi
	// 		{
	// 			echo "<script>alert('Cập nhật có lỗi')</script>";
	// 		}
					
	// 	}
	// 	// Views
	// 	$title = "Sửa Khách Hàng";
	// 	$view = "views/hoa_don/v_sua_hoa_don.php";
	// 	include("include/layout_admin.php");
	// }

//------------------------------------------------------------------------------------------
	public function xoa_hoa_don()
	{
		// Models
		$ma_hoa_don=$_GET["ma_hoa_don"];
		$m_hoa_don = new M_hoa_don();
		$hoa_don = $m_hoa_don->xoa_hoa_don($ma_hoa_don);
		if($hoa_don)
		{
			echo "<script>window.location='danh_sach_hoa_don.php'</script>";
		}
		else
		{
			echo "<script>alert('Xóa không thành công')</script>";
		}
	}

	
	
}

?>