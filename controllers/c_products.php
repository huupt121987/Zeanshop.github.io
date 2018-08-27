<?php
@session_start();
include("c_account.php");
class C_products
{
	public function Xem_trang_san_pham()
	{
		// Models
			// loai_mat_hang
			include("models/m_loai_mat_hang.php");
			$m_loai_mat_hang = new M_loai_mat_hang();
			$loai_mat_hangs = $m_loai_mat_hang->Doc_loai_mat_hang();
			// loai_san_pham
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham = new M_loai_san_pham();
			$loai_san_phams=$m_loai_san_pham->Doc_loai_san_pham();
			// san_pham
			include("models/m_san_pham.php");
			$m_san_pham = new M_san_pham();
			$san_phams = $m_san_pham->Doc_san_pham();

		// GET ma_loai_san_pham
		if(!isset($_GET["ma_loai_san_pham"])){
			$ma_loai_san_pham = $loai_san_phams[0]->ma_loai_san_pham;
			$ten_loai_san_pham = $loai_san_phams[0]->ten_loai_san_pham;
		}
		else{
			$ma_loai_san_pham = $_GET["ma_loai_san_pham"];
			$ten_loai_san_pham = $m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai_san_pham($ma_loai_san_pham)->ten_loai_san_pham;
		}

		$san_pham_theo_ma_loai_san_phams=$m_san_pham->Doc_san_pham_theo_ma_loai_san_pham($ma_loai_san_pham);
		// Phân trang
		include("Pager.php");
		$p=new pager();
		$limit=16;
		$count=count($san_pham_theo_ma_loai_san_phams);
		$vt=$p->findStart($limit);
		$pages=$p->findPages($count,$limit);
		$curpage=$_GET["page"];
		
		$lst=$p->pageList($curpage,$pages);
		$san_pham_theo_ma_loai_san_phams=$m_san_pham->Doc_san_pham_theo_ma_loai_san_pham($ma_loai_san_pham,$vt,$limit);
		// Kết thúc Phân trang


		// Adds
		$tieu_de = "Zean Shop";
		$view = "views/products/v_products.php";
		$content = "v_content_products.php";

		// Views
		include("include/layout.php");
	}

	public function Xem_trang_san_pham_chi_tiet()
	{
		// Models
			// loai_mat_hang
			include("models/m_loai_mat_hang.php");
			$m_loai_mat_hang = new M_loai_mat_hang();
			$loai_mat_hangs = $m_loai_mat_hang->Doc_loai_mat_hang();
			// loai_san_pham
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham = new M_loai_san_pham();
			$loai_san_phams=$m_loai_san_pham->Doc_loai_san_pham();
			// san_pham
			include("models/m_san_pham.php");
			$m_san_pham = new M_san_pham();
			$san_phams = $m_san_pham->Doc_san_pham();

		// GET ma_san_pham
		if(isset($_GET["ma_san_pham"]))
		{
			$ma_san_pham = $_GET["ma_san_pham"];
			$co_san_pham=false;
			foreach ($san_phams as $sps)
			{
				if($sps->ma_san_pham == $ma_san_pham)
				{
					$san_pham_chi_tiet = $m_san_pham->Doc_san_pham_chi_tiet($ma_san_pham);
					$ma_loai_san_pham = $san_pham_chi_tiet->ma_loai_san_pham;
					$ten_loai_san_pham = $san_pham_chi_tiet->ten_loai_san_pham;
					$san_pham_chi_tiet_theo_ma_loai_san_phams = $m_san_pham->Doc_san_pham_chi_tiet_theo_ma_loai_san_pham($ma_loai_san_pham,$ma_san_pham);
					$co_san_pham=true;
					break;
				}				
			}
			if($co_san_pham==false)
			{
				header('Location: .');
			}
		}
		else{
			header('Location: .');
		}


		// Phân trang
		include("Pager.php");
		$p=new pager();
		$limit=8;
		$count=count($san_pham_chi_tiet_theo_ma_loai_san_phams);
		$vt=$p->findStart($limit);
		$pages=$p->findPages($count,$limit);
		$curpage=$_GET["page"];
		
		$lst=$p->pageList($curpage,$pages);
		$san_pham_chi_tiet_theo_ma_loai_san_phams = $m_san_pham->Doc_san_pham_chi_tiet_theo_ma_loai_san_pham($ma_loai_san_pham,$ma_san_pham,$vt,$limit);
		// Kết thúc Phân trang


		// Adds
		$tieu_de = "Zean Shop";
		$view = "views/products/v_products.php";
		$content = "v_content_single.php";

		// Views
		include("include/layout.php");
	}

