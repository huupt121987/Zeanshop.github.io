<div class="agile-tables">
	<div class="table-heading">
		<h2><?php echo $title ?></h2>
		<div class="forms">
			<div class="form-three widget-shadow">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã Sản Phẩm *</label>
						<div class="col-sm-2">
							<input type="text" class="form-control1" value="<?php echo $san_pham->ma_san_pham ?>" style="background: #F0F0F0" name="ma_san_pham" id="focusedinput" placeholder="Mã Sản Phẩm" readonly>
						</div>
						<div class="col-sm-2">
							<p class="help-block">(*) Bắt Buộc Nhập</p>
						</div>
					</div>					

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên Sản Phẩm *</label>
						<div class="col-sm-5">
							<input type="text" class="form-control1" name="ten_san_pham" id="focusedinput" value="<?php echo $san_pham->ten_san_pham ?>" placeholder="Tên Sản Phẩm">
						</div>
					</div>

					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label">Loại Sản Phẩm *</label>
						<div class="col-sm-4">
						<select name="ma_loai_san_pham"  id="selector1" class="form-control1">
						<?php  
							foreach ($loai_san_pham as $ldssp) 
							{
								
								$select = $ldssp->ma_loai_san_pham==$san_pham->ma_loai_san_pham?"selected":"";
						?>									
							<option value="<?php echo $ldssp->ma_loai_san_pham ?>" <?php echo $select ?>><?php echo $ldssp->ten_loai_san_pham ?></option>
						<?php 
							} 
						?>
						</select>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Nội Dung Tóm Tắt *</label>
						<div class="col-sm-6">
							<textarea name="mo_ta_tom_tat" class="form-control"><?php echo $san_pham->mo_ta_tom_tat ?></textarea>
						</div>
					</div>						
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Nội Dung Chi Tiết *</label>
						<div class="col-sm-6">
							<textarea name="mo_ta_chi_tiet" class="form-control"><?php echo $san_pham->mo_ta_chi_tiet ?></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Hình *</label>
						<div class="col-sm-5">
							<div class="image-upload">			           	
					            <div class="fileinput fileinput-new logo-business" data-provides="fileinput">
						            <div class="fileinput-preview thumbnail set-background-default deal-show-image" data-trigger="fileinput" style="width: 160px; height: 100px;">
									<?php 
							            if ($san_pham->hinh!="")
							            {
							        ?>
						              <img style="width: 160px; height: 80px;" src="images/san_pham/<?php echo $san_pham->hinh ?>">
						            <?php  
						            	}
						            ?>
						       		</div>
					            <div>
						            <span class="btn red btn-outline btn-file" style="display: none;">      
							            <input type="file" name="hinh_sp"  class="filestyle" id="business-logo" data-icon="false">							
						            </span>
					            </div>
					            </div>               
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Đơn Giá *</label>
						<div class="col-sm-2">
							<input type="text" class="form-control1" value="<?php echo $san_pham->don_gia ?>" id="focusedinput" name="don_gia" placeholder="Đơn Giá">
						</div>
						<label for="focusedinput" class="col-sm-2 control-label">/ Đồng</label> 
					</div>						

					<div class="form-group" align="center">
						<div class="col-sm-7">
							<button type="button" class="add_modal btn btn-primary">Cập Nhật</button>
							<button type="reset" class="btn btn-success">Làm lại</button>
							<button type="button" onclick="window.location='danh_sach_san_pham.php'" class="btn btn-danger">Thoát</button>
						</div>

						<!-- Modal -->									 
						<div class="modal fade" id="addModal" role="dialog">
						    <div class="modal-dialog modal-md">
						      	<div class="modal-content">
						        	<div class="modal-header">
						          		<button type="button" class="close" data-dismiss="modal">&times;</button>
						          		<h4 class="modal-title">Sửa Sản Phẩm</h4>
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