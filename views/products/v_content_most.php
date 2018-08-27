<!-- Content Products -->
<div id="show_san_pham" class="col-md-9 product1">
<?php
echo "";
if(count($san_pham_theo_ma_loai_san_phams)>0)
{
?>
	<div class='single-para'><h5>Sản phẩm mới</h5></div>
	<div id="hien_thi_ds_san_pham" class="bottom-product">
		<?php
			foreach($san_pham_theo_ma_loai_san_phams as $sp_theo_mlsps)
			{
				include("v_list.php");
			}
		?>
		<div class="clearfix"> </div>
	</div>

	<div class="clearfix"></div>
	
	<?php if($pages>1){ ?>
	<nav class="in"><?php echo $lst ?></nav>
	<?php } ?>
<!-- 		<ul class="pagination">
	<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
	<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
	<li><a href="#">2 <span class="sr-only"></span></a></li>
	<li><a href="#">3 <span class="sr-only"></span></a></li>
	<li><a href="#">4 <span class="sr-only"></span></a></li>
	<li><a href="#">5 <span class="sr-only"></span></a></li>
	<li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
</ul> -->
	
<?php
}
else
{
	echo '<div class="single-para"><h4>Sản phẩm bán chạy đang cập nhật</h4></div>';
}
?>
</div>
<!-- END Content Products -->

