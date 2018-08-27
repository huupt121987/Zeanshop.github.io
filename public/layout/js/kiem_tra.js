function Kiem_tra_dang_nhap(){
	var email_dang_nhap = document.getElementById('email_dang_nhap');
	var pass_dang_nhap = document.getElementById('pass_dang_nhap');
	if(email_dang_nhap.value == "")
	{
		alert("Vui lòng nhập tài khoản");
		email_dang_nhap.focus();
		return false;
	}
	
	if(pass_dang_nhap.value == "")
	{
		alert("Vui lòng nhập mật khẩu");
		pass_dang_nhap.focus();
		return false;
	}
	
}
function Kiem_tra_dang_ky(){
	var ho_ten_dang_ky = document.getElementById('ho_ten_dang_ky');
	var ngay_sinh_dang_ky = document.getElementById('ngay_sinh_dang_ky');
	var sdt_dang_ky = document.getElementById('sdt_dang_ky');
	var dia_chi_dang_ky = document.getElementById('dia_chi_dang_ky');
	var email_dang_ky = document.getElementById('email_dang_ky');
    var atpos = email_dang_ky.value.indexOf("@");
    var dotpos = email_dang_ky.value.lastIndexOf(".");
	var pass_dang_ky = document.getElementById('pass_dang_ky');

	if(ho_ten_dang_ky.value == "")
	{
		alert("Vui lòng nhập họ tên");
		ho_ten_dang_ky.focus();
		return false;
	}

	if(ngay_sinh_dang_ky.value == "")
	{
		alert("Vui lòng chọn ngày sinh");
		// ho_ten_dang_ky.focus();
		return false;
	}

	if(sdt_dang_ky.value == "")
	{
		alert("Vui lòng nhập số điện thoại");
		sdt_dang_ky.focus();
		return false;
	}

	if(isNaN(sdt_dang_ky.value))
	{
		alert("Nhập số điện thoại phải là số");
		sdt_dang_ky.select();
		return false;
	}

	if(sdt_dang_ky.value.length<10 || sdt_dang_ky.value.length>11)
	{
		alert("Số điện thoại 10 hoặc 11 số");
		sdt_dang_ky.select();
		return false;
	}

	if(dia_chi_dang_ky.value == "")
	{
		alert("Vui lòng nhập địa chỉ");
		dia_chi_dang_ky.focus();
		return false;
	}

	if(email_dang_ky.value == "")
	{
		alert("Vui lòng nhập tài khoản");
		email_dang_ky.focus();
		return false;
	}
	// else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	// {
	// 	alert("Bạn nhập sai cấu trúc email");
	// 	email_dang_ky.select();
	// 	return false;
	// }
	
	if(pass_dang_ky.value == "")
	{
		alert("Vui lòng nhập mật khẩu");
		pass_dang_ky.focus();
		return false;
	}
	
}

function Kiem_tra_cap_nhat()
{
	var ho_ten_cap_nhat = document.getElementById('ho_ten_cap_nhat');
	var ngay_sinh_cap_nhat = document.getElementById('ngay_sinh_cap_nhat');
	var dia_chi_cap_nhat = document.getElementById('dia_chi_cap_nhat');
	var dien_thoai_cap_nhat = document.getElementById('dien_thoai_cap_nhat');
	var email_cap_nhat = document.getElementById('email_cap_nhat');
	
}

