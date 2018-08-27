<div class="container">
	<div class="col-md-3 product-price">
		<div class="rsidebar span_1_of_left">
			<ul class="left-customer">
<!-- 				<li><a href="javascript:void(0)">Địa chỉ: 357 Lê Hồng Phong, Phường 2,Quận 10, Hồ Chí Minh</a>
				<li><a href="javascript:void(0)">Đổi mật khẩu</a>
				<li><a href="javascript:void(0)">Hóa đơn</a> -->
			</ul>	
		</div>
	</div>
	<div class="col-md-9 contacts">
		<h2>Liên hệ với chúng tôi </h2>
		<form action="" method="post">
			<table width="70%" border="0">
			<tr>
				<td width="20%">Họ tên</td>
				<td width="80%">
					<input type="text" name="ho_ten_lien_he" id="ho_ten_lien_he" value="" placeholder="Nhập họ tên">
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="text" name="email_lien_he"  value="" placeholder="Nhập email">
				</td>
			</tr>
			<tr>
				<td>Chủ đề</td>
				<td><input type="text" name="chu_de_lien_he" id="chu_de_lien_he" value="" placeholder="Nhập chủ đề"/>
				</td>
			</tr>
			<tr>
				<td>Nội dung</td>
				<td>
					<textarea name="noi_dung_lien_he" id="noi_dung_lien_he" placeholder="Nhập nội dung"></textarea>
				</td>
			</tr>
			<tr>
				<td>Nhập mã bảo vệ</td>
				<td>
					<input type="text" id="security_code" name="security_code" style="width:20% !important;" />
					&nbsp;<img src="public/layout/images/captcha.gif" alt="captcha" />

					<input type="image" name="th_recapcha" src="public/layout/images/refresh.jpg" style="width:20px" value="recapcha"  />
					<span><?php echo isset($tb_lien_he)?$tb_lien_he:"" ?></span>
				</td>
			</tr>
<!-- 			<tr>
				<td>Gởi cho bạn: </td>
				<td align="left">
					<input type="checkbox" name="chk" value="1" />
				</td>
			</tr> -->
			</table>

			<p>
				<button class="btn_customer" type="submit" name="btn_lien_he" onclick="return kiemtralienhe()">Cập nhật</button>
			</p>

		</form>	

	</div>	
</div>
<script>
// Liên hệ
function isEmail(email) 
{   
          var isValid = false;   
           var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;   
            if(regex.test(email)) {   
                isValid = true;   
           }
            return isValid;   
}
function kiemtralienhe()
{
  if(document.getElementById("ho_ten_lien_he").value=='')
  {
    alert('Nhập họ tên của bạn');
    document.getElementById("ho_ten_lien_he").focus();
    return false; 
  }
  else if(document.getElementById("email_lien_he").value=='')
  {
    alert('Nhập Email của bạn');
    document.getElementById("email_lien_he").focus();
    return false; 
  }
  // var email = document.getElementById("email_lien_he").value;   
  //  if(!isEmail(email)) 
  //  {   
  //     alert(email + ' là một địa chỉ email sai');       
  //     document.getElementById("email_lien_he").focus();
  //     return false;
  //  } 
  
  else if(document.getElementById("chu_de_lien_he").value=='')
  {
    alert('Nhập Tiêu đề');
    document.getElementById("chu_de_lien_he").focus();
    return false; 
  }
  else if(document.getElementById("noi_dung_lien_he").value=='')
  {
    alert('Nhập nội dung');
    document.getElementById("noi_dung_lien_he").focus();
    return false; 
  }
  else if(document.getElementById('security_code').value=='')
  {
    alert('Nhập mã bảo vệ');
    document.getElementById('security_code').focus();
    return false; 
  }

  // return true;  
}
</script>
