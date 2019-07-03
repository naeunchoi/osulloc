$(function(){
    header = $('header');
    $(document).on({
       mouseenter:function(){
          header.addClass('active');
       }
    },'#gnb > ul > .gnb_title  > a');
 
    $(document).on({
       mouseleave:function(){
          header.removeClass('active');
       }
    },'#gnb');

    lang = '.lang_wrap > span';

    $(document).on('click',lang,function(e){
       console.log('ssd');
       $('.lang_wrap').toggleClass('on');
       $('.lang_wrap ul').slideToggle();
    });

 });