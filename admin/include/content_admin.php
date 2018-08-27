<!-- Start Content -->
<div class="main-grid">
	
	<div class="social grid">
			<div class="grid-info">
				<div class="col-md-3 top-comment-grid">
				<!-- Start link Hóa Đơn -->
				<a href="danh_sach_hoa_don.php">
					<div class="comments likes">
						<div class="comments-icon">
							<i class="fa fa-files-o"></i>
						</div>
						<div class="comments-info likes-info">
							<h3><?php echo $tonghd ?></h3>
							<a href="danh_sach_hoa_don.php">Hóa Đơn</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</a>
				<!-- End link Hóa Đơn -->
				</div>
				<div class="col-md-3 top-comment-grid">

				<!-- Start link Khách Hàng -->
				<a href="danh_sach_khach_hang.php">
					<div class="comments">
						<div class="comments-icon">
							<i class="fa fa-users"></i>
						</div>
						<div class="comments-info">
							<h3><?php echo $tongKh ?></h3>
							<a href="danh_sach_khach_hang.php">Khách Hàng</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</a>
				<!-- End link Khách Hàng -->

				</div>
				<div class="col-md-3 top-comment-grid">
				<!-- Start link sản phẩm -->
				<a href="danh_sach_san_pham.php">
					<div class="comments tweets">
						<div class="comments-icon">
							<i class="fa fa-cog"></i>
						</div>
						<div class="comments-info tweets-info">
							<h3><?php echo $tongsp ?></h3>
							<a href="danh_sach_san_pham.php">Sản Phẩm</a>
						</div>
						<div class="clearfix"> </div>
				</a>
				<!-- End link sản phẩm -->
					</div>
				</div>
				<div class="col-md-3 top-comment-grid">

				<a href="danh_sach_nguoi_dung.php">
					<div class="comments views">
						<div class="comments-icon">
							<i class="fa fa-user"></i>
						</div>
						<div class="comments-info views-info">
							<h3><?php echo $tongnd ?></h3>
							<a href="danh_sach_nguoi_dung.php">Nhân Viên</a>
						</div>
						<div class="clearfix"> </div>
				</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
	
	<div class="agile-grids">
		<div class="col-md-4 charts-right">
			<!-- area-chart -->
			<div class="area-grids">
				<div class="area-grids-heading">
					<h3>Hàng Tồn</h3>
				</div>
				<div id="graph4"></div>
				<script>
					Morris.Donut({
					  element: 'graph4',
					  data: [
						{value: 50, label: 'Bán', formatted: '50%' },
						{value: 30, label: 'Nhập', formatted: '30%' },
						{value: 20, label: 'Tồn Kho', formatted: '20%' },
						// {value: 5, label: 'A really really long label', formatted: 'at most 5%' }
					  ],
					  formatter: function (x, data) { return data.formatted; }
					});
				</script>

			</div>
			<!-- //area-chart -->
		</div>
		<div class="col-md-8 chart-left">
			<!-- Start Stacked Bars chart -->
			<div class="agile-bottom-grid">
				<div class="area-grids-heading">
					<h3>Báo Cáo Hàng Tháng</h3>
				</div>
				<div id="graph6"></div>
				<script>
				// Use Morris.Bar
				Morris.Bar({
				  element: 'graph6',
				  data: [
					{x: '2011 Q1', y: 0},
					{x: '2011 Q2', y: 1},
					{x: '2011 Q3', y: 2},
					{x: '2011 Q4', y: 3},
					{x: '2012 Q1', y: 4},
					{x: '2012 Q2', y: 5},
					{x: '2012 Q3', y: 6},
					{x: '2012 Q4', y: 7},
					{x: '2013 Q1', y: 8}
				  ],
				  xkey: 'x',
				  ykeys: ['y'],
				  labels: ['Y'],
				  barColors: function (row, series, type) {
					if (type === 'bar') {
					  var red = Math.ceil(255 * row.y / this.ymax);
					  return 'rgb(' + red + ',0,0)';
					}
					else {
					  return '#000';
					}
				  }
				});
				</script>
			</div>
			<!-- End Stacked Bars chart -->
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- End Content