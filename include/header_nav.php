<div class="container">
	<div class="head-top">
		
		<!-- Logo -->
		<div class="logo">
			<a href="."><img src="public/layout/images/logo.png" alt=""></a>	
		</div>
		<!-- END Logo -->
	
		<!-- Navigation -->
		<nav><ul>
			<li><a href=".">Trang chủ</a></li>
			<li><a href="about.php">Giới thiệu</a></li>
			<?php foreach($loai_mat_hangs as $lmhs){ ?>
			<li class="dropdown"><a class="dropdown-title" href="#lmh<?php echo $lmhs->ma_loai_mat_hang ?>"><?php echo $lmhs->ten_loai_mat_hang ?></a>
			    <div class="dropdown-content">
			    	<?php $loai_san_pham_theo_ma_loai_mat_hangs = $m_loai_san_pham->Doc_loai_san_pham_theo_ma_loai_mat_hang($lmhs->ma_loai_mat_hang);
			    	foreach($loai_san_pham_theo_ma_loai_mat_hangs as $lsp_theo_mlmhs)
			    	{
			    	?>
			        <a ma_loai_san_pham="<?php echo $lsp_theo_mlmhs->ma_loai_san_pham ?>" href="products.php?ma_loai_san_pham=<?php echo $lsp_theo_mlmhs->ma_loai_san_pham ?>"><?php echo $lsp_theo_mlmhs->ten_loai_san_pham ?></a>
			        <?php } ?>
			    </div>
			</li>
			<?php } ?>

			<li><a href="contact.php">Liên hệ</a></li>
		</ul></nav>
		<!-- END Navigation -->
		
		<div class="clearfix"> </div>
	</div>
</div>