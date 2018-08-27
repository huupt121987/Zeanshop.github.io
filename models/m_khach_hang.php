<?php
include_once("admin/models/database.php");
class M_khach_hang extends database
{
	public function Doc_khach_hang()
	{
		$sql = "SELECT * FROM khach_hang";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang)
	{
		$sql = "SELECT * FROM khach_hang WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_khach_hang));
	}

	public function Doc_khach_hang_dang_nhap($user,$pass)
	{
		$sql = "SELECT * FROM khach_hang WHERE email=? and password=?";
		$this->setQuery($sql);
		return $this->loadRow(array($user,md5($pass)));
	}

	public function Them_khach_hang($ma_khach_hang, $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $password)
	{
		$sql="INSERT INTO khach_hang VALUES(?,?,?,?,?,?,?,?)";
		$this->setQuery($sql);
		return $this->execute(array($ma_khach_hang, $ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, md5($password)));
	}

	public function Sua_khach_hang($ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email, $ma_khach_hang)
	{
		  $sql="UPDATE khach_hang SET ten_khach_hang=?,phai=?,ngay_sinh=?,dia_chi=?, dien_thoai=?,email=? WHERE ma_khach_hang=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ten_khach_hang, $phai, $ngay_sinh, $dia_chi, $dien_thoai,$email,$ma_khach_hang));
	}

	public function Sua_mat_khau_khach_hang($password,$ma_khach_hang)
	{
		$sql = "UPDATE khach_hang SET password=? WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		return $this->execute(array(md5($password),$ma_khach_hang));
	}
}
?>