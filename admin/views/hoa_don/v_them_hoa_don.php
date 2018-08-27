<div class="agile-tables">
	<div class="table-heading">
		<h2><?php echo $title ?></h2>
		<div class="forms">
			<div class="form-three widget-shadow">
				<form class="form-horizontal" action="" method="post" >
					<div class="form-group">
						<label for="focusedinput" required="true" class="col-sm-2 control-label">Mã Hóa Đơn *</label>
						<div class="col-sm-2">
							<input type="text" class="form-control1" name="ma_hoa_don" id="focusedinput" placeholder="Mã Hóa Đơn">
						</div>
						<div class="col-sm-2">
							<p class="help-block">(*) Bắt Buộc Nhập</p>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" required="true" class="col-sm-2 control-label">Tên Khách Hàng *</label>
						<div class="col-sm-4">
							<input type="text" class="form-control1" name="ten_khach_hang" id="focusedinput" placeholder="Tên Khách Hàng">
						</div>
						<div class="col-sm-2">
							<p class="help-block"></p>
						</div>
					</div>	

					<div class="form-group">
					<label for="radio" class="col-sm-2 control-label">Giới Tính *</label>
						<div class="col-sm-8">
							<div class="radio-inline"><label><input type="radio" name='phai' checked="checked" value="0">Nam</label></div>
							<div class="radio-inline"><label><input type="radio" name='phai' value="1"> Nữ</label></div>
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Địa Chỉ *</label>
						<div class="col-sm-5">
							<input type="text" class="form-control1" id="focusedinput" name="dia_chi" placeholder="Địa Chỉ">
						</div>
					</div>					
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Số Điện Thoại</label>
						<div class="col-sm-3">
							<input type="text" class="form-control1" id="focusedinput" name="dien_thoai" placeholder="Số Điện Thoại">
						</div>
					</div>	

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-5">
							<input type="text" class="form-control1" id="focusedinput" name="email" placeholder="Email">
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tổng Tiền</label>
						<div class="col-sm-2">

							<input type="text" class="form-control1" id="focusedinput" name="tong_tien" placeholder="Tổng Tiền">
						</div>
						<label for="focusedinput" class="col-sm-2 control-label">/ Đồng</label>
					</div>

					<div class="form-group">
					<label for="radio" class="col-sm-2 control-label">Hình Thức Thanh Toán *</label>
						<div class="col-sm-8">
							<div class="radio-inline"><label><input type="radio" name='hinh_thuc_thanh_toan' checked="checked" value="0">Tiền Mặt</label></div>
							<div class="radio-inline"><label><input type="radio" name='hinh_thuc_thanh_toan' value="1"> Chuyển Khoản</label></div>
						</div>
					</div>


					<div class="form-group" align="center">
						<div class="col-sm-7">
							<button type="button" class="add_modal btn btn-primary">Cập Nhật</button>
							<button type="reset" class="btn btn-success">Làm lại</button>
							<button type="button" onclick="window.location='danh_sach_khach_hang.php'" class="btn btn-danger">Thoát</button>
						</div>

						<!-- Modal -->									 
						<div class="modal fade" id="addModal" role="dialog">
						    <div class="modal-dialog modal-md">
						      	<div class="modal-content">
						        	<div class="modal-header">
						          		<button type="button" class="close" data-dismiss="modal">&times;</button>
						          		<h4 class="modal-title">Thêm Khách Hàng</h4>
						        	</div>
						        	<div class="modal-body">
						         		<p>Bạn chắc có muốn lưu không ?</p>
						       		</div>
							        <div class="modal-footer">
							        	<button type="submit" class="btn btn btn-primary" name="btn_cap_nhat">Lưu</button>
							        	<button type="button" class="btn btn-danger btn-ms" data-dismiss="modal" data-dismiss="modal">Thoát</button>
							        </div>
						      	</div>
						    </div>
						</div>
						<!-- END Modal -->

					</div>		
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End modal -->

<!-- Start script modal -->
<script type='text/javascript'>
	jQuery(document).ready(function() { 
		$('.add_modal').click(function(){
		$('#addModal').modal('show'); 
		}) 
	});
</script>
<!-- End script modal -->