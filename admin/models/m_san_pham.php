<?php
ini_set("display_errors",1);
require_once('database.php');

class M_san_pham extends database
{
	
	public function doc_san_pham($vt=-1,$limit=-1)
	{
		
		$sql = "SELECT * FROM san_pham ORDER BY ma_san_pham";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
//------------------------------------------------------------------------------------------
	public function doc_loai_san_pham()
	{
		$sql = "SELECT * FROM loai_san_pham ORDER BY ma_loai_san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	// ma_san_pham, ten_san_pham, ma_loai_san_pham, mo_ta_tom_tat, mo_ta_chi_tiet, don_gia, dvt, hinh, san_pham_moi, so_luot_xem, ngay_tao
	//ten_loai_san_pham
//------------------------------------------------------------------------------------------
	public function doc_san_pham_va_loai_san_pham($vt=-1,$limit=-1)
	{	
		$sql="SELECT ma_san_pham, 
					 ten_san_pham,
					 san_pham.ma_loai_san_pham,
					 loai_san_pham.ten_loai_san_pham,
					 mo_ta_tom_tat, 
					 mo_ta_chi_tiet, 
					 don_gia, 
					 dvt, 
					 hinh, 
					 san_pham_moi,
					 so_luot_xem,
					 ngay_tao
				FROM san_pham 
		  INNER JOIN loai_san_pham 
				  ON san_pham.ma_loai_san_pham = loai_san_pham.ma_loai_san_pham
			ORDER BY san_pham.ma_san_pham";

		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

//------------------------------------------------------------------------------------------
	function doc_san_pham_theo_tim_kiem($tim_kiem)
	{
		$sql="SELECT sp.*,ten_loai_san_pham FROM san_pham sp INNER JOIN loai_san_pham l ON sp.ma_loai_san_pham=l.ma_loai_san_pham WHERE ma_san_pham LIKE '%$tim_kiem%' OR ten_san_pham LIKE '%$tim_kiem%'";
		$this->setQuery($sql);
		return $this->loadAllRows();		
	}

//------------------------------------------------------------------------------------------
	public function doc_san_pham_theo_ma_san_pham($ma_san_pham)
	{
		$sql = "SELECT * FROM san_pham WHERE ma_san_pham=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_san_pham));
	}

// $ma_san_pham, $ten_san_pham, $ma_loai_san_pham, $mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $dvt, $hinh, $san_pham_moi, $so_luot_xem, $ngay_tao
//------------------------------------------------------------------------------------------
	public function them_san_pham($ma_san_pham, 
								  $ten_san_pham, 
								  $ma_loai_san_pham, 
								  $mo_ta_tom_tat, 
								  $mo_ta_chi_tiet, 
								  $don_gia, 
								  $dvt, 
								  $hinh, 
								  $san_pham_moi, 
								  $so_luot_xem, 
								  $ngay_tao)
	{
		$sql="INSERT INTO san_pham VALUES(?,?,?,?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array($ma_san_pham, 
									$ten_san_pham, 
									$ma_loai_san_pham, 
									$mo_ta_tom_tat, 
									$mo_ta_chi_tiet, 
									$don_gia,
									$dvt, 
									$hinh, 
									$san_pham_moi, 
									$so_luot_xem, 
									$ngay_tao));
	}

//------------------------------------------------------------------------------------------
	public function sua_san_pham($ten_san_pham, 
								 $ma_loai_san_pham, 
								 $mo_ta_tom_tat, 
								 $mo_ta_chi_tiet, 
								 $don_gia, 
								 $dvt, 
								 $hinh, 
								 $san_pham_moi, 
								 $so_luot_xem, 
								 $ngay_tao,
								 $ma_san_pham)
	{
		$sql="UPDATE san_pham SET ten_san_pham=?,
								  ma_loai_san_pham=?,
								  mo_ta_tom_tat=?,
								  mo_ta_chi_tiet=?,
								  don_gia=?,
								  dvt=?,
								  hinh=?,
								  san_pham_moi=?,
								  so_luot_xem=?,
								  ngay_tao=?
							WHERE ma_san_pham=?";
		$this->setQuery($sql);
		return $this->execute(array($ten_san_pham, 
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
	}

//------------------------------------------------------------------------------------------
	public function xoa_san_pham($ma_san_pham)
	{
		$sql="DELETE FROM san_pham WHERE ma_san_pham=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_san_pham));	
	}

}

?>



