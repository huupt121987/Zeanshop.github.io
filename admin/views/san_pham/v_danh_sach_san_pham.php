<div class="table-heading">
	<h2><?php echo $title ?></h2>
</div>

<!-- start Tìm Kiếm -->
<div class="w3l_search">
			<input type="text" name="tim_kiem" placeholder="Tìm Kiếm" onkeyup="tim_san_pham(this.value)">
			<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
</div>
<!-- end Tìm Kiếm -->

<div id="hienthi">
	<div class="agile-tables">
		<div class="w3l-table-info">
		    <table id="table">
				<thead>
				  <tr>
					<th>Mã SP</th>
					<th>Hình</th>
					<th>Tên Sản Phẩm</th>
					<th>Loại Sản Phẩm</th>
					<th>Đơn Giá</th>
					<th>Ngày Tạo</th>

					<th>Chức Năng</th>
				  </tr>
				</thead>
			
				<tbody>
				<?php  
				  	foreach ($san_pham as $dssp) 
				  	{
				?>
				  <tr>
					<td><a href="#"><?php echo $dssp->ma_san_pham ?></a></td>
					<td><img src="images/san_pham/<?php echo $dssp->hinh ?>" width="50px" height="50px" ></td>
					<td><?php echo $dssp->ten_san_pham ?></td>
					<td><?php echo $dssp->ten_loai_san_pham ?></td>
					<td><?php echo number_format($dssp->don_gia,0) ?></td>
					<td><?php echo date('d/m/Y',strtotime($dssp->ngay_tao)) ?></td>

					<td>
						<!-- icon action -->
						<a href="them_san_pham.php"><img src="images/add.png" width="20">&nbsp</a>
						<a href="sua_san_pham.php?ma_san_pham=<?php echo $dssp->ma_san_pham ?>"><img src="images/edit.png" width="20">&nbsp</a>
						<a href="#" ma_san_pham=<?php echo $dssp->ma_san_pham?> class="view_modal"  ><img src="images/delete.png" width="20">&nbsp</a>
						<!-- End icon action -->

						<!-- Modal -->									 
						<div class="modal fade" id="myModal_<?php echo $dssp->ma_san_pham?>" role="dialog">
						    <div class="modal-dialog modal-md">
						      	<div class="modal-content">
						        	<div class="modal-header">
						          		<button type="button" class="close" data-dismiss="modal">&times;</button>
						          		<h4 class="modal-title">Xóa Sản Phẩm</h4>
						        	</div>
						        	<div class="modal-body">
						         		<p>Dữ liệu xóa không thể phục hồi. Bạn có chắc muốn xóa không ?</p>
						       		</div>
							        <div class="modal-footer">
							         	<button type="button" class="btn btn-primary btn-ms" data-dismiss="modal" onclick="Xoa_san_pham('<?php echo $dssp->ma_san_pham ?>')">Xóa</button>
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
<!--
<script type="text/javascript">
	jQuery(document).ready(function() { 
		$(".view_modal").click(function(){
			var ma_san_pham=$(this).attr("ma_san_pham")
			$("#myModal_"+ ma_san_pham ).modal("show");
			
			return false; 
		}) 
	});
</script>
-->
<!-- End modal -->
