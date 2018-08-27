<?php
@session_start();
include("c_account.php");
class C_gio_hang{
    protected $smarty;
    function xem_gio_hang()
    {
        $gio_hang=$this->layGioHang();
		
        if($gio_hang) //Nếu có giỏ hàng
        {
            $gio_hang_san_pham=array();
            foreach($gio_hang as $key=>$value)
            {
                $gio_hang_san_pham[$key]=$value;
            }
			
            if($gio_hang_san_pham) //Nếu có chọn sản phẩm
            {
                $_SESSION['gio_hang_san_pham']=$gio_hang_san_pham;
                //Lay_thong_tin_san_pham
                $ds_san_pham = $this->Lay_thong_tin_san_pham($gio_hang_san_pham);
            }
        }
        
        // Models
            // loai_mat_hang
            include("models/m_loai_mat_hang.php");
            $m_loai_mat_hang = new M_loai_mat_hang();
            $loai_mat_hangs = $m_loai_mat_hang->Doc_loai_mat_hang();
            // loai_san_pham
            include("models/m_loai_san_pham.php");
            $m_loai_san_pham = new M_loai_san_pham();
            

        // Adds
        $tieu_de = "Zean Shop";
        $view = "views/cart/v_cart.php";

        // Views
        include("include/layout.php");
    }
    function layGioHang() {
        if(isset($_SESSION['gioHang']))
            return $_SESSION['gioHang'];
        else
            return false;
    }
	
    function Lay_thong_tin_san_pham($san_pham)
        {
            $ma_san_pham=array();
            foreach($san_pham as $key=>$value)
            {
                $ma_san_pham[]="'".$key."'";
            }
            $ma_san_pham=implode(",",$ma_san_pham);
            include_once('models/m_san_pham.php');
            $m_san_pham=new M_san_pham();
            
            $ds_san_pham=$m_san_pham->Lay_san_pham_cho_gio_hang($ma_san_pham);
            $ds_san_pham_gio_hang=array(); //Ðua s? lu?ng vào $ds_thuc_don
            foreach($ds_san_pham as $item)
            {
                $item->so_luong=$san_pham[$item->ma_san_pham];
                $ds_san_pham_gio_hang[]=$item;
            }
            return $ds_san_pham_gio_hang;
        }

    function themGioHang($maSP, $so_luong, $donGia) {
        if($so_luong>0) {
            
			if(isset($_SESSION['gioHang'][$maSP])) {
                   $_SESSION['gioHang'][$maSP] += $so_luong;
            }
            else{
                $_SESSION['gioHang'][$maSP] = $so_luong;
            }
            if(isset($_SESSION['thanh_tien']))
            {
                $_SESSION['thanh_tien']= @$_SESSION['thanh_tien']+$so_luong*$donGia;
                $_SESSION['so_luong'] = @$_SESSION['so_luong']+$so_luong;
            }
            else
            {
                $_SESSION['thanh_tien'] = $so_luong*$donGia;
                $_SESSION['so_luong'] = $so_luong;    
            }
        	
		}
		
        elseif($so_luong==0)
        {
            xoaMatHang($maSP, $donGia);
        }
    }
    function xoaMatHang($maSP, $donGia) {
        $gioHang = $this->layGioHang();
        $gioHangMoi = array();
		foreach($gioHang as $key=>$value)
		{
			if($key!=$maSP)
				$gioHangMoi[$key]=$value;
			else
            {
                $_SESSION['thanh_tien']-=$gioHang[$maSP]*$donGia;
                $_SESSION['so_luong']-=$gioHang[$maSP];
            }	
		}
		if(!empty($gioHangMoi)) {
			$_SESSION['gioHang']=$gioHangMoi;
        }
		else {
			$this->xoaGioHang();
        }
    }        
    function xoaGioHang() {
        unset($_SESSION['gioHang']);
        unset($_SESSION['thanh_tien']);
        unset($_SESSION['so_luong']);
    }
    function thanh_tien() {
        if(isset($_SESSION['thanh_tien']))
            return $_SESSION['thanh_tien'];
        else
            return 0;
    }
    function so_luong() {
        if(isset($_SESSION['so_luong']))
            return $_SESSION['so_luong'];
        else
            return 0;
    }
    function tongSoMatHang() {
        if(isset($_SESSION['so_luong']))
            return $_SESSION['so_luong'];
        else
            return 0;
    }
    
    function capNhatGioHang($maSP,$so_luong,$donGia) {
        if(!is_numeric($so_luong))
            return false;
        $so_luong = (int)$so_luong;
        if($so_luong>0) 
		{
            
			$_SESSION['thanh_tien']-=@$_SESSION['gioHang'][$maSP]*$donGia;
			$_SESSION['thanh_tien']+=$so_luong*$donGia;
			
			$_SESSION['so_luong']-=@$_SESSION['gioHang'][$maSP];
			$_SESSION['so_luong'] +=$so_luong;
			
			$_SESSION['gioHang'][$maSP]=$so_luong;
            
			return false;
        }
        if($so_luong ==0) 
            $this->xoaMatHang($maSP, $donGia);
        return false;
    }
}
?>