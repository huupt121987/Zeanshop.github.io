<h2>Danh Sách Hóa Đơn</h2>

<?php
if(count($hoa_dons)>0){ ?>
<table cellpadding="0">
	<thead>
		<tr>
			<th class="th1">Mã hóa đơn</th>
			<th class="th2">Ngày hóa đơn</th>
			<th class="th3">Tổng tiền</th>
			<th class="th4">Hình thức thanh toán</th>
			<th class="th4">Xem chi tiết</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		foreach($hoa_dons as $hds)
		{
		?>
		<tr>
			<td class="td1"><?php echo $hds->ma_hoa_don ?></td>
			<td class="td2"><?php echo date("d/m/Y",strtotime($hds->ngay_hoa_don)) ?> </td>
			<td class="td3"><?php echo number_format($hds->tong_tien) ?> VNĐ</td>
			<td class="td4"><?php echo $hds->hinh_thuc_thanh_toan ?></td>
			<td class="td5"><a href="javascript:void(0)" data-toggle="modal" data-target="#chitiet<?php echo $hds->ma_hoa_don ?>">Xem</a></td>
		</tr>
		<?php
			include("v_customer_3_modal.php");
		}
		?>
	</tbody>
</table>
<?php
}
else
{
	echo "<h3>Bạn chưa mua hàng</h3>";
}
?>