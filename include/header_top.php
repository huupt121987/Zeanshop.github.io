<div class="header-top">
	<div class="container">

		<!-- Tìm kiếm -->
		<div class="search">
				<!-- <form> -->
					<input type="text" placeholder="Tìm sản phẩm" onkeyup="Tim_san_pham(this.value)">
					<div id="hienthi_timkiem"></div>
					<button name="btnTim" type="submit" class="fa fa-search" value="Tìm kiếm">
				<!-- </form> -->
				
		</div>
		<!-- END Tìm kiếm -->

		<!-- Tài khoản -->
		<div class="header-left">
			<?php
			if(!isset($_SESSION["ten_khach_hang"]))
			{
			?>
			<ul>
				<li><a href="#" onclick="document.getElementById('modal_login').style.display='block'">Đăng nhập</a></li>
				<li><a href="#" onclick="document.getElementById('modal_register').style.display='block'">Đăng ký</a></li>
			</ul>
			<?php
				include("account_modal.php");
			}
			else{
			?>
			<ul>
				<li><a href="customer.php?cv=1">Chào, <?php echo $_SESSION["ten_khach_hang"] ?></a></li>
				<li><a href=".?func=exit">Thoát</a></li>
			</ul>
			<?php } ?>
			<div class="cart box_1">
				<a href="cart.php" id="show_cart_here">
					<h3>
						<div class="total">
							<span id="show_total"><?php echo isset($_SESSION['thanh_tien'])?number_format($_SESSION['thanh_tien']):0 ?></span> VNĐ
							 (<span id="show_quantity"><?php echo isset($_SESSION['so_luong'])?number_format($_SESSION['so_luong']):0 ?></span> Sản phẩm)
						</div>
						<img src="public/layout/images/cart.png" alt=""/>
					</h3>
				</a>
				<p><a href="javascript:void(0)" class="empty_cart">Xóa giỏ hàng</a></p>
			</div>

			<div class="clearfix"> </div>
		</div>
		<!-- END Tài khoản -->

		<div class="clearfix"> </div>
	</div>
</div>