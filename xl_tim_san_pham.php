<?php
	$gtTim = $_POST["gtTim"];
	include("models/m_san_pham.php");
	$m_san_pham = new M_san_pham();
	$san_phams = $m_san_pham->Doc_san_pham_theo_gia_tri_tim($gtTim);
?>


<!-- Hiển thị kết quả -->
<?php
if(count($san_phams)==0)
{
	echo '<div class="hienthi_timkiem" style="margin:0.3em 0.4em 0;">Tên sản phẩm không phù hợp</div>';
}
else if($gtTim!="")
{
?>
	<div class="hienthi_timkiem">
	<?php foreach($san_phams as $sps){ ?>
		<a href="single.php?ma_san_pham=<?php echo $sps->ma_san_pham ?>"><?php echo $sps->ten_san_pham ?></a>
	<?php } ?>
	</div>
<?php
}
?>