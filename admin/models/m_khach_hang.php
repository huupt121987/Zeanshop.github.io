<?php
ini_set("display_errors",1);
require_once('database.php');

class M_khach_hang extends database
{
	
	public function doc_khach_hang($vt=-1,$limit=-1)
	{
		
		$sql = "SELECT * FROM khach_hang ORDER BY ma_khach_hang";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

//------------------------------------------------------------------------------------------
	function doc_khach_hang_theo_tim_kiem($tim_kiem)
	{
		$sql="SELECT * FROM khach_hang 
			  WHERE ten_khach_hang 
			  LIKE '%$tim_kiem%' 
			  OR email 
			  LIKE '%$tim_kiem%'";
		$this->setQuery($sql);
		return $this->loadAllRows();		
	}

//------------------------------------------------------------------------------------------
	public function doc_khach_hang_theo_ma_khach_hang($ma_khach_hang)
	{
		$sql = "SELECT * FROM khach_hang WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_khach_hang));
	}

//------------------------------------------------------------------------------------------
	public function them_khach_hang($ten_khach_hang, 
									$phai, 
									$ngay_sinh, 
									$dia_chi, 
									$dien_thoai, 
									$email, 
									$password)
	{
		$sql="INSERT INTO khach_hang VALUES(?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array(NULL,
								    $ten_khach_hang, 
								    $phai, 
								    $ngay_sinh, 
								    $dia_chi, 
								    $dien_thoai, 
								    $email, 
								    $password));
	}

//------------------------------------------------------------------------------------------
	public function sua_khach_hang($ma_khach_hang, 
							       $ten_khach_hang, 
							       $phai, 
							       $ngay_sinh, 
							       $dia_chi, 
							       $dien_thoai, 
							       $email, 
							       $password)
	{
		$sql="UPDATE khach_hang SET ten_khach_hang=?,
									phai=?,
									ngay_sinh=?,
									dia_chi=?,
									dien_thoai=?,
									email=?,
									password=? 
							  WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		return $this->execute(array($ten_khach_hang, 
									$phai, $ngay_sinh, 
									$dia_chi, 
									$dien_thoai, 
									$email, 
									$password, 
									$ma_khach_hang));
	}

//------------------------------------------------------------------------------------------
	public function xoa_khach_hang($ma_khach_hang)
	{
		$sql="DELETE FROM khach_hang WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_khach_hang));	
	}

}

?>