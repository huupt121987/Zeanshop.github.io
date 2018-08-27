<?php
include_once("admin/models/database.php");
class M_bai_viet extends database
{
	public function Doc_bai_viet()
	{
		$sql = "SELECT * FROM bai_viet";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet)
	{
		$sql = "SELECT * FROM bai_viet WHERE ma_bai_viet=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_bai_viet));
	}
}
?>