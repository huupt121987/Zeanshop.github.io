<div class="container">
	<!-- Category -->

	<div class="content-top-bottom">
		<h2><a href="products_new.php?san_pham_moi=1">Sản phẩm mới</a></h2>
		<?php 
		foreach($san_pham_mois as $spms){
		?>
		
		<div class="col-md-3 men">
			<a class="b-link-stripe b-animate-go thickbox" href="single.php?ma_san_pham=<?php echo $spms->ma_san_pham ?>">
				<img class="img-responsive home-pic" src="public/images/san_pham/<?php echo $spms->hinh ?>" alt="<?php echo $spms->hinh ?>">
				<div class="b-wrapper">
					<h3 class="b-animate b-from-top top-in1 b-delay03 ">
						<span><?php echo $spms->ten_san_pham."<br><br>".number_format($spms->don_gia)." VNĐ" ?></span>	
					</h3>
				</div>
			</a>
		</div>
		<?php } ?>
		<div class="clearfix"> </div>
	</div>
	
	<div class="content-top-bottom">
		<h2>Sản phẩm bán chạy</h2>
		<?php 
		foreach($san_pham_hots as $sphs){
		?>
		
		<div class="col-md-3 men">
			<a class="b-link-stripe b-animate-go thickbox" href="single.php?ma_san_pham=<?php echo $sphs->ma_san_pham ?>">
				<img class="img-responsive home-pic" src="public/images/san_pham/<?php echo $sphs->hinh ?>" alt="<?php echo $sphs->hinh ?>">
				<div class="b-wrapper">
					<h3 class="b-animate b-from-top top-in1 b-delay03 ">
						<span><?php echo $spms->ten_san_pham."<br><br>".number_format($spms->don_gia)." VNĐ" ?></span>	
					</h3>
				</div>
			</a>
		</div>
		<?php } ?>
		<div class="clearfix"> </div>
	</div>
	<!-- END Category-->

</div>