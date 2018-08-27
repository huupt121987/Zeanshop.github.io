<script src="js/bootstrap.js"></script>
	<!-- input-forms -->
		<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {
				// show Valida's version.
				$('#version').valida( 'version' );
				// Exemple 1
				$('.valida').valida();

        // setup the partial validation
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});
			});
			
		</script>
		<!-- //input-forms -->
		<!--validator js-->
		<script src="js/validator.min.js"></script>
		<!--//validator js-->

<!-- Start calendar -->
<script type="text/javascript" src="js/monthly.js"></script>
<script type="text/javascript">
		$(window).load( function() {
			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});
			// $('#mycalendar').monthly({
			// 	mode: 'event',
			// 	xmlUrl: 'events.xml'
			// });
		});
	</script>
	<!-- End Calendar -->

<!-- Start footer -->
<div class="footer">
	<p>© 2017 Zean Shop . All Rights Reserved . Design by Zean Team</p>
</div>
<!-- End footer -->
<!-- input modal -->
<script type="text/javascript">
	jQuery(document).ready(function() { 
		$(".view_modal").click(function(e){
			
			var ma_san_pham=$(this).attr("ma_san_pham")
			$("#myModal_"+ ma_san_pham ).modal("show");
			return false; 
		}) 
	});
</script>
<!-- End modal -->


