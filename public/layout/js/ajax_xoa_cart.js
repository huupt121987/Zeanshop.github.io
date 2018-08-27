$(document).ready(function() {
    $('.empty_cart').click(function() {
        $xoa_gio_hang = confirm("Bạn thật sự muốn xóa giỏ hàng?");
        if($xoa_gio_hang == true)
        {
            $.ajax({
                url: "xoa_gio_hang.php",
                type: 'GET',
                async : false,
                success: function(){                   
                    location.reload();
                }
            });            
        }
        return false;
    }); //click         
}); // ready