	public function Xem_trang_san_pham_moi()
	{
		// Models
			// loai_mat_hang
			include("models/m_loai_mat_hang.php");
			$m_loai_mat_hang = new M_loai_mat_hang();
			$loai_mat_hangs = $m_loai_mat_hang->Doc_loai_mat_hang();
			// loai_san_pham
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham = new M_loai_san_pham();
			$loai_san_phams=$m_loai_san_pham->Doc_loai_san_pham();
			// san_pham
			include("models/m_san_pham.php");
			$m_san_pham = new M_san_pham();
			$san_phams = $m_san_pham->Doc_san_pham();

		// GET ma_loai_san_pham từ session
		if($_GET["san_pham_moi"]!=1){
			header("Location: .");
		}

		$san_pham_theo_ma_loai_san_phams=$m_san_pham->Doc_san_pham_moi();
		// Phân trang
		include("Pager.php");
		$p=new pager();
		$limit=16;
		$count=count($san_pham_theo_ma_loai_san_phams);
		$vt=$p->findStart($limit);
		$pages=$p->findPages($count,$limit);
		$curpage=$_GET["page"];
		
		$lst=$p->pageList($curpage,$pages);
		$san_pham_theo_ma_loai_san_phams=$m_san_pham->Doc_san_pham_moi($vt,$limit);
		// Kết thúc Phân trang


		// Adds
		$tieu_de = "Zean Shop";
		$view = "views/products/v_products.php";
		$content = "v_content_new.php";

		// Views
		include("include/layout.php");
	}
	
	public function Xem_trang_san_pham_ban_chay()
	{
		// Models
			// loai_mat_hang
			include("models/m_loai_mat_hang.php");
			$m_loai_mat_hang = new M_loai_mat_hang();
			$loai_mat_hangs = $m_loai_mat_hang->Doc_loai_mat_hang();
			// loai_san_pham
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham = new M_loai_san_pham();
			$loai_san_phams=$m_loai_san_pham->Doc_loai_san_pham();
			// san_pham
			include("models/m_san_pham.php");
			$m_san_pham = new M_san_pham();
			$san_phams = $m_san_pham->Doc_san_pham();

		// GET ma_loai_san_pham từ session
		// if($_GET["san_pham_moi"]!=1){
		// 	header("Location: .");
		// }

		$san_pham_theo_ma_loai_san_phams=$m_san_pham->Doc_san_pham_ban_chay();
		// Phân trang
		include("Pager.php");
		$p=new pager();
		$limit=16;
		$count=count($san_pham_theo_ma_loai_san_phams);
		$vt=$p->findStart($limit);
		$pages=$p->findPages($count,$limit);
		$curpage=$_GET["page"];
		
		$lst=$p->pageList($curpage,$pages);
		$san_pham_theo_ma_loai_san_phams=$m_san_pham->Doc_san_pham_ban_chay($vt,$limit);
		// Kết thúc Phân trang


		// Adds
		$tieu_de = "Zean Shop";
		$view = "views/products/v_products.php";
		$content = "v_content_new.php";

		// Views
		include("include/layout.php");
	}

	public function Xem_trang_san_pham_giam_gia()
	{
		// Models
			// loai_mat_hang
			include("models/m_loai_mat_hang.php");
			$m_loai_mat_hang = new M_loai_mat_hang();
			$loai_mat_hangs = $m_loai_mat_hang->Doc_loai_mat_hang();
			// loai_san_pham
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham = new M_loai_san_pham();
			$loai_san_phams=$m_loai_san_pham->Doc_loai_san_pham();
			// san_pham
			include("models/m_san_pham.php");
			$m_san_pham = new M_san_pham();
			$san_phams = $m_san_pham->Doc_san_pham();

		// GET ma_loai_san_pham từ session
		// if($_GET["san_pham_moi"]!=1){
		// 	header("Location: .");
		// }
		// else{
		// 	$ma_loai_san_pham = $loai_san_phams[0]->ma_loai_san_pham;
		// 	$ten_loai_san_pham = $loai_san_phams[0]->ten_loai_san_pham;
		// }

		// $san_pham_theo_ma_loai_san_phams=$m_san_pham->Doc_san_pham_theo_ma_loai_san_pham($ma_loai_san_pham);
		// Phân trang
		// include("Pager.php");
		// $p=new pager();
		// $limit=16;
		// $count=count($san_pham_theo_ma_loai_san_phams);
		// $vt=$p->findStart($limit);
		// $pages=$p->findPages($count,$limit);
		// $curpage=$_GET["page"];
		
		// $lst=$p->pageList($curpage,$pages);
		// $san_pham_theo_ma_loai_san_phams=$m_san_pham->Doc_san_pham_theo_ma_loai_san_pham($ma_loai_san_pham,$vt,$limit);
		// Kết thúc Phân trang


		// Adds
		$tieu_de = "Zean Shop";
		$view = "views/products/v_products.php";
		$content = "v_content_sale.php";

		// Views
		include("include/layout.php");
	}
}
?>