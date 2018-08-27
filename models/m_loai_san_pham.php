<?php
include_once("admin/models/database.php");
class M_loai_san_pham extends database
{
	public function Doc_loai_san_pham()
	{
		$sql = "SELECT * FROM loai_san_pham";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function Doc_loai_san_pham_theo_ma_loai_mat_hang($ma_loai_mat_hang)
	{
		$sql = "SELECT * FROM loai_san_pham WHERE ma_loai_mat_hang=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_loai_mat_hang));
	}

	public function Doc_loai_san_pham_theo_ma_loai_san_pham($ma_loai_san_pham)
	{
		$sql = "SELECT * FROM loai_san_pham WHERE ma_loai_san_pham=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai_san_pham));
	}
}
?>