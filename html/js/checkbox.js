// var chk = true;

// $('#chk1').click(function(){
//   console.log($('#chk1').is(':checked'));
//   //체크가 된지 안된지 확인하는 것 > 결과는 true false로 나온다. 

//   if($('#chk1').is(':checked')){
//       $('.chk').prop('checked',true);
//       $('.other_product_listbox .listbox_area .list').addClass('on');
//       $('.other_product .other_product_tit .button_wrap').addClass('on');
//   }
//   else{
//       $('.chk').prop('checked',false);
//       $('.other_product_listbox .listbox_area .list').removeClass('on');
//       $('.other_product .other_product_tit .button_wrap').removeClass('on');
//   }
//   //attr은 html에 보이는 것만 된다. 값이 한번 바뀌면 끝 다시 값이 변경되지 않는다. 실시간은 안된다.
//   //attr -- 속성값이나 경로를 불러 올때 확장자체크할 때 주로 사용한다.
//   //prop 실시간으로 내용을 잡아준다. 
// });
// $('.chkbox').removeClass('chk')
// $(document).on('click','.chkbox',function(){
//     if(chk){
//         console.log("chk");
//         $('.chkbox').removeClass('chk')
//         $(this).addClass('chk');
//         chk = true;
//     }else{
//         $(this).removeClass('chk');
//         chk = false;
//     }
// });


$(document).ready(function(){
    
    $(document).on('click','#chk1',function(){
        //클릭되었으면
        if($("#chk1").prop("checked")){
            $("input[name=chk]").prop("checked",true);
        }else{
            $("input[name=chk]").prop("checked",false);
        }
    })
})

