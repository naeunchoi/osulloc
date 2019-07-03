
var chk = true;

$(document).on('click','.view_wide',function(){

        if(chk){
            $(this).parents('.rev_img').css({
                width: '662px',
                height: 'auto',
                transition: 'all 0.3s'
             });


             $(this).addClass('on');
     
             chk = false;
        }else{
            $(this).parents('.rev_img').css({
                width: '90px',
                height: '60px',
                transition: 'all 0.3s'
             });

             $(this).removeClass('on'); 
    
             chk = true;
        } 
}); 


// $(document).on('click','.view_wide',function(){

//     $('.cs_review .review_area li .rev_cont .rev_img').css({
//         width: '90px',
//         height: '60px',
//         transition: 'all 0.3s'
//      });
   
//         $(this).parents('.rev_img').css({
//             width: '662px',
//             height: 'auto',
//             transition: 'all 0.5s'
//          });

//          $(this).toggleClass('on');
 
// }); 

// $(document).on('click','#wide2',function(){
//     if(chk){
//         $('.cs_review .review_area li .rev_cont #revimg2').css({
//             width: '662px',
//             height: 'auto',
//             transition: 'all 0.5s'
//          });

//          $(this).addClass('on');

//          chk = false;
//     }else{
//         $('.cs_review .review_area li .rev_cont #revimg2').css({
//             width: '90px',
//             height: '60px',
//             transition: 'all 0.3s'
//          });

//          $(this).removeClass('on');

//          chk = true;
//     } 
// });