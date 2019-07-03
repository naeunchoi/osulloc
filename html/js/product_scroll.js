$(function(){
    var productTab = $('.product_tab').offset().top;
  
    $(window).scroll(function(){
      var sTop = $(window).scrollTop();
    
      if(sTop >= productTab){
          $('.product_tab').addClass('on');
      }else{
          $('.product_tab').removeClass('on');
      }
  
    });
  
  });