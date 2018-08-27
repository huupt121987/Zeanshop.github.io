<?php
include_once("admin/models/database.php");
class M_san_pham extends database
{
	public function Doc_san_pham()
	{
		$sql = "SELECT * FROM san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function Doc_san_pham_theo_ma_loai_san_pham($ma_loai_san_pham,$vt=-1,$limit=-1)
	{
		$sql = "SELECT * FROM san_pham WHERE ma_loai_san_pham=?";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_loai_san_pham));
	}

	public function Doc_san_pham_chi_tiet($ma_san_pham)
	{
		$sql = "SELECT lsp.ten_loai_san_pham,sp.* FROM san_pham sp INNER JOIN loai_san_pham lsp ON sp.ma_loai_san_pham = lsp.ma_loai_san_pham WHERE sp.ma_san_pham=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_san_pham));
	}

	public function Doc_san_pham_chi_tiet_theo_ma_loai_san_pham($ma_loai_san_pham,$ma_san_pham,$vt=-1,$limit=-1)
	{
		$sql = "SELECT * FROM san_pham WHERE ma_loai_san_pham=? AND ma_san_pham!=?";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_loai_san_pham,$ma_san_pham));
	}

	function Doc_san_pham_theo_gia_tri_tim($gtTim)
	{
		$sql="SELECT * FROM san_pham WHERE ten_san_pham like'%$gtTim%'";
		$this->setQuery($sql);
		return $this->loadAllRows();		
	}

	public function Lay_san_pham_cho_gio_hang($chuoi)
	{
		$query="SELECT * FROM san_pham WHERE ma_san_pham in($chuoi)";
		$this->setQuery($query);
		return $this->loadAllRows();
	}
	
	public function Doc_san_pham_moi_home()
	{
		$sql = "SELECT * FROM san_pham WHERE san_pham_moi = 1 ORDER BY ma_san_pham LIMIT 0,8";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function Doc_san_pham_moi($vt=-1,$limit=-1)
	{
		$sql = "SELECT sp.*, lsp.ten_loai_san_pham FROM san_pham sp INNER JOIN loai_san_pham lsp ON sp.ma_loai_san_pham = lsp.ma_loai_san_pham WHERE san_pham_moi = 1 ORDER BY ma_san_pham";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function Doc_san_pham_ban_chay_home()
	{
		$sql = "SELECT * FROM san_pham sp INNER JOIN chi_tiet_hoa_don cthd ON sp.ma_san_pham = cthd.ma_san_pham ORDER BY cthd.so_luong DESC LIMIT 0,8";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function Doc_san_pham_ban_chay($vt=-1,$limit=-1)
	{
		$sql = "SELECT sp.*, lsp.ten_loai_san_pham, cthd.so_luong FROM san_pham sp INNER JOIN loai_san_pham lsp ON sp.ma_loai_san_pham = lsp.ma_loai_san_pham INNER JOIN chi_tiet_hoa_don cthd ON sp.ma_san_pham = cthd.ma_san_pham ORDER BY cthd.so_luong DESC";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
}
?>