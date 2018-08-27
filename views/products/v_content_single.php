<div class="col-md-9 product-price1">
	<!-- Slide Products -->
	<div class="col-md-5 single-top">	

		<div class="flexslider">
			<ul class="slides">
    			<li data-thumb="public/images/san_pham/<?php echo $san_pham_chi_tiet->hinh ?>"><img src="public/images/san_pham/<?php echo $san_pham_chi_tiet->hinh ?>" /></li>
    			<li data-thumb="public/images/san_pham/<?php echo $san_pham_chi_tiet->hinh ?>"><img src="public/images/san_pham/<?php echo $san_pham_chi_tiet->hinh ?>" /></li>
    			<li data-thumb="public/images/san_pham/<?php echo $san_pham_chi_tiet->hinh ?>"><img src="public/images/san_pham/<?php echo $san_pham_chi_tiet->hinh ?>" /></li>
    			<li data-thumb="public/images/san_pham/<?php echo $san_pham_chi_tiet->hinh ?>"><img src="public/images/san_pham/<?php echo $san_pham_chi_tiet->hinh ?>" /></li>
				<!-- <li data-thumb="public/layout/images/si.jpg"><img src="public/layout/images/si.jpg" /></li> -->
			</ul>
		</div>
	</div>
	<!-- END Slide Products -->

	<!-- Details -->
	<div class="col-md-7 single-top-in simpleCart_shelfItem">
		<div class="single-para">
			<h4><?php echo $san_pham_chi_tiet->ten_san_pham ?></h4>

			<!-- Evaluation -->
	<!--		<div class="star-on">
				<ul class="star-footer">
					<li><a href="#"><i> </i></a></li>
					<li><a href="#"><i> </i></a></li>
					<li><a href="#"><i> </i></a></li>
					<li><a href="#"><i> </i></a></li>
					<li><a href="#"><i> </i></a></li>
				</ul>
				<div class="review">
					<a href="#">Đánh giá</a>
				</div>

				<div class="clearfix"> </div>
			</div>-->
			<!-- END Evaluation -->

			<h5 class="item_price"><?php echo number_format($san_pham_chi_tiet->don_gia,0,"."," ") ?> VNĐ</h5>

			<p><?php echo $san_pham_chi_tiet->mo_ta_tom_tat ?></p>

			<!-- Color and Size -->
			<div class="available">
				<ul>
					<li class="size-in">Màu sắc<select>
						<option>Trắng</option>
						<option>Đen</option>
						<option>Vàng</option>
						<option>Đỏ</option>
					</select></li>

					<li class="size-in">Kích thước:<select>
						<option>XXL</option>
						<option>XL</option>
						<option>L</option>
						<option>M</option>
						<option>S</option>
					</select></li>

				<div class="clearfix"> </div>
				</ul>

			</div>
			<!-- END Color and Size -->

			<ul class="tag-men">
				<li>
					<span>Mặt hàng:</span>
					<span class="simple_items"><?php echo $san_pham_chi_tiet->ten_loai_san_pham ?></span>
				</li>
				<li>
					<span>Mã sản phẩm:</span>
					<span class="simple_items"><?php echo $san_pham_chi_tiet->ma_san_pham ?></span>
				</li>
			</ul>

			<a href="javascript:void(0)" class="add-cart add_cart_here" ma_san_pham="<?php echo $san_pham_chi_tiet->ma_san_pham ?>" don_gia="<?php echo $san_pham_chi_tiet->don_gia ?>">Thêm giỏ hàng</a>

		</div>
	</div>
	<!-- END Details -->
	<div class="clearfix"></div>
	<!--  -->

	<div class="cd-tabs">
		<!-- <nav> -->
			<ul class="cd-tabs-navigation nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#001">Chi tiết sản phẩm</a></li>
				<!-- <li><a data-toggle="tab" href="#002">Thông tin bổ sung</a></li> -->
				<!-- <li><a data-toggle="tab"  href="#003">Nhận xét (1)</a></li> -->
			</ul> 
		<!-- </nav> -->

		<ul class="cd-tabs-content tab-content">
			<li id="001" class="tab-pane fade in active"> <!-- tab thông tin chi tiết -->
				<div class="ttct">
					<p><?php echo $san_pham_chi_tiet->mo_ta_chi_tiet ?></p>         
				</div>
			</li>

<!-- 			<li id="002" class="tab-pane fade"> 
				<div class="facts1">
					<div class="color"><p>Color</p>
						<span >Blue, Black, Red</span>
						<div class="clearfix"></div>
					</div>

					<div class="color">
						<p>Size</p>
						<span >S, M, L, XL</span>
						<div class="clearfix"></div>
					</div>
				</div>
			</li> -->
<!-- 
			<li id="003" class="tab-pane fade">
				<div class="comments-top-top">
					<div class="top-comment-left">
						<img class="img-responsive" src="images/co.png" alt="">
					</div>
					
					<div class="top-comment-right">
						<h6><a href="#">Hendri</a> - September 3, 2014</h6>
						<ul class="star-footer">
							<li><a href="#"><i> </i></a></li>
							<li><a href="#"><i> </i></a></li>
							<li><a href="#"><i> </i></a></li>
							<li><a href="#"><i> </i></a></li>
							<li><a href="#"><i> </i></a></li>
						</ul>
						<p>Tuyệt vời</p>
					</div>
			
					<div class="clearfix"> </div>
					<a class="add-re" href="#">Nhật xét</a>
			
				</div>
			</li> -->

			<div class="clearfix"></div>
		</ul>
	</div> 

	<div class=" bottom-product">
		<div class='single-para'><h5>Sản phẩm cùng loại</h5></div>
		<?php
			foreach($san_pham_chi_tiet_theo_ma_loai_san_phams as $sp_theo_mlsps)
			{
				include("v_list.php");
			}
			if($pages>1)
			{
		?>
			<nav class="in"><?php echo $lst ?></nav>
		<?php
			}
		?>
		<div class="clearfix"></div>
	</div>

</div>



