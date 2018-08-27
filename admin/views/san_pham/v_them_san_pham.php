<div class="agile-tables">
	<div class="table-heading">
		<h2><?php echo $title ?></h2>
		<div class="forms">
			<div class="form-three widget-shadow">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Mã Sản Phẩm *</label>
						<div class="col-sm-2">
							<input type="text" class="form-control1" name="ma_san_pham" id="ma_san_pham" placeholder="Mã Sản Phẩm">
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Mã *</div>
						</div>
						<div class="col-sm-2">
							<p class="help-block">(*) Bắt Buộc Nhập</p>
						</div>
					</div>					

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên Sản Phẩm *</label>
						<div class="col-sm-5">
							<input type="text" class="form-control1" name="ten_san_pham" id="ten_san_pham" placeholder="Tên Sản Phẩm">
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Tên Sản Phẩm *</div>
						</div>
					</div>

					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label">Loại Sản Phẩm *</label>
						<div class="col-sm-4">
						<select name="ma_loai_san_pham" id="selector1" class="form-control1">
						<?php  
							foreach ($loai_san_pham as $dslsp) 
							{	

								$result = in_array($dslsp,$ma_loai_san_pham)
						?>									
							<option value="<?php echo $dslsp->ma_loai_san_pham ?>"><?php echo $dslsp->ten_loai_san_pham ?></option>
						<?php 
							} 
						?>
						</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Nội Dung Tóm Tắt </label>
						<div class="col-sm-6">
							<textarea name="mo_ta_tom_tat" id="mo_ta_tom_tat" class="form-control tinymce"></textarea>
						</div>
					</div>						
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Nội Dung Chi Tiết </label>
						<div class="col-sm-6">
							<textarea name="mo_ta_chi_tiet" id="mo_ta_chi_tiet" class="form-control"></textarea>
						</div>
						
					</div>
					
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Hình *</label>
						<div class="col-sm-5">
							<div class="image-upload">			           	
					            <div class="fileinput fileinput-new logo-business" data-provides="fileinput">
						            <div class="fileinput-preview thumbnail set-background-default deal-show-image" data-trigger="fileinput" style="width: 160px; height: 100px;">
						              	<img style="width: 160px; height: 80px;" src="images/post.png">
						       		</div>
					            <div>
						            <span class="btn red btn-outline btn-file" style="display: none;">      
							            <input type="file" name="hinh_sp" class="filestyle" id="business-logo" data-icon="false">
						            </span>
						            <div class="kiemtra" style="display:none">Vui Lòng Chọn Hình *</div>
					            </div>
					            </div>               
							</div>
						</div>
						
					</div>


					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Đơn Giá *</label>
						<div class="col-sm-2">
							<input type="text" class="form-control1" id="don_gia" name="don_gia" placeholder="Đơn Giá">
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Đơn Giá *</div>
						</div>
						<label for="focusedinput" class="col-sm-2 control-label">/ Đồng</label> 
					</div>						

					<div class="form-group" align="center">
						<div class="col-sm-7">
							<button type="button" class="add_modal btn btn-primary cap_nhat">Cập Nhật</button>
							<button type="reset" class="btn btn-success">Làm lại</button>
							<button type="button" onclick="window.location='danh_sach_san_pham.php'" class="btn btn-danger">Thoát</button>
						</div>

						<!-- Modal -->									 
						<div class="modal fade" id="addModal" role="dialog">
						    <div class="modal-dialog modal-md">
						      	<div class="modal-content">
						        	<div class="modal-header">
						          		<button type="button" class="close" data-dismiss="modal">&times;</button>
						          		<h4 class="modal-title">Thêm Sản Phẩm</h4>
						        	</div>
						        	<div class="modal-body">
						         		<p>Bạn chắc có muốn lưu không ?</p>
						       		</div>
							        <div class="modal-footer">
							        	<button type="submit" id="btn_cap_nhat" class="btn btn btn-primary" name="btn_cap_nhat">Lưu</button>
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


<!-- Start Validate form -->
<script type="text/javascript">
	$(".cap_nhat").click(function(){
	  	var ma_san_pham = $("#ma_san_pham");
	  	var ten_san_pham = $("#ten_san_pham");
	  	var hinh = $("#business-logo");
	  	var don_gia = $("#don_gia");
	 	var elements = [ma_san_pham,ten_san_pham,hinh,don_gia]; 
	  	var errors = validateInput(elements); 
		validateOK(elements);
		// alert(errors);
	  	if(errors > 0 ){
	    	return;
	 	}
	 	else
	 	{
			$('#addModal').modal('show'); 
	 	}
	})
	function validateOK(elements) 
	{
	    $.each(elements, function() {
	        this.keydown(function(e) { 
	            $(this).parent().removeClass('has-error');
	        });
	        this.change(function(){
	            if($(this).find('.select2-selection')){
	                $('.select2-selection').removeClass('has-error');
	            }
	            $(this).parent().removeClass('has-error'); 
	        });    
	    });
	}
    function validateInput(elements){
        var error = 0;
        $.each(elements, function(){
            if($(this).val() == ""){
                $(this).parent().addClass('has-error'); 
    			$(".kiemtra").show();
                error ++;      
            } 
            else 
            {
                $(this).parent().removeClass('has-error');
    			$(".kiemtra").hide();
            }
        });
        return error;
    }
</script>
<!-- End Validate form -->
