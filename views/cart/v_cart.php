<div class="container">
	<div class="col-md-3 product-price">
		<div class="rsidebar span_1_of_left">
			<ul class="left-customer">
				<li><a href="#"></a>
				<li><a href="#"></a>
				<li><a href="#"></a>
			</ul>	
		</div>
	</div>
	<div class="col-md-9 customer">
		<?php
		if(isset($ds_san_pham))
		{
		?>
		<h2>Giỏ hàng của bạn</h2>
		<form action="" method="post">
		<table cellpadding="0">
			<thead>
				<tr>
					<th class="ch1">Mã sản phẩm</th>
					<th class="ch2">Tên sản phẩm</th>
					<th class="ch3">Số lượng</th>
					<th class="ch4">Đơn giá</th>
					<th class="ch5">Thành tiền</th>
					<th class="ch6">Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$_SESSION["truyen_don_gia"] = array();
				$_SESSION["tong_tien"] = 0; 
				foreach ($ds_san_pham as $item) {
					$_SESSION["tong_tien"] += $item->so_luong*$item->don_gia;
					$_SESSION["truyen_don_gia"][$item->ma_san_pham]=$item->don_gia;
				?>
				<tr>
					<td class="cd1"><?php echo $item->ma_san_pham ?></td>
					<td class="cd2"><?php echo $item->ten_san_pham ?></td>
					<td class="cd3">
						<input type="text" value="<?php echo $item->so_luong ?>" name="sl_<?php echo $item->ma_san_pham ?>" style="width:3em; text-align:center"/>
					</td>
					<td class="cd4">
						<?php echo number_format($item->don_gia) ?> VNĐ
						<input type="hidden" value="<?php echo $item->don_gia ?>" name="dongia_<?php echo $item->ma_san_pham ?>"/>
					</td>
					<td class="cd5"><?php echo number_format($item->so_luong*$item->don_gia) ?> VNĐ</td>
					<td class="cd6">
						<input type="checkbox" name="xoa_cart_<?php echo $item->ma_san_pham ?>" value="<?php echo $item->don_gia ?>"/>
						
					</td>
				</tr>
				<?php	
				}
				?>
			</tbody>
		</table>
		<button class="btn_customer" type="submit" name="btn_cap_nhat_cart">Cập nhật</button>
		<button class="btn_customer" type="submit" name="btn_mua_cart">Mua hàng</button>
		<button class="btn_customer" type="submit" name="btn_xoa_cart">Xóa giỏ hàng</button>
		</form>
		<?php
		}
		else
		{
			echo "<h3>Bạn chưa đưa hàng vào giỏ</h3>";
		}
		?>
	</div>	
</div>