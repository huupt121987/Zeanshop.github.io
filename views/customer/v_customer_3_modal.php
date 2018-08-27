<!-- Login Modal -->
<div class="modal fade chitiet_hoadon" id="chitiet<?php echo $hds->ma_hoa_don ?>" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Chi tiết hóa đơn: <?php echo $hds->ma_hoa_don ?></h4`>
			</div>
	        <div class="modal-body">
	        <?php
	        $chi_tiet_hoa_don=$m_hoa_don->Doc_chi_tiet_hoa_don_va_san_pham_theo_ma_hoa_don($hds->ma_hoa_don);
	   
	        foreach ($chi_tiet_hoa_don as $cthd) {
	        ?>
				<div class="cthd-title"><a href="single.php?ma_san_pham=<?php echo $cthd->ma_san_pham ?>">Mã sản phẩm: <?php echo $cthd->ma_san_pham ?></a></div>
				<div class="cthd-content">
					<div class="cthd-left">
						<p>&#9642; Tên sản phẩm: <b><?php echo $cthd->ten_san_pham ?></b></p>
						<p>&#9642; Mô tả tóm tắt: <b><?php echo $cthd->mo_ta_tom_tat ?></b></p>
						<p>&#9642; Số lượng: <b><?php echo $cthd->so_luong ?></b></p>
						<p>&#9642; Đơn giá: <b><?php echo number_format($cthd->don_gia) ?>VNĐ</b></p>
						<p>&#9642; Thành tiền: <b><?php echo number_format($thanh_tien=$cthd->so_luong * $cthd->don_gia) ?>VNĐ</b></p>
					</div>
					<div class="cthd-right">
						<img src="public/images/san_pham/<?php echo $cthd->hinh ?>" alt="Image">
					</div>
				</div>
			<?php } ?>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
			</div>
		</div>
	</div>
</div>