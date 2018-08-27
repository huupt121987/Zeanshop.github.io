// account modal
$(function (){
  var modal1 = document.getElementById("modal_login");
  var modal2 = document.getElementById("modal_register");

  window.onclick = function(e1){
    if (e1.target == modal1 || e1.target == modal2) {
      modal1.style.display = "none";
      modal2.style.display = "none";
    };
  };

  var dang_ky = $("#modal_login > form > .container > p > span > a");
  dang_ky.click(function(){
    modal1.style.display = "none";
    modal2.style.display = "block";
  });
  var dang_nhap = $("#modal_register > form > .container > span > a");
  dang_nhap.click(function(){
    modal2.style.display = "none";
    modal1.style.display = "block";
  });
});

$(function(){
  var chitiet_hoadon = document.getElementById("chitiet_hoadon");
  window.onclick = function(e){
    if (e.target == chitiet_hoadon) {
      chitiet_hoadon.style.display = "none";
    };
  };
});
// Cart modal
// $(document).ready(function(){
//     $("#show_cart_here").click(function(){
//         $("#the_cart_here").modal();
//     });
// });

// datepicker
$( function() {
  $("#ngay_sinh_dang_ky").datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: 'dd/mm/yy'
    });
} );

$( function() {
  $("#ngay_sinh_cap_nhat").datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: 'dd/mm/yy'
    });
} );

// slider banner
$(function () {
  $("#slider").responsiveSlides({
  	auto: true,
  	nav: true,
  	speed: 500,
    namespace: "callbacks",
    pager: true,
  });
});

// target products.php
/*
$(function(){
  $(".dropdown-content a").click(function(){
    var ma_loai_san_pham = $(this).attr("ma_loai_san_pham");
    window.open("public/session/ss_products.php?ma_loai_san_pham="+ma_loai_san_pham,"_self");
  });
});

$(function(){
	$(".content-top-bottom .men a").click(function(){
		var ma_loai_san_pham = $(this).attr("ma_loai_san_pham");
		window.open("public/session/ss_products.php?ma_loai_san_pham="+ma_loai_san_pham,"_self");
	});
});
*/
// rslidebar
$(function() {
    var menu_ul = $('.menu-left > li > ul'),
           menu_a  = $('.menu-left > li > a');
    menu_ul.hide();
    menu_a.click(function(e) {
        e.preventDefault();
        if(!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp();
            $(this).addClass('active').next().stop(true,true).slideDown();
        } else {
            $(this).removeClass('active');
            $(this).next().stop(true,true).slideUp();
        }
    });
    
});

// Ajax content-products
/*$(function(){
  $(".subitem1>a").click(function(){
    ma_loai_san_pham = $(this).attr("ma_loai_san_pham");
    $.ajax({
      url: 'xl_san_pham.php',
      type: 'post',
      data: {"ma_loai_san_pham": ma_loai_san_pham},
      success: function(data){
        $("#show_san_pham").html(data);
      },
    });
  });
});*/

// Ajax pagination Jquery with PHP
/*
$(function(){
//   // if($(".subitem1>a").click()){
    $("#show_san_pham" ).load("xl_san_pham.php"); //load initial records
    
    // executes code below when user click on pagination links
    $("#show_san_pham").on( "click", ".pagination a", function (e){
      e.preventDefault();
      // $(".loading-div").show(); //show loading element
      var page = $(this).attr("data-page"); //get page number from link
      $("#show_san_pham").load("fetch_pages.php",{"page":page}, function(){ //get content from PHP page
        // $(".loading-div").hide(); //once done, hide loading element
      });
      
    });
  };
});
*/

// slider single
$(function(){
  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide",
      controlNav: "thumbnails"
    });
  });
});

// About
$(function(){
  $("#about > li > a").click(function(){
    var ma_bai_viet = $(this).attr("ma_bai_viet");
      $.ajax({
        url:"xl_about.php",
        type:"post",
        data:{"ma_bai_viet":ma_bai_viet},
        success: function(data){
            //alert(data);
            $("#show_bai_viet").html(data);
          },
        error:function(err)
        {
          alert("Lỗi: " +  err.status + "\n" +  err.statusText ); 
        } 
      });

    // return false;
  });
});