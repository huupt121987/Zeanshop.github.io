<script src="public/layout/js/lib.js" type="text/javascript"></script>
<?php
@session_start();
// $ma_loai_san_pham = $_SESSION["ma_loai_san_pham"];
$ma_loai_san_pham = $_POST["ma_loai_san_pham"];
$_SESSION["ma_loai_san_pham"] = $ma_loai_san_pham;

// loai_san_pham
include("models/m_loai_san_pham.php");
$m_loai_san_pham = new M_loai_san_pham();
$loai_san_pham = $m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai_san_pham($ma_loai_san_pham);
// san_pham
include("models/m_san_pham.php");
$m_san_pham = new M_san_pham();
$san_phams = $m_san_pham->Doc_san_pham();
$san_pham_theo_ma_loai_san_phams=$m_san_pham->Doc_san_pham_theo_ma_loai_san_pham($ma_loai_san_pham);
?>

<div id="hien_thi_ds_san_pham" class="bottom-product">
	<?php
	foreach($san_pham_theo_ma_loai_san_phams as $sp_theo_mlsps)
	{
	?>
		<div class="col-md-3 bottom-cd simpleCart_shelfItem">
			<div class="product-at">
				<a href="#"><img class="img-responsive" src="public/layout/images/pi3.jpg" alt="">
					<div class="pro-grid">
						<span class="buy-in">Xem chi tiết</span>
					</div>
				</a>	
			</div>
			<p class="tun"><?php echo $loai_san_pham->ten_loai_san_pham ?><br><?php echo $sp_theo_mlsps->ma_san_pham ?></p>
			<a href="#" class="item_add"><p class="number item_price"><!-- <i> </i> -->VNĐ</p></a>
		</div>
	<?php
	}
	?>
	<div class="clearfix"> </div>
</div>
<div class="clearfix"></div>

	<nav class="in">
		<ul class="pagination">
			<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
			<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">2 <span class="sr-only"></span></a></li>
			<li><a href="#">3 <span class="sr-only"></span></a></li>
			<li><a href="#">4 <span class="sr-only"></span></a></li>
			<li><a href="#">5 <span class="sr-only"></span></a></li>
			<li> <a href="#" aria-label="Next"><span aria-hidden="true">»</span> </a> </li>
		</ul>
	</nav>