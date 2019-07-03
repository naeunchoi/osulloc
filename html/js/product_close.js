var chk = true;
$(document).on('click','#product_close',function(){
      //other_product height:0;,
      //product_close p html바꾸기 : 제품상세 펼쳐보기
      //arrow.on 붙여서 바꾸기
    //   console.log('d');
      if(chk){
        $('.product_closecont').animate({
            height:0
        },300);
        $('#product_close').addClass('on');
        $('#product_close > p > .txt').html('제품상세 펼쳐보기');
        chk = false;
      }else{
        $('.product_closecont').animate({
            height:'1103px'
        },300);
        $('.product_closecont').slideDown();
        $('#product_close').removeClass('on');
        $('#product_close > p > .txt').html('제품상세 접어보기');
        chk = true;
      }
     
});