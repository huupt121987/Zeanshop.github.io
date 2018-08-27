<?php
@session_start();
include("c_account.php");
class C_home
{
	public function Xem_trang_chu()
	{
		// Models
			// loai_mat_hang
			include("models/m_loai_mat_hang.php");
			$m_loai_mat_hang = new M_loai_mat_hang();
			$loai_mat_hangs = $m_loai_mat_hang->Doc_loai_mat_hang();
			// loai_san_pham
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham = new M_loai_san_pham();
			// san_pham
			include("models/m_san_pham.php");
			$san_pham = new M_san_pham();
			$san_pham_mois = $san_pham->Doc_san_pham_moi_home();
			$san_pham_hots = $san_pham->Doc_san_pham_ban_chay_home();

		// Adds
		$tieu_de = "Zean Shop";
		$view = "views/home/v_home.php";

		// Views
		include("include/layout.php");
	}
	public function Gioi_thieu()
	{
		// Models
			// loai_mat_hang
			include("models/m_loai_mat_hang.php");
			$m_loai_mat_hang = new M_loai_mat_hang();
			$loai_mat_hangs = $m_loai_mat_hang->Doc_loai_mat_hang();
			// loai_san_pham
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham = new M_loai_san_pham();
			// loai_san_pham
			include("models/m_bai_viet.php");
			$m_bai_viet = new M_bai_viet();
			$bai_viets = $m_bai_viet->Doc_bai_viet();
			

		// Adds
		$tieu_de = "Zean Shop";
		$view = "views/about/v_about.php";
		// Views
		include("include/layout.php");
	}
	public function Lien_he()
	{
		// Models
			// loai_mat_hang
			include("models/m_loai_mat_hang.php");
			$m_loai_mat_hang = new M_loai_mat_hang();
			$loai_mat_hangs = $m_loai_mat_hang->Doc_loai_mat_hang();
			// loai_san_pham
			include("models/m_loai_san_pham.php");
			$m_loai_san_pham = new M_loai_san_pham();
			
		// Captcha
		function taocaptcha()
		{
			if(file_exists("public/layout/images/captcha.gif"))
		            unlink("public/layout/images/captcha.gif");
					
			$captcha = imagecreatefromgif('public/layout/images/cross.gif');
			//set some variables
			$black = imagecolorallocate($captcha, 0, 0, 0);
			$white = imagecolorallocate($captcha, 225, 225, 225);
			$red = imagecolorallocate($captcha, 225, 0, 0);
			$color = imagecolorallocate($captcha, 52, 152, 219);
			$font = 'public/layout/fonts/arial.ttf';
			//random stuff
			$string = md5(microtime() * time());
			$text = substr($string, 0, 5);
			$_SESSION['code'] = $text;
			//create some stupid stuff
			imagettftext($captcha, 14, 5, 5, 25, $color, $font, $text);
			// begin to create image
			//header('content-type: image/png');
			imagepng($captcha,"public/layout/images/captcha.gif");
			//clean up
			imagedestroy($captcha);
		}
		// Gửi mail
		if(!isset($_POST["btn_lien_he"]))
		{
			taocaptcha();
		}
		if(isset($_POST['btn_lien_he']))
		{
			require_once("smtpgmail/class.phpmailer.php");
			$mail=new PHPMailer();
			$mail->IsSMTP(); // Chứng thực SMTP
			$mail->SMTPAuth=TRUE;
			$mail->Host="smtp.gmail.com";
			$mail->Port=465;
			$mail->SMTPSecure="ssl";
			/* Server google*/
			$mail->Username="happyghostttg@gmail.com"; // Nhập mail 
			$mail->Password="vinhphucpro0736539459"; // Mật khẩu
			/* Server google*/
			$mail->CharSet="utf-8";
			$noidung="Họ tên:" .$_POST["ho_ten_lien_he"];
			$noidung .="Email:" .$_POST["email_lien_he"];
			$noidung .="<hr><br>Chủ đề:" .$_POST["chu_de_lien_he"];
			$noidung .="<br>Nội dung:" .$_POST["noi_dung_lien_he"];
			$mail->SetFrom($_POST["email_lien_he"],$_POST["ho_ten_lien_he"]);
			$mail->Subject=$_POST["chu_de_lien_he"];
			$mail->MsgHTML($noidung);
			$mail->AddAddress("happyghostttg@gmail.com","Phúc Ngô"); // Mail người nhận
			$path="public/layout/images/captcha.gif";
			$mail->AddAttachment($path,"captcha.gif");
			// if($_POST["chk"]==1)
			// {
			// 	$mail->AddBCC($_POST["email_lien_he"],"Name");
			// }
			if($_POST["security_code"]==$_SESSION["code"])
			{
				if(!$mail->Send())
				{
					echo "Mail lỗi".$mail->ErrorInfo;
					header("location: contact.php");
				}
				else
				{
					echo "Gửi mail thành công";
				}
				
			}
			else
			{
				$tb_lien_he = "Nhập mã bảo vệ...";
			}
		}


		// Adds
		$tieu_de = "Zean Shop";
		$view = "views/contact/v_contact.php";

		// Views
		include("include/layout.php");
	}
	public function Thoat_dang_nhap()
	{
		session_destroy();
		header("Location: .");
	}
}
?>