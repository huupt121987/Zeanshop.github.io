<div class="table-heading">
	<h2><?php echo $title ?></h2>
</div>

<!-- start Tìm Kiếm -->
<div class="w3l_search">
			<input type="text" name="tim_kiem" placeholder="Tìm Kiếm" onkeyup="tim_hoa_don(this.value)">
			<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
</div>
<!-- end Tìm Kiếm -->

<div id="hienthi">
	<div class="agile-tables">
		<div class="w3l-table-info">
		    <table id="table">
				<thead>
				  <tr>
					<th>Mã Hóa Đơn</th>
					<th>Số Lượng</th>
					<th>Đơn Giá</th>
					<th>Tổng Tiền</th>
					<th>Ngày Tạo</th>
					<th>Hình Thức Thanh Toán</th>
					<th>Chức Năng</th>
				  </tr>
				</thead>
			
				<tbody>
				<?php  
				  	foreach ($hoa_don as $dshd) 
				  	{
				?>
				  <tr>
					<td><?php echo $dshd->ma_hoa_don ?></td>
					<td><?php echo $dshd->so_luong ?></td>
					<td><?php echo $dshd->don_gia ?></td>
					<td><?php echo $dshd->tong_tien ?></td>
					<td><?php echo $dshd->ngay_hoa_don ?></td>
					<td><?php echo $dshd->hinh_thuc_thanh_toan?"Chuyển khoản":"Tiền Mặt" ?></td>
					<td>
						<!-- icon action -->
						<a href="them_hoa_don.php"><img src="images/add.png" width="20">&nbsp</a>
						<a href="sua_hoa_don.php?ma_hoa_don=<?php echo $dshd->ma_hoa_don ?>"><img src="images/edit.png" width="20">&nbsp</a>
						<a href="#" class="view_modal" ma_hoa_don=<?php echo $dshd->ma_hoa_don?> ><img src="images/delete.png" width="20">&nbsp</a>
						<!-- End icon action -->

						<!-- Modal -->									 
						<div class="modal fade" id="myModal_<?php echo $dshd->ma_hoa_don?>" role="dialog">
						    <div class="modal-dialog modal-md">
						      	<div class="modal-content">
						        	<div class="modal-header">
						          		<button type="button" class="close" data-dismiss="modal">&times;</button>
						          		<h4 class="modal-title">Xóa Khách Hàng</h4>
						        	</div>
						        	<div class="modal-body">
						         		<p>Dữ liệu xóa không thể phục hồi. Bạn có chắc muốn xóa không ?</p>
						       		</div>
							        <div class="modal-footer">
							         	<button type="button" class="btn btn-primary btn-ms" data-dismiss="modal" onclick="Xoa_hoa_don('<?php echo $dshd->ma_hoa_don?>')">Xóa</button>
							        	<button type="button" class="btn btn-danger btn-ms" data-dismiss="modal">Thoát</button>
							        </div>
						      	</div>
						    </div>
						</div>
						<!-- END Modal -->
						
					</td>
				  </tr>
				<?php  
				  	}
				?>
				</tbody>
			</table>

	  	<!-- Phân Trang -->
				<tfoot>
			      	<tr>
						<div class="grid_3 grid_5 wow fadeInUp animated" data-wow-delay=".5s">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<nav>
									<div class="pagination">
									<?php if(isset($lst)){echo $lst;}  ?></div>
								</nav>
							</div>
						</div>
					<div class="clearfix"></div>
			      	</tr>
			    </tfoot>
	    <!-- Hết Phân Trang -->

		</div>
	</div>
</div>
<!-- input modal -->
<script type="text/javascript">
	jQuery(document).ready(function() { 
		$(".view_modal").click(function(){
			var ma_hoa_don=$(this).attr("ma_hoa_don")
			$("#myModal_"+ ma_hoa_don ).modal("show");
			return false; 
		}) 
	});
</script>
<!-- End modal -->
