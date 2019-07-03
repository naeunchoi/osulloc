$('.notice_txt').eq(0).css({top:0});


var index = 1;
var noticeTxt = $('.notice_txt').length;
var interval;

auto_slide(3000);

$('.notice_more').click(function(){
    // 버튼 안눌리게함.
    slide(index % noticeTxt, '100%', (index - 1) % noticeTxt, '-100%');
    index++;
});

var time = 1000;
function slide(coming, pos1, outing, pos2) {
    $('.notice_txt').eq(coming).css({
        top: pos1
    }).animate({ 
        top: 0
    }, time);

    // 내보낼 판(현재 보고있는거)
    $('.notice_txt').eq(outing).animate({ 
        top: pos2
    }, time);
}

// function btn_init(){
//     $('.notice_more').attr('disabled',true);
//     setTimeout(function(){
//         $('.notice_more').attr('disabled',false);        
//     }, time);
// }



// 자동으로 돌리기
function auto_slide(tmp_timer) {
    interval = setInterval(function(){
        $('.notice_more').trigger('click');
    }, tmp_timer);
}
