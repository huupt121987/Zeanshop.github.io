function Tim_san_pham(gtTim)
{
	// ajax
	//b1
	var xmlhttp=null;
	if (window.XMLHttpRequest)
	{
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}

	//b2 
	/* sử dụng POST */
	xmlhttp.open("POST","xl_tim_san_pham.php",true);
	
	//b3
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // Hoàn thành và tìm thấy trang
		{
			document.getElementById("hienthi_timkiem").innerHTML=xmlhttp.responseText;
		}
	}
	//b4
	var data = new FormData();
	data.append('gtTim',gtTim);
	xmlhttp.send(data);
}