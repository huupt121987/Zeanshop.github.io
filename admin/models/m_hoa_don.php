<?php
ini_set("display_errors",1);
require_once('database.php');

class M_hoa_don extends database
{
	
	public function doc_hoa_don($vt=-1,$limit=-1)
	{
		
		$sql = "SELECT * FROM hoa_don ORDER BY ma_hoa_don";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

//------------------------------------------------------------------------------------------
	function doc_hoa_don_theo_tim_kiem($tim_kiem)
	{
		$sql="SELECT * FROM hoa_don WHERE ma_hoa_don LIKE '%$tim_kiem%'";
		$this->setQuery($sql);
		return $this->loadAllRows();		
	}

//------------------------------------------------------------------------------------------
	function doc_hoa_don_va_chi_tiet_hoa_don($vt=-1,$limit=-1)
	{
		$sql="SELECT * FROM hoa_don 
			  INNER JOIN chi_tiet_hoa_don
			  ON hoa_don.ma_hoa_don=chi_tiet_hoa_don.ma_hoa_don
			  ORDER BY chi_tiet_hoa_don.ma_hoa_don";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();	
	}

//------------------------------------------------------------------------------------------
	public function doc_hoa_don_theo_ma_hoa_don($ma_hoa_don)
	{
		$sql = "SELECT * FROM hoa_don WHERE ma_hoa_don=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_hoa_don));
	}

//------------------------------------------------------------------------------------------
	public function them_hoa_don($ten_hoa_don, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $password)
	{
		$sql="INSERT INTO hoa_don VALUES(?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array(NULL,$ten_hoa_don, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $password));
	}

//------------------------------------------------------------------------------------------
	// public function sua_hoa_don($ma_hoa_don, $ten_hoa_don, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $password)
	// {
	// 	$sql="UPDATE hoa_don SET ten_hoa_don=?,phai=?,ngay_sinh=?,dia_chi=?,dien_thoai=?,email=?,password=? WHERE ma_hoa_don=?";
	// 	$this->setQuery($sql);
	// 	return $this->execute(array($ten_hoa_don, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $password, $ma_hoa_don));
	// }

//------------------------------------------------------------------------------------------
	public function xoa_hoa_don($ma_hoa_don)
	{
		$sql="DELETE hoa_don.*, chi_tiet_hoa_don.* 
			  FROM hoa_don, chi_tiet_hoa_don 
			  WHERE hoa_don.ma_hoa_don = chi_tiet_hoa_don.ma_hoa_don 
			  AND hoa_don.ma_hoa_don=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_hoa_don));	
	}
}

?>