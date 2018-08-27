
function tim_khach_hang(tim_kiem)
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
	xmlhttp.open("POST","tim_kiem_khach_hang.php",true);
	
	//b3
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // Hoàn thành và tìm thấy trang
		{
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	//b4
	var data = new FormData();
	data.append('tim_kiem',tim_kiem);
	xmlhttp.send(data);
}

function tim_san_pham(tim_kiem)
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
	xmlhttp.open("POST","tim_kiem_san_pham.php",true);
	
	//b3
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // Hoàn thành và tìm thấy trang
		{
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
			

		}
	}
	//b4
	var data = new FormData();
	data.append('tim_kiem',tim_kiem);
	xmlhttp.send(data);
}

function tim_hoa_don(tim_kiem)
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
	xmlhttp.open("POST","tim_kiem_hoa_don.php",true);
	
	//b3
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // Hoàn thành và tìm thấy trang
		{
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	//b4
	var data = new FormData();
	data.append('tim_kiem',tim_kiem);
	xmlhttp.send(data);
}


function tim_nguoi_dung(tim_kiem)
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
	xmlhttp.open("POST","tim_kiem_nguoi_dung.php",true);
	
	//b3
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200) // Hoàn thành và tìm thấy trang
		{
			document.getElementById("hienthi").innerHTML=xmlhttp.responseText;
		}
	}
	//b4
	var data = new FormData();
	data.append('tim_kiem',tim_kiem);
	xmlhttp.send(data);
}
