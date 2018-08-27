<div class="agile-tables">
	<div class="table-heading">
		<h2><?php echo $title ?></h2>
		<div class="forms">
			<div class="form-three widget-shadow">
				<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Họ Và Tên *</label>
						<div class="col-sm-4">
							<input type="text" class="form-control1" name="ho_ten" id="ho_ten" placeholder="Họ Và Tên">
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Họ Và Tên *</div>
						</div>
						<div class="col-sm-2">
							<p class="help-block">(*) Bắt Buộc Nhập</p>
						</div>
					</div>					

					<div class="form-group">
						<label for="selector1" class="col-sm-2 control-label">Chức Vụ *</label>
						<div class="col-sm-2">
						<select name="ma_loai_nguoi_dung" id="selector1" class="form-control1">
						<?php  
							foreach ($loai_nguoi_dung as $dslnd) 
							{	

								$result = in_array($dslnd,$ma_loai_nguoi_dung)
						?>									
							<option value="<?php echo $dslnd->ma_loai_nguoi_dung ?>"><?php echo $dslnd->ten_loai_nguoi_dung ?></option>
						<?php 
							} 
						?>
						</select>
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên Đăng Nhập *</label>
						<div class="col-sm-3 ">
							<input type="text" class="form-control1" name="ten_dang_nhap" id="ten_dang_nhap" placeholder="Tên Đăng Nhập">
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Tên Đăng Nhập *</div>
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Email *</label>
						<div class="col-sm-4">
							<input type="text" class="form-control1" name="email" id="email" placeholder="Email">
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Email *</div>
						</div>
					</div>

					<div class="form-group">
					<label for="radio" class="col-sm-2 control-label">Kích Hoạt *</label>
						<div class="col-sm-8">
							<div class="radio-inline"><label><input type="radio" name='active' checked="checked" value="1">Kích Hoạt</label></div>
							<div class="radio-inline"><label><input type="radio" name='active' value="0">Không</label></div>
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Password *</label>
						<div class="col-sm-3">
							<input type="password" class="form-control1" id="password" name="password" placeholder="password">
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Mật Khẩu *</div>
						</div>
					</div>	

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Re-Password *</label>
						<div class="col-sm-3">
							<input type="password" class="form-control1" id="repassword" name="re-password" placeholder="Re-password">
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Lại Mật Khẩu *</div>
						</div>
					</div>
										
					<div class="form-group" align="center">
						<div class="col-sm-7">
							<button type="button" class="add_modal btn btn-primary cap_nhat">Cập Nhật</button>
							<button type="reset" class="btn btn-success">Làm lại</button>
							<button type="button" onclick="window.location='danh_sach_nguoi_dung.php'" class="btn btn-danger">Thoát</button>
						</div>

						<!-- Modal -->									 
						<div class="modal fade" id="addModal" role="dialog">
						    <div class="modal-dialog modal-md">
						      	<div class="modal-content">
						        	<div class="modal-header">
						          		<button type="button" class="close" data-dismiss="modal">&times;</button>
						          		<h4 class="modal-title">Thêm Nhân Viên</h4>
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
	  	var ho_ten = $("#ho_ten");
	  	var ten_dang_nhap = $("#ten_dang_nhap");
	  	var email = $("#email");
	  	var password = $("#password");
	  	var repassword = $("#repassword");
	 	var elements = [ho_ten,ten_dang_nhap,email,password,repassword]; 
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
