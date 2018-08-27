<div class="agile-tables">
	<div class="table-heading">
		<h2><?php echo $title ?></h2>
		<div class="forms">
			<div class="form-three widget-shadow">
				<form class="form-horizontal" action="" method="post">
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Tên Khách Hàng *</label>
						<div class="col-sm-5">
							<input type="text" class="form-control1" name="ten_khach_hang" id="focusedinput" placeholder="Tên Khách Hàng" value="<?php echo $khach_hang->ten_khach_hang ?>" >
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Tên Khách Hàng *</div>
						</div>
						<div class="col-sm-2">
							<p class="help-block">(*) Bắt Buộc Nhập</p>
						</div>
					</div>
					<div class="form-group">
					<?php $chk1=$khach_hang->phai==0?"checked":"" ?>
					<?php $chk2=$khach_hang->phai==1?"checked":"" ?>
					<label for="radio" class="col-sm-2 control-label">Giới Tính *</label>
						<div class="col-sm-8">
							<div class="radio-inline"><label><input type="radio" name='phai' <?php echo $chk1 ?> value=0 >Nam</label></div>
							<div class="radio-inline"><label><input type="radio" name="phai" <?php echo $chk2 ?> value=1 > Nữ</label></div>
						</div>
					</div>
					
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Ngày Sinh</label>
						<div class="col-sm-2">
							<input type="text" class="form-control1" id="mytarget" name="ngay_sinh" placeholder="Ngày Sinh"  value="<?php echo date('d/m/Y',strtotime($khach_hang->ngay_sinh)) ?>" >
							<div class="monthly" id="mycalendar2"></div>
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Điện Thoại *</div>
						</div>
					</div>
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Địa Chỉ *</label>
						<div class="col-sm-5">
							<input type="text" class="form-control1" id="focusedinput" name="dia_chi" placeholder="Địa Chỉ" value="<?php echo $khach_hang->dia_chi ?>">
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Địa Chỉ *</div>
						</div>
					</div>					
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Số Điện Thoại</label>
						<div class="col-sm-3">
							<input type="text" class="form-control1" id="focusedinput" name="dien_thoai" placeholder="Số Điện Thoại" value="<?php echo $khach_hang->dien_thoai ?>">
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Điện Thoại *</div>
						</div>
					</div>		
					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-5">
							<input type="text" class="form-control1" id="focusedinput" name="email" placeholder="Email" value="<?php echo $khach_hang->email ?>">
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Email *</div>
						</div>
					</div>

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Password *</label>
						<div class="col-sm-3">
							<input type="password" class="form-control1" id="focusedinput" name="password" placeholder="password" value="<?php echo $khach_hang->password ?>" >
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Mật Khẩu *</div>
						</div>
					</div>	

					<div class="form-group">
						<label for="focusedinput" class="col-sm-2 control-label">Re-Password *</label>
						<div class="col-sm-3">
							<input type="password" class="form-control1" id="focusedinput" name="re-password" placeholder="Re-password" value="<?php echo $khach_hang->password ?>" >
							<div class="kiemtra" style="display:none">Vui Lòng Nhập Lại Mật Khẩu *</div>
						</div>
					</div>

					<div class="form-group" align="center">
						<div class="col-sm-7">
							<button type="button" class="add_modal btn btn-primary cap_nhat">Cập Nhật</button>
							<button type="button" onclick="window.location='danh_sach_khach_hang.php'" class="btn btn-danger">Thoát</button>
						</div>

						<!-- Modal -->									 
						<div class="modal fade" id="addModal" role="dialog">
						    <div class="modal-dialog modal-md">
						      	<div class="modal-content">
						        	<div class="modal-header">
						          		<button type="button" class="close" data-dismiss="modal">&times;</button>
						          		<h4 class="modal-title"><?php echo $title ?></h4>
						        	</div>
						        	<div class="modal-body">
						         		<p>Bạn chắc có muốn lưu không ?</p>
						       		</div>
							        <div class="modal-footer">
							        	<button type="submit" class="btn btn btn-primary" name="btn_cap_nhat">Lưu</button>
							        	<button type="button" class="btn btn-danger btn-ms" data-dismiss="modal" >Thoát</button>
							        </div>
						      	</div>
						    </div>
						</div>
						<!-- END Modal -->
						<!-- onclick="window.location='sua_khach_hang.php'" -->

					</div>		
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End modal -->

<script type="text/javascript">
	$(".cap_nhat").click(function(){
	  	var ten_khach_hang = $("#ten_khach_hang");
	  	var ngay_sinh = $(".ngay_sinh");
	  	var dia_chi = $("#dia_chi");
	  	var dien_thoai = $("#dien_thoai");
	  	var email = $("#email");
	  	var password = $("#password");
	  	var repassword = $("#repassword");
	 	var elements = [ten_khach_hang,ngay_sinh,dia_chi,dien_thoai,email,password,repassword]; 
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
