<!DOCTYPE html>
<!-- start head -->
<?php  
	include("head_admin.php");
?>
<!-- End head -->

<!-- start body -->
<body class="dashboard-page">
	<script>
	        var theme = $.cookie('protonTheme') || 'default';
	        $('body').removeClass (function (index, css) {
	            return (css.match (/\btheme-\S+/g) || []).join(' ');
	        });
	        if (theme !== 'default') $('body').addClass(theme);
        </script>
    <!--Start main-menu -->
	<?php  
		include("main_menu_admin.php");
	?>
	<!--End main-menu -->

	<!-- Start Header -->
	<?php  
		include("header_admin.php");
	?>
		<!-- End Header -->

		<!-- Start Content -->
		<?php
		if(isset($view))
		{
			include($view);
		}
		else
		{
			include("content_admin.php");
		}
		

		?>
		<!-- End Content -->

		<!-- Start footer -->
		<?php  
			include("footer_admin.php");
		?>
		<!-- End footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	
</body>
<!-- End body -->
</html>
