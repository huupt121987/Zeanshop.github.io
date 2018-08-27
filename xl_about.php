<?php
	$ma_bai_viet = $_POST["ma_bai_viet"];
	include("models/m_bai_viet.php");
	$m_bai_viet = new M_bai_viet();
	$bai_viet_theo_ma_bai_viet = $m_bai_viet->Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet);
?>
<h2><?php echo $bai_viet_theo_ma_bai_viet->tieu_de ?></h2>
<p style="width: 70%"><?php echo $bai_viet_theo_ma_bai_viet->noi_dung ?></p>