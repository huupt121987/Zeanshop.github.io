<?php
	$tim_kiem=$_POST["tim_kiem"];
	include("models/m_nguoi_dung.php");
	$m_nguoi_dung=new M_nguoi_dung();
	$nguoi_dung=$m_nguoi_dung->doc_nguoi_dung_theo_tim_kiem($tim_kiem);
?>
<div class="agile-tables">
		<div class="w3l-table-info">
		    <table id="table">
				<thead>
				  <tr>
					<th>Họ và Tên</th>
					<th>Chức Vụ</th>
					<th>Tên Đăng Nhập</th>
					<th>Email</th>
					<th>Ngày Đăng Ký</th>
					<th>Kích Hoạt</th>
					<th>Chức Năng</th>
				  </tr>
				</thead>
			
				<tbody>
				<?php  
				  	foreach ($nguoi_dung as $dsnd) 
				  	{
				?>
				  <tr>
					<td><a href="#"><?php echo $dsnd->ho_ten ?></a></td>
					<td><?php echo $dsnd->ten_loai_nguoi_dung ?></td>
					<td><?php echo $dsnd->ten_dang_nhap ?></td>
					<td><?php echo $dsnd->email ?></td>
					<td><?php echo date('d/m/Y',strtotime($dsnd->ngay_dang_ky)) ?></td>					
					<td><?php 
								$active = $dsnd->active;
								if($active==0)
								{
									echo "<img src='images/inactive.png'>";
								}
								else
								{
									echo "<img src='images/active.png'>";
								}
						?>	
					</td>
					<td>
						<!-- icon action -->
						<a href="them_nguoi_dung.php"><img src="images/add.png" width="20">&nbsp</a>
						<a href="sua_nguoi_dung.php?ma_nguoi_dung=<?php echo $dsnd->ma_nguoi_dung ?>"><img src="images/edit.png" width="20">&nbsp</a>
						<a href="#" class="view_modal" ma_nguoi_dung=<?php echo $dsnd->ma_nguoi_dung?> ><img src="images/delete.png" width="20">&nbsp</a>
						<!-- End icon action -->

						<!-- Modal -->									 
						<div class="modal fade" id="myModal_<?php echo $dsnd->ma_nguoi_dung?>" role="dialog">
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
							         	<button type="button" class="btn btn-primary btn-ms" data-dismiss="modal" onclick="Xoa_nguoi_dung(<?php echo $dsnd->ma_nguoi_dung?>)">Xóa</button>
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
				<?php if (count($nguoi_dung)===0) 
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