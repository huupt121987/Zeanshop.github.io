<?php  

	@session_start();
	$err="";
	if(isset($_SESSION["error"]))
	{
		$err=$_SESSION["error"];
		$_SESSION["error"]="";
	}
	

?>

<!DOCTYPE html>
<head>
<title>Đăng Nhập</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
</head>
<body class="signup-body">
		<div class="agile-signup">	
			
			<div class="content2">
				<div class="grids-heading gallery-heading signup-heading">
					<h3>ĐĂNG NHẬP</h3>
				</div>
				<form action="quan_tri.php" method="post">
					<input type="text" name="ten_dang_nhap" required="true" value="Tên Đăng Nhập" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tên Đăng Nhập';}">
					<input type="password" name="mat_khau" value="Mật Khẩu" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mật Khẩu';}">
					<input type="submit" class="register" name="btn_dang_nhap" value="Đăng Nhập">
				</form>
				<div class="signin-text">
					<div class="text-left">
						<p><a href="#">Quên Mật Khẩu ?</a></p>
					</div>
					<div class="text-right">
						<p><a href="dang_ky.php">Đăng Ký</a></p>
						<div style="color: #ED1515"><?php echo $err ?></div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<hr>
				<!-- <h5>- Hoặc -</h5> -->
			<!-- 	<div class="footer-icons">
					<ul>
						<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="twitter facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="twitter chrome"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#" class="twitter dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					</ul>
				</div> -->
				<a href="../index.php">Trở Về Trang Chủ</a>
			</div>
			
			<!-- footer -->
			<div class="copyright">
				<p>© 2017 Zean Shop . All Rights Reserved . Design by Zean Team</p>
			</div>
			<!-- //footer -->
		</div>
</body>
</html>
