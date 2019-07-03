<?
    $pn = 1;
?>

<? include "../layout/sub_top.php"?>
    <div id="detail_main" class="main_banner">
        <section class="detail_main">
            <article class="detail">
               <? include "../layout/_lnb.html"?>
                <div class="detail_list">
                   <div class="list_txt_wrap">
                       <div class="txt_l">
                           <p>총<span class="font_bold">279</span>개의 상품이 있습니다.</p>
                       </div>
                       <div class="txt_r">
                           <a href="">
                               인기순
                           </a>
                           <a href="">
                               신상품순
                           </a>
                           <a href="">
                               높은 가격순
                           </a>
                           <a href="">
                               낮은 가격순
                           </a>
                       </div>
                   </div>
                   <div class="item_wrap">
                       <ul class="itmes"></ul>
                   </div>
                   <div class="detail_pager">
                        <ul class="pager_wrap">
                            <li>
                                <a href="">
                                    <i class="fas fa-angle-double-left"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fas fa-angle-left"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" class="on">1</a>
                            </li>
                            <li>
                                <a href="">2</a>
                            </li>
                            <li>
                                <a href="">3</a>
                            </li>
                            <li>
                                <a href="">4</a>
                            </li>
                            <li>
                                <a href="">5</a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="fas fa-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        </section>
       <? include "../layout/sub_bot.php"?>


       <script>
        $(document).ready(function(){
            

   

            for(var i in pdts){
                name = pdts[i].name;
                id = pdts[i].id;
                price = pdts[i].price;
                unit = pdts[i].unit;
                best = pdts[i].best;
                discount = pdts[i].discount;
				discount2 = pdts[i].discount2;
                eventNotice = pdts[i].eventNotice;
                giftNotice = pdts[i].giftNotice;
                img = pdts[i].img;
                imgTag = "";
                discountTag = "";
                eventTag = "";
                giftTag = "";
                
                // var result = (price - event)/price * 100; // -%20

                if(best){
                    imgTag = '<div class="besti"><span>BEST</span></div>';
                }
                if(discount){   
					//안에 글씨도 바꾸고 싶어요  
					//re: discount2 추가~ true일때~  ogp에 가격이 먼저들어가고 해당 할인율 만큼 디스카운트된값을 아래 변수로 바꾸어서 들어가도록  추가했어요~!ㅎㅎㅎ
					// Hong's Add
                    discountTag = `<span class="ogp">`+price+`원</span>
                                 <span class="colorS"> (`+discount2+`%↓) </span>`
                                
					var price = price - ( price * discount2 / 100 );
                }
                if(eventNotice){
                    eventTag = ` <div class="sale event_notice">
                                    <span>SALE</span>
                                 </div>`
                }
                if(giftNotice){
                    giftTag = `<div class="gift event_notice">
                        <span>GIFT</span>
                    </div>`
                }
				

				

                txt = 
                    `
                    <li class='item`+id+`'>
                        <a href="./product.php?idx=`+id+`">
                           <div class="hover_wrap">
                                <div class="item_img">
                                    `+imgTag+`
                                    <img src="./img/`+img+`" alt="">
                                    `+eventTag+``+giftTag+`
                                </div>
                                <div class="item_txt">
                                    <span class="txt">`+name+`</span>
                                    <span class="price">`+discountTag+`<strong class="colorb">`+price+`</strong>원</span>
                                </div>
                                <div class="item_link">
                                    <div class="link_box">
                                        <i class="far fa-heart"></i>
                                    </div>
                                    <div class="link_box">
                                        <i class="fas fa-shopping-cart"></i>
                                    </div>    
                                </div>
                            </div>
                        </a>
                    </li>   
                    `;
                html = html + txt;
            }

            $(".itmes").html(html);
            
           
        });
       </script>