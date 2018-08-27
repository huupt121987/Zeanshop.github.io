<?php
include_once("admin/models/database.php");
class M_loai_mat_hang extends database
{
	public function Doc_loai_mat_hang()
	{
		$sql = "SELECT * FROM loai_mat_hang";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function Doc_loai_mat_hang_theo_uu_tien()
	{
		$sql = "SELECT * FROM loai_mat_hang WHERE uu_tien=1";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	public function Doc_loai_mat_hang_theo_ma_loai_mat_hang($ma_loai_mat_hang)
	{
		$sql = "SELECT * FROM loai_mat_hang WHERE ma_loai_mat_hang=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_loai_mat_hang));
	}
}
?>