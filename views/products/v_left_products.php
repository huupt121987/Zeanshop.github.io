<div class="col-md-3 product-price">
	
	<!-- Categories -->
	<div class="rsidebar span_1_of_left">
		
		<div class="of-left">
			<h3 class="cate">Sản Phẩm</h3>
		</div>

		<ul class="menu-left">
		<?php
		foreach($loai_mat_hangs as $lmhs)
		{
		?>
			<li class="item<?php echo $lmhs->ma_loai_mat_hang ?>"><a href="#"><?php echo $lmhs->ten_loai_mat_hang ?></a>
				<ul class="cute">
				<?php
				$loai_san_pham_theo_ma_loai_mat_hangs = $m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai_mat_hang($lmhs->ma_loai_mat_hang);
				foreach($loai_san_pham_theo_ma_loai_mat_hangs as $lsp_theo_mlmhs)
				{
				?>
					<li class="subitem1"><a ma_loai_san_pham="<?php echo $lsp_theo_mlmhs->ma_loai_san_pham ?>" href="products.php?ma_loai_san_pham=<?php echo $lsp_theo_mlmhs->ma_loai_san_pham ?>"><?php echo $lsp_theo_mlmhs->ten_loai_san_pham ?></a></li>
				<?php
				}
				?>
				</ul>
			</li>
		<?php
		}
		?>
		</ul>

	</div>

	<!-- END Categories -->


<!-- 	<div class="product-middle">
		<div class="fit-top">
			<h6 class="shop-top">Lorem Ipsum</h6>
			<a href="single.html" class="shop-now">SHOP NOW</a>
			
			<div class="clearfix"></div>
		</div>
	</div>	  -->

						
	<!-- <div class="sellers">
		<div class="of-left-in">
		<h3 class="tag">Tags</h3>
	</div>

		<div class="tags">
			<ul>
				<li><a href="#">design</a></li>
				<li><a href="#">fashion</a></li>
				<li><a href="#">lorem</a></li>
				<li><a href="#">dress</a></li>
				<li><a href="#">fashion</a></li>
				<li><a href="#">dress</a></li>
				<li><a href="#">design</a></li>
				<li><a href="#">dress</a></li>
				<li><a href="#">design</a></li>
				<li><a href="#">fashion</a></li>
				<li><a href="#">lorem</a></li>
				<li><a href="#">dress</a></li>
			
				<div class="clearfix"> </div>
			</ul>
		</div>
	
	</div> -->

	<!-- Best Sellers -->
	<div class="product-bottom">
		<div class="of-left-in">
			<h3 class="best">Nổi Bậc</h3>
		</div>
		
		<div class="product-go">
			<div class=" fashion-grid">
				<a href="products_new.php?san_pham_moi=1"><img class="img-responsive " src="public/layout/images/new-product.png" alt=""></a>
			</div>

			<div class=" fashion-grid1">
				<h6 class="best2">
					<a href="products_new.php?san_pham_moi=1" >Hàng mới về</a>
				</h6>
				<span class="price-in1"><a href="products_new.php?san_pham_moi=1">Xem Ngay!</a></span>
			</div>
			
			<div class="clearfix"> </div>
		</div>

		<div class="product-go">
			<div class=" fashion-grid">
				<a href="products_new.php?san_pham_moi=1"><img class="img-responsive " src="public/layout/images/best-seller.png" alt=""></a>
			</div>

			<div class=" fashion-grid1">
				<h6 class="best2">
					<a href="products_most.php" >Hàng HOT</a>
				</h6>
				<span class="price-in1"><a href="products_most.php">Xem Ngay!</a></span>
			</div>
			
			<div class="clearfix"> </div>
		</div>

	</div>

	<!-- for sale -->
	<div class="per1">
		<a href="products_sale.php" ><img class="img-responsive" src="public/layout/images/pro.jpg" alt="">
				<div class="six1">
					<h4>Giá Sốc</h4>
					<p>giảm đến</p>
					<span>60%</span>
				</div>
		</a>
	</div>

</div>