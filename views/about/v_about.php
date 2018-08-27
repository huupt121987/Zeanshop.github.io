<div class="container">
	<div class="col-md-3 product-price">
		<div class="rsidebar span_1_of_left">
			<ul class="left-customer" id="about">
				<?php foreach($bai_viets as $bvs){ ?>
				<li><a href="javascript:void(0)" id="mbv<?php echo $bvs->ma_bai_viet ?>" ma_bai_viet="<?php echo $bvs->ma_bai_viet ?>"><?php  echo $bvs->tieu_de ?></a>
				<?php } ?>
			</ul>	
		</div>
	</div>
	<div class="col-md-9 customer" id="show_bai_viet">
		<h2><?php echo $bai_viets[0]->tieu_de ?></h2>
		<p style="width: 70%"><?php echo $bai_viets[0]->noi_dung ?></p>
	</div>	
</div>
