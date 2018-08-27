$(document).ready(function() {
  $('a.add_cart_here').click(function() {

			
			var $key=$(this).attr("ma_san_pham");
      var $soLuong=1;
      var $dongia=$(this).attr("don_gia");

      var form_data = {
        id    : $key,
        soluong : $soLuong,
        dongia  : $dongia,
      };

		$.ajax({
      url:"mua_hang.php",
      type: 'POST',
      async : false,
      data: form_data,
      dataType: 'json',
      success: function(data){
        $("#show_total").text(data['st']);
        $("#show_quantity").text(data['sl']);
      },
      error: function(error){
        alert(error.statusText)	
  		}
    });

    return false;
  }); //click         
}); // ready
  //Định dạng số
    function formatCurrency(num) 
    {
       var num = num.toString().replace(/\$|\,/g,'');
       if(isNaN(num))
       num = "0";
       sign = (num == (num = Math.abs(num)));
       num = Math.floor(num*100+0.50000000001);
       num = Math.floor(num/100).toString();
       for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
       num = num.substring(0,num.length-(4*i+3))+','+
       num.substring(num.length-(4*i+3));
       return (((sign)?'':'-') + num);
    }