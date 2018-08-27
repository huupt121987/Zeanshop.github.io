<?php
include_once("admin/models/database.php");
class M_hoa_don extends database
{
	public function Doc_hoa_don()
	{
		$sql = "SELECT * FROM hoa_don";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function Doc_hoa_don_theo_ma_khach_hang($ma_khach_hang)
	{
		$sql = "SELECT * FROM hoa_don WHERE ma_khach_hang=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_khach_hang));
	}

	public function Doc_chi_tiet_hoa_don_va_san_pham_theo_ma_hoa_don($ma_hoa_don)
	{
		$sql = "SELECT * FROM chi_tiet_hoa_don cthd INNER JOIN san_pham sp ON cthd.ma_san_pham = sp.ma_san_pham WHERE ma_hoa_don=? ORDER BY cthd.ma_san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_hoa_don));
	}

	public function Them_hoa_don($ma_hoa_don, $ma_khach_hang, $ngay_hoa_don, $tong_tien, $hinh_thuc_thanh_toan,$ghi_chu)
	{
		$query = "INSERT INTO hoa_don(ma_hoa_don, ma_khach_hang, ngay_hoa_don, tong_tien, hinh_thuc_thanh_toan,ghi_chu) VALUES(?,?,?,?,?,?)";
		$this->setQuery($query);
		$result=$this->execute(array($ma_hoa_don, $ma_khach_hang, $ngay_hoa_don, $tong_tien, $hinh_thuc_thanh_toan,$ghi_chu));
		if($result) 
			return $this->getLastId();
		else
			return false;
	}

    function Them_chi_tiet_hoa_don($ma_hoa_don, $ma_san_pham, $so_luong, $don_gia)
    {
        $query = "INSERT INTO chi_tiet_hoa_don(ma_hoa_don, ma_san_pham, so_luong, don_gia) VALUES(?,?,?,?)";
        $this->setQuery($query);
        $this->execute(array($ma_hoa_don, $ma_san_pham, $so_luong, $don_gia));
    }
}
?>