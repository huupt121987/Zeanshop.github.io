<div class="col-md-3 bottom-cd simpleCart_shelfItem">
	<div class="product-at">
		<a href="single.php?ma_san_pham=<?php echo $sp_theo_mlsps->ma_san_pham ?>"><img class="img-responsive" src="public/images/san_pham/<?php echo $sp_theo_mlsps->hinh ?>" alt="<?php echo $sp_theo_mlsps->hinh ?>">
			<div class="pro-grid">
				<span class="buy-in">Xem chi tiết</span>
			</div>
		</a>	
	</div>
	<p class="tun"><?php echo isset($ten_loai_san_pham)?$ten_loai_san_pham:$sp_theo_mlsps->ten_loai_san_pham ?><br><?php echo $sp_theo_mlsps->ma_san_pham ?></p>
	<a href="javascript:void(0)" class="add_cart_here" ma_san_pham="<?php echo $sp_theo_mlsps->ma_san_pham ?>" don_gia="<?php echo $sp_theo_mlsps->don_gia ?>">
		<p class="number item_price"><i> </i><?php echo number_format($sp_theo_mlsps->don_gia) ?> VNĐ</p>
	</a>
</div>