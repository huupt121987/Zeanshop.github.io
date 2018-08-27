<?php
	$tim_kiem=$_POST["tim_kiem"];
	include("models/m_hoa_don.php");
	$m_hoa_don=new M_hoa_don();
	$hoa_don=$m_hoa_don->doc_hoa_don_theo_tim_kiem($tim_kiem);
?>
<div class="agile-tables">
	<div class="w3l-table-info">
	    <table id="table">
			<thead>
			  <tr>
				<th>Số Hóa Đơn</th>
				<th>Mã Khách Hàng</th>
				<th>Ngày Tạo</th>
				<th>Tổng Tiền</th>
				<th>Thanh Toán</th>
				<th>Ghi Chú</th>
				<th>Chức Năng</th>
			  </tr>
			</thead>
		
			<tbody>
			<?php  
			  	foreach ($hoa_don as $dshd) 
			  	{
			?>
			  <tr>
				<td><a href="#"><?php echo $dshd->ma_hoa_don ?></a></td>
				<td><?php echo $dshd->ma_khach_hang ?></td>
				<td><?php echo $dshd->ngay_hoa_don ?></td>
				<td><?php echo $dshd->tong_tien ?></td>
				<td><?php echo $dshd->hinh_thuc_thanh_toan ?></td>
				<td><?php echo $dshd->ghi_chu ?></td>
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
		<div align="center" style="margin-top: 1em">
				<?php if (count($hoa_don)===0) 
				{
					echo "<P>Không có dữ liệu nào phù hợp....</P>";
				} 
				?>
			</div>
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