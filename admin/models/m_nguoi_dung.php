<?php
	require_once("database.php");
	class M_nguoi_dung extends database
	{	
		function doc_nguoi_dung()
		{
			$sql="SELECT * FROM nguoi_dung ORDER BY ma_nguoi_dung" ;
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}

//------------------------------------------------------------------------------------------
		function doc_loai_nguoi_dung()
		{
			$sql="SELECT * FROM loai_nguoi_dung ORDER BY ma_loai_nguoi_dung";
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}

//------------------------------------------------------------------------------------------
		function doc_nguoi_dung_va_loai_nguoi_dung($vt=-1,$limit=-1)
		{
			$sql="SELECT ma_nguoi_dung, 
						 nguoi_dung.ma_loai_nguoi_dung,
						 loai_nguoi_dung.ten_loai_nguoi_dung, 
						 ho_ten, ten_dang_nhap, 
						 mat_khau, 
						 email, 
						 ngay_dang_ky, 
						 ngay_dang_nhap_cuoi, 
						 active
					FROM nguoi_dung 
			  INNER JOIN loai_nguoi_dung 
					  ON nguoi_dung.ma_loai_nguoi_dung = loai_nguoi_dung.ma_loai_nguoi_dung";
			if($vt>=0 && $limit>0)
			{
				$sql.=" limit $vt,$limit";
			}
			$this->setQuery($sql);
			return $this->loadAllRows();	
		}
//------------------------------------------------------------------------------------------
		function doc_nguoi_dung_theo_ten_dang_nhap_mat_khau($ten_dang_nhap,$mat_khau)
		{
			$sql="SELECT * FROM nguoi_dung WHERE ten_dang_nhap=? AND mat_khau=?";
			$this->setQuery($sql);
			return $this->loadRow(array($ten_dang_nhap,md5($mat_khau)));	
		}

//------------------------------------------------------------------------------------------	
		function doc_nguoi_dung_theo_tim_kiem($tim_kiem)
		{
			$sql="SELECT nd.*,l.ten_loai_nguoi_dung 
			FROM nguoi_dung nd 
			INNER JOIN loai_nguoi_dung l 
			ON nd.ma_loai_nguoi_dung=l.ma_loai_nguoi_dung 
			WHERE ho_ten 
			LIKE '%$tim_kiem%' 
			OR ten_loai_nguoi_dung 
			LIKE '%$tim_kiem%'
			OR email 
			LIKE '%$tim_kiem%'";
			$this->setQuery($sql);
			return $this->loadAllRows();		
		}

//------------------------------------------------------------------------------------------
	public function doc_nguoi_dung_theo_ma_nguoi_dung($ma_nguoi_dung)
	{
		$sql = "SELECT * FROM nguoi_dung WHERE ma_nguoi_dung=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_nguoi_dung));
	}

//------------------------------------------------------------------------------------------	
		public function them_nguoi_dung($ma_loai_nguoi_dung, 
									    $ho_ten, 
									    $ten_dang_nhap, 
									    $mat_khau, 
									    $email,
									    $ngay_dang_ky, 
									    $ngay_dang_nhap_cuoi, 
									    $active)
		{
		$sql="INSERT INTO nguoi_dung VALUES(?,?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array("NULL",
									$ma_loai_nguoi_dung, 
									$ho_ten, 
									$ten_dang_nhap, 
									md5($mat_khau), 
									$email,
									$ngay_dang_ky, 
									$ngay_dang_nhap_cuoi, 
									$active));
		}

//------------------------------------------------------------------------------------------
		public function sua_nguoi_dung($ma_nguoi_dung,
									   $ma_loai_nguoi_dung, 
									   $ho_ten, 
									   $ten_dang_nhap, 
									   $mat_khau, 
									   $email,
									   $ngay_dang_ky, 
									   $ngay_dang_nhap_cuoi, 
									   $active)
		{
		$sql="UPDATE nguoi_dung SET ma_loai_nguoi_dung=?, 
								    ho_ten=?, 
								    ten_dang_nhap=?, 
								    mat_khau=?, 
								    email=?,
								    ngay_dang_ky=?, 
							   	    ngay_dang_nhap_cuoi=?, 
								    active=?
							WHERE ma_nguoi_dung=?";
		$this->setQuery($sql);
		return $this->execute(array($ma_loai_nguoi_dung, 
								    $ho_ten, 
								    $ten_dang_nhap, 
								    $mat_khau, 
								    $email,
								    $ngay_dang_ky, 
								    $ngay_dang_nhap_cuoi, 
								    $active,
								    $ma_nguoi_dung));
		}

//------------------------------------------------------------------------------------------
		public function xoa_nguoi_dung($ma_nguoi_dung)
		{
			$sql="DELETE FROM nguoi_dung WHERE ma_nguoi_dung=?";
			$this->setQuery($sql);
			return $this->execute(array($ma_nguoi_dung));	
		}

//------------------------------------------------------------------------------------------


	}
?>
<!--$ma_nguoi_dung, $ma_loai_nguoi_dung, $ho_ten, $ten_dang_nhap, $mat_khau, $email, $ngay_dang_ky, $ngay_dang_nhap_cuoi, $active -->
