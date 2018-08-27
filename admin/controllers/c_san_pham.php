<?php
	ini_set("display_errors",1);
	include("models/m_san_pham.php");
	class C_san_pham
{
	
	public function doc_danh_sach_san_pham() 
	{
		// Models
		$m_san_pham = new M_san_pham();
		$san_pham = $m_san_pham->doc_san_pham_va_loai_san_pham();

		// Pagination
		include("Pager.php");
		$p=new pager();
		$limit=15;
		$count=count($san_pham);
		$vt = $p->findStart($limit);
		$pages = $p->findPages($count,$limit);
		$curpage = $_GET["page"];
		$lst = $p->pageList($curpage,$pages);
		$san_pham = $m_san_pham->doc_san_pham_va_loai_san_pham($vt,$limit);

		// Views
		$title = " Danh Sách Sản Phẩm";
		$view = "views/san_pham/v_danh_sach_san_pham.php";
		include("include/layout_admin.php");

	}
// $ma_san_pham, $ten_san_pham, $ma_loai_san_pham, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $dvt, $hinh, $san_pham_moi, $so_luot_xem, $ngay_tao
//------------------------------------------------------------------------------------------
	public function them_san_pham()
	{
		$m_san_pham = new M_san_pham();
		$loai_san_pham = $m_san_pham->doc_loai_san_pham();

		if(isset($_POST["btn_cap_nhat"]))
		{
			$ma_san_pham = $_POST["ma_san_pham"];
			$ten_san_pham = $_POST["ten_san_pham"];
			$ma_loai_san_pham =$_POST["ma_loai_san_pham"];
			$mo_ta_tom_tat = $_POST["mo_ta_tom_tat"];
			$mo_ta_chi_tiet = $_POST["mo_ta_chi_tiet"];
			$don_gia = $_POST["don_gia"];
			$dvt="Sản phẩm";
			$hinh=$_FILES["hinh_sp"]["error"]==0?$_FILES["hinh_sp"]["name"]:"";
			$so_luot_xem=1;
			$san_pham_moi=1;
			$ngay_tao = date("Y-m-d");
			$san_phams = $m_san_pham->them_san_pham($ma_san_pham, 
												   $ten_san_pham, 
												   $ma_loai_san_pham, 
												   $mo_ta_tom_tat, 
												   $mo_ta_chi_tiet, 
												   $don_gia, 
												   $dvt, 
												   $hinh, 
												   $san_pham_moi, 
												   $so_luot_xem, 
												   $ngay_tao);
			if($san_phams)
			{
				echo "<script>window.location='danh_sach_san_pham.php'</script>";			
			}
			else // Thêm có lỗi
			{
				echo "<script>window.location='them_san_pham.php'</script>";
			}					
				
		}	
		// Views
		$title = "Thêm Sản Phẩm";
		$view = "views/san_pham/v_them_san_pham.php";
		include("include/layout_admin.php");
	}

//------------------------------------------------------------------------------------------
	public function sua_san_pham()
	{
		// Models
		//load data 1 row
		$m_san_pham = new M_san_pham();
		$ma_san_pham = $_GET["ma_san_pham"];
		$san_pham = $m_san_pham->doc_san_pham_theo_ma_san_pham($ma_san_pham);
		$loai_san_pham = $m_san_pham->doc_loai_san_pham();
		//Submit Data
		if(isset($_POST["btn_cap_nhat"]))
		{
			$ma_san_pham = $_POST["ma_san_pham"];
			$ten_san_pham = $_POST["ten_san_pham"];
			$ma_loai_san_pham =$_POST["ma_loai_san_pham"];
			$mo_ta_tom_tat = $_POST["mo_ta_tom_tat"];
			$mo_ta_chi_tiet = $_POST["mo_ta_chi_tiet"];
			$don_gia = $_POST["don_gia"];
			$dvt="Sản phẩm";
			$hinh=$_FILES["hinh_sp"]["error"]==0?$_FILES["hinh_sp"]["name"]:$san_pham->hinh;
			$so_luot_xem=1;
			$san_pham_moi=1;
			$ngay_tao = date("Y-m-d");

			/*print_r(array($ten_san_pham, 
												  $ma_loai_san_pham, 
												  $mo_ta_tom_tat, 
												  $mo_ta_chi_tiet, 
												  $don_gia, 
												  $dvt, 
												  $hinh, 
												  $san_pham_moi, 
												  $so_luot_xem, 
												  $ngay_tao,
												  $ma_san_pham));
			*/
			
			$san_phams = $m_san_pham->sua_san_pham($ten_san_pham, 
												  $ma_loai_san_pham, 
												  $mo_ta_tom_tat, 
												  $mo_ta_chi_tiet, 
												  $don_gia, 
												  $dvt, 
												  $hinh, 
												  $san_pham_moi, 
												  $so_luot_xem, 
												  $ngay_tao,
												  $ma_san_pham);
			
			if($san_phams)
			{
				if($_FILES["hinh_sp"]["error"]==0)//Upload hinh
				{
					move_uploaded_file($_FILES["hinh_sp"]["tmp_name"],"images/san_pham/$hinh");
				}
				// Click Lưu Chuyển Trang Danh Sách
				echo "<script>window.location='danh_sach_san_pham.php'</script>";
			}
			else // Thêm có lỗi
			{
				echo "<script>alert('Cập nhật có lỗi')</script>";
			}
			
					
		}
		// Views
		$title = "Sửa Sản Phẩm";
		$view = "views/san_pham/v_sua_san_pham.php";
		include("include/layout_admin.php");
	}

//------------------------------------------------------------------------------------------
	public function xoa_san_pham()
	{
		// Models
		$ma_san_pham=$_GET["ma_san_pham"];
		$m_san_pham = new M_san_pham();
		$san_pham = $m_san_pham->xoa_san_pham($ma_san_pham);
		if($san_pham)
		{
			echo "<script>window.location='danh_sach_san_pham.php'</script>";
		}
		else
		{
			echo "<script>alert('Xóa không thành công')</script>";
		}
	}
	
}

?>