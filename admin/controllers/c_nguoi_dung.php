<?php
	@session_start();
	include_once("models/m_nguoi_dung.php");
	include_once("models/m_khach_hang.php");
	include_once("models/m_san_pham.php");
	include_once("models/m_hoa_don.php");


	class C_nguoi_dung
	{
		function Hien_thi_dang_nhap()
		{
			if(isset($_POST["btn_dang_nhap"]))
			{
				$ten_dang_nhap=$_POST["ten_dang_nhap"];
				$mat_khau=$_POST["mat_khau"];
				$this->luu_dang_nhap($ten_dang_nhap,$mat_khau);
			}
			if(isset($_SESSION['ho_ten']))
			{
				$m_khach_hang=new M_khach_hang();
				$khach_hang=$m_khach_hang->doc_khach_hang();
				$tongKh=count($khach_hang);

				$m_san_pham=new M_san_pham();
				$san_pham=$m_san_pham->doc_san_pham();
				$tongsp=count($san_pham);

				$m_hoa_don=new M_hoa_don();
				$hoa_don=$m_hoa_don->doc_hoa_don();
				$tonghd=count($hoa_don);

				$m_nguoi_dung=new M_nguoi_dung();
				$nguoi_dung=$m_nguoi_dung->doc_nguoi_dung();
				$tongnd = count($nguoi_dung);
				$title = "Quản Trị";
				include("include/layout_admin.php");
			}
			else
			{
				$_SESSION['error']="Thông tin không hợp lệ";
				header("location:dang_nhap.php");
			}
		}

//------------------------------------------------------------------------------------------
		function thoat_dang_nhap()
		{
			session_destroy();
			header("location:index.php");
		}

//------------------------------------------------------------------------------------------
		function luu_dang_nhap($ten_dang_nhap,$mat_khau)
		{
			$m_nguoi_dung = new m_nguoi_dung();
			$nguoi_dung = $m_nguoi_dung->doc_nguoi_dung_theo_ten_dang_nhap_mat_khau($ten_dang_nhap,$mat_khau);
			
			$_SESSION['ho_ten'] =  $nguoi_dung->ho_ten;
		}

//------------------------------------------------------------------------------------------
		public function doc_danh_sach_nguoi_dung() 
		{
			// Models
			$m_nguoi_dung = new M_nguoi_dung();
			$nguoi_dung = $m_nguoi_dung->doc_nguoi_dung_va_loai_nguoi_dung();

			// Pagination
			include("Pager.php");
			$p=new pager();
			$limit=15;
			$count=count($nguoi_dung);
			$vt = $p->findStart($limit);
			$pages = $p->findPages($count,$limit);
			$curpage = $_GET["page"];
			$lst = $p->pageList($curpage,$pages);
			$nguoi_dung = $m_nguoi_dung->doc_nguoi_dung_va_loai_nguoi_dung($vt,$limit);

			// Views
			$title = " Danh Sách Nhân Viên";
			$view = "views/nguoi_dung/v_danh_sach_nguoi_dung.php";
			include("include/layout_admin.php");

		}
// $ma_nguoi_dung, $ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $ngay_dang_ky, $ngay_dang_nhap_cuoi, $active
//ten_loai_nguoi_dung
//------------------------------------------------------------------------------------------
		public function them_nguoi_dung()
		{
			$m_nguoi_dung = new M_nguoi_dung();
			$loai_nguoi_dung = $m_nguoi_dung->doc_loai_nguoi_dung();

			if(isset($_POST["btn_cap_nhat"]))
			{
				$ma_loai_nguoi_dung = $_POST["ma_loai_nguoi_dung"];
				$ho_ten =$_POST["ho_ten"];
				$ten_dang_nhap = $_POST["ten_dang_nhap"];
				$mat_khau = $_POST["password"];
				$email = $_POST["email"];
				$ngay_dang_ky= date("Y-m-d");
				$ngay_dang_nhap_cuoi=NULL;
				$active=$_POST["active"];
				$nguoi_dungs = $m_nguoi_dung->them_nguoi_dung($ma_loai_nguoi_dung, 
															  $ho_ten, 
															  $ten_dang_nhap, 
															  $mat_khau, 
															  $email,
															  $ngay_dang_ky, 
															  $ngay_dang_nhap_cuoi, 
															  $active);
				if($nguoi_dungs)
				{
					echo "<script>window.location='danh_sach_nguoi_dung.php'</script>";			
				}
				else // Thêm có lỗi
				{
					echo "<script>window.location='them_nguoi_dung.php'</script>";
				}										
			}	
			// Views
			$title = "Thêm Nhân Viên";
			$view = "views/nguoi_dung/v_them_nguoi_dung.php";
			include("include/layout_admin.php");
		}
//------------------------------------------------------------------------------------------
		public function sua_nguoi_dung()
		{
			// Models
			//load data 1 row
			$m_nguoi_dung = new M_nguoi_dung();
			$ma_nguoi_dung = $_GET["ma_nguoi_dung"];
			$nguoi_dung = $m_nguoi_dung->doc_nguoi_dung_theo_ma_nguoi_dung($ma_nguoi_dung);
			$loai_nguoi_dung = $m_nguoi_dung->doc_loai_nguoi_dung();
			//Submit Data
			if(isset($_POST["btn_cap_nhat"]))
			{
				$ma_loai_nguoi_dung = $_POST["ma_loai_nguoi_dung"];
				$ho_ten =$_POST["ho_ten"];
				$ten_dang_nhap = $_POST["ten_dang_nhap"];
				$mat_khau = $_POST["password"];
				$email = $_POST["email"];
				$ngay_dang_ky= date("Y-m-d");
				$ngay_dang_nhap_cuoi=NULL;
				$active=$_POST["active"];
				$nguoi_dungs = $m_nguoi_dung->sua_nguoi_dung($ma_nguoi_dung,
															  $ma_loai_nguoi_dung, 
															  $ho_ten, 
															  $ten_dang_nhap, 
															  $mat_khau, 
															  $email,
															  $ngay_dang_ky, 
															  $ngay_dang_nhap_cuoi, 
															  $active);
				if($nguoi_dungs)
				{
					echo "<script>window.location='danh_sach_nguoi_dung.php'</script>";			
				}
				else // Thêm có lỗi
				{
					echo "<script>window.location='them_nguoi_dung.php'</script>";
				}					
						
			}
			// Views
			$title = "Sửa Nhân Viên";
			$view = "views/nguoi_dung/v_sua_nguoi_dung.php";
			include("include/layout_admin.php");
		}

//------------------------------------------------------------------------------------------
		public function xoa_nguoi_dung()
		{
			// Models
			$ma_nguoi_dung=$_GET["ma_nguoi_dung"];
			$m_nguoi_dung = new M_nguoi_dung();
			$nguoi_dung = $m_nguoi_dung->xoa_nguoi_dung($ma_nguoi_dung);
			if($nguoi_dung)
			{
				echo "<script>window.location='danh_sach_nguoi_dung.php'</script>";
			}
			else
			{
				echo "<script>alert('Xóa không thành công')</script>";
			}
		}	
//------------------------------------------------------------------------------------------
		public function dang_cap_nhat()
		{
			// Views
			$title = " Đang Cập Nhật";
			$view = "views/nguoi_dung/v_cap_nhat.php";
			include("include/layout_admin.php");

		}

//------------------------------------------------------------------------------------------
		public function lich()
		{
			// Views
			$title = " Lịch";
			$view = "views/nguoi_dung/v_lich.php";
			include("include/layout_admin.php");

		}	
//------------------------------------------------------------------------------------------
		public function ban_do()
		{
			// Views
			$title = " Bản Đồ";
			$view = "views/nguoi_dung/v_ban_do.php";
			include("include/layout_admin.php");

		}

	}
		
?>