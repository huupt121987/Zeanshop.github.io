<!--Start main-menu -->
<nav class="main-menu">
	<ul>
		<li>
			<a href="quan_tri.php">
				<i class="fa fa-home nav_icon"></i>
				<span class="nav-text">
				Trang Chủ
				</span>
			</a>
		</li>

		<li class="has-subnav">
			<a href="danh_sach_san_pham.php">
			<i class="fa fa-cogs" aria-hidden="true"></i>
			<span class="nav-text">
				Sản Phẩm
			</span>
			<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
			</a>
			<ul>
				<li>
				<a class="subnav-text" href="danh_sach_san_pham.php">
				Danh Sách
				</a>
				</li>
				<li>
				<a class="subnav-text" href="them_san_pham.php">
				Thêm Sản Phẩm
				</a>
				</li>
			</ul>
		</li>

		<li class="has-subnav">
			<a href="danh_sach_khach_hang.php">
				<i class="fa fa-file-text-o nav_icon"></i>
					<span class="nav-text">Khách Hàng</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
			</a>
			<ul>
				<li>
					<a class="subnav-text" href="danh_sach_khach_hang.php">
						Danh Sách
					</a>
				</li>
				<li>
					<a class="subnav-text" href="them_khach_hang.php">
						Thêm Khách Hàng
					</a>
				</li>
			</ul>
		</li>

		<li class="has-subnav">
			<a href="danh_sach_nguoi_dung.php">
			<i class="fa fa-file-text-o nav_icon"></i>
			<span class="nav-text">
			Nhân Viên
			</span>
			<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
			</a>
			<ul>
				<li>
					<a class="subnav-text" href="danh_sach_nguoi_dung.php">Danh Sách</a>
				</li>
				<li>
					<a class="subnav-text" href="them_nguoi_dung.php">Thêm Nhân Viên</a>
				</li>
			</ul>
		</li>
		<li class="has-subnav">
			<a href="danh_sach_hoa_don.php">
				<i class="fa fa-file-text-o nav_icon"></i>
					<span class="nav-text">Hóa Đơn</span>
				<i class="icon-angle-right"></i><i class="icon-angle-down"></i>
			</a>
			<ul>
				<li>
					<a class="subnav-text" href="danh_sach_hoa_don.php">
						Danh Sách
					</a>
				</li>
				<li>
					<a class="subnav-text" href="them_hoa_don.php">
						Thêm Hóa Đơn
					</a>
				</li>
			</ul>
		</li>
		
		<li>
			<a href="cap_nhat.php">
				<i class="icon-font nav-icon"></i>
				<span class="nav-text">
				Bài Viết
				</span>
			</a>
		</li>
		
		<li>
			<a href="cap_nhat.php">
				<i class="fa fa-list-ul nav-icon"></i>
				<span class="nav-text">
				Khuyến Mãi
				</span>
			</a>
		</li>
		<li>
			<a href="ban_do.php">
				<i class="fa fa-map-marker" aria-hidden="true"></i>
				<span class="nav-text">
				Bản Đồ
				</span>
			</a>
		</li>
	</ul>
	<ul class="logout">
		<li>
		<a href="../index.php" onclick="thoat_dang_nhap()">
		<i class="icon-off nav-icon"></i>
		<span class="nav-text">
		Thoát
		</span>
		</a>
		</li>
	</ul>
</nav>
<!--End main-menu -->