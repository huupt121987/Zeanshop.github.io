<?php
	$tim_kiem=$_POST["tim_kiem"];
	include("models/m_khach_hang.php");
	$m_khach_hang=new M_khach_hang();
	$khach_hang=$m_khach_hang->doc_khach_hang_theo_tim_kiem($tim_kiem);
	
?>
<div class="agile-tables">
		<div class="w3l-table-info">
		    <table id="table">
				<thead>
				  <tr>
					<th>Tên Khách Hàng</th>
					<th>Giới Tính</th>
					<th>Địa Chỉ</th>
					<th>Điện Thoại</th>
					<th>Email</th>
					<th>Chức Năng</th>
				  </tr>
				</thead>
			
				<tbody>
				<?php  
				  	foreach ($khach_hang as $dskh) 
				  	{
				?>
				  <tr>
					<td><a href="#"><?php echo $dskh->ten_khach_hang ?></a></td>
					<td><?php echo $dskh->phai?"Nữ":"Nam" ?></td>
					<td><?php echo $dskh->dia_chi ?></td>
					<td><?php echo $dskh->dien_thoai ?></td>
					<td><?php echo $dskh->email ?></td>
					<td>
						<!-- icon action -->
						<a href="them_khach_hang.php"><img src="images/add.png" width="20">&nbsp</a>
						<a href="sua_khach_hang.php?ma_khach_hang=<?php echo $dskh->ma_khach_hang ?>"><img src="images/edit.png" width="20">&nbsp</a>
						<a href="#" class="view_modal" ma_khach_hang=<?php echo $dskh->ma_khach_hang?> ><img src="images/delete.png" width="20">&nbsp</a>
						<!-- End icon action -->

						<!-- Modal -->									 
						<div class="modal fade" id="myModal_<?php echo $dskh->ma_khach_hang?>" role="dialog">
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
							         	<button type="button" class="btn btn-primary btn-ms" data-dismiss="modal" onclick="Xoa_khach_hang(<?php echo $dskh->ma_khach_hang?>)">Xóa</button>
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
				<?php if (count($khach_hang)===0) 
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
									<?php if(isset($lst)){echo $lst;} ?>
										
									</div>
								</nav>
							</div>
						</div>
					<div class="clearfix"></div>
			      	</tr>
			    </tfoot>
	    <!-- Hết Phân Trang -->
		</div>
	</div>