$(function(){
  var header = $('#header');
  var container = $('#container');
  var cont1_top= $('.main_banner').offset().top;
  var topBtn = $('.top_btn');

  $(window).scroll(function(){
    var sTop = $(window).scrollTop();
    if(sTop > 0){
      container.addClass('on');
      header.addClass('on');
    }else{
        container.removeClass('on');
        header.removeClass('on') 
    }

    if(sTop > cont1_top){
        topBtn.addClass('on');
    }else{
      topBtn.removeClass('on')
    }

  });

  $('.top_btn').click(function(e){
    e.preventDefault();           
    $('html, body').animate({
        scrollTop: 0
    }, 1000)

});
});