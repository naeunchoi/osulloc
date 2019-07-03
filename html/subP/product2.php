<?
    $pn = 2;
?>
<? include "../layout/sub_top.php"?>

<section class="product_main_wrap main_banner"><!-- .main_banner 안넣으면 scroll.js 애러 -->
    <article class="product_main">
       <div class="product_common product_main_box ">
            <div class="product_img">
                <img src="" alt="" class="item_img">
            </div>	
            <div class="product_bottom">
                <div class="product_tagbox">
                    <p>BEST</p>
                </div>
                <div class="product_link">
                    <button class="link_cart pointer">
                       <img src="./img/product/ico/ico_itmview_incart.png" alt="">
                       <span>장바구니 담기</span>
                    </button>
                    <button class="link_like pointer">
                         <i class="far fa-heart"></i>
                    </button>
                </div>
                <!-- <h3 class="name"></h3> -->
            </div>
       </div>
    </article> <!-- article1 product_main-->
    <article class="product_info">
       <div class="product_common product_info_box">
           <div class="info_event">
               <ul>
                   <li>
                      <img src="./img/product/ico/ico_itmview_point.png" alt="point_ico">
                      <span>뷰티포인트 85p 적립</span>
                   </li>
                   <li>
                      <img src="./img/product/ico/ico_itmview_point.png" alt="point_ico">   
                      <span>찻잎 85p 적립</span>
                   </li>
                   <li>
                      <img src="./img/product/ico/ico_itmview_delivary.png" alt="delivary_ico">
                      <span>3만원이상 주문시 무료배송</span>
                   </li>
                   <li>
                      <img src="./img/product/ico/ico_itmview_nopack.png" alt="nopack_ico">
                      <span>포장불가</span>
                   </li>
               </ul>
           </div>
           <div class="info_mid">
              <h3 class="info_mid_title product_title">녹차밀크스프레드 200g</h3><!-- 2019-06-18 product_title class 추가 - Hong's Add -->
              <p class="sub">기타/100g</p>
              <p>오설록의 최고급 가루 녹차를 함유한 고급스러운 풍미의 녹차 스프레드입니다. 빵에발라 먹거나, 간편하게 밀크티를 만들어 드세요.</p>
              <div class="review_box">
                 <div class="review_l">
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                     </div>
                     <a href="">리뷰보러가기</a>
                 </div>
                 <div class="review_link">
                     <a href="" class="share"></a>
                     <a href="" class="facebook"></a>
                 </div>
              </div>
           </div>
           <div class="info_buy">
               <div class="buy_box product_count">
                    <p class="product_count_txt">QTY</p>
                    <div class="count_box sumbox"><!--수량계산박스-->
                        <button type="button" class="count_btn minus">
                            <img src="./img/product/ico/ico_itmview_minus.png" alt="minusbutton">
                        </button>
                        <!-- <div class="count">1</div>  -->  <!-- 실제 글씨가 써지는 영역-->
						<input type="number" min="1" max="1000" class="count" id="count" value=1><!-- 2019-06-18 추가 - Hong's Add -->
                        <button type="button" class="count_btn plus">
                            <img src="./img/product/ico/ico_itmview_plus.png" alt="plusbutton">
                        </button>
                    </div>
               </div>
               <div class="buy_box product_price">
                    <p class="product_count_txt">PRICE</p><!--가격계산 박스-->
                    <div class="sum_price sumbox">
                        <div class="price">8500</div> <!-- 실제 글씨가 써지는 영역-->
                        <span>원</span>
                    </div> 
               </div>
               <button class="buy_box buy_btn pointer" type="button">
                   <a href="">바로 구매</a>
               </button>
           </div>
       </div>
    </article><!-- article2 product_info-->
    <div class="product_tab">
        <ul>
            <li class="on">
                <a href="http://" target="_blank" rel="noopener noreferrer">제품상세</a>
            </li>
            <li>
                <a href="http://" target="_blank" rel="noopener noreferrer">제품리뷰
                   <i class="new"></i>
                </a>
            </li>
            <li>
                <a href="http://" target="_blank" rel="noopener noreferrer">제품고시정보</a>
            </li>
        </ul>
    </div>
    <article class="poroduct_detail_wrap">
        <div class="detail_info">
            <div class="detail_info_bg_top"></div>
            <div class="detail_info_bg_bot">
                <div class="bg_botl"></div>
                <div class="bg_botr">
                    <img src="./img/product/18_img_desc_l.jpg" alt="marshmellow">
                    <img src="./img/product/18_img_desc_r.jpg" alt="jamwith_bread">
                </div>
            </div>
            <div class="info_title_txt">
                <ul class="info_txtl">
                    <li>TEA INFO</li>
                    <li>
                        <span class="info_sub">베이스</span>
                        <span>녹차</span>
                    </li>
                    <li>
                        <span class="info_sub">계열</span>
                        <span>잼류</span>
                    </li>
                </ul>
                <div class="info_txtr">
                    <h3>녹차밀크스프레드</h3>
                    <p>크래커, 빵 등에 바랄먹는 녹차향 가득한 스프레드</p>
                </div>
            </div>
            <div class="info_visual">
                <img src="./img/product/18_img03_pc.jpg" alt="info_visual">
                <div class="info_visual_txt_wrap">
                   <div class="info_visual_txt">
                        <p>
                            가볍지않은
                            <span class="underline">깊은 단맛과 진한 녹차</span><span class="underline">의 쌉쌀한 맛</span>이 느껴진다.
                        </p>
                        <p>
                            살짝 되직한 느낌의 농도이다. 한입 먹으면 가볍지 않은 깊은 단맛과 진한 녹차의 쌉쌀한 맛이 살짝 느껴져 계속 먹게되는 맛.
                        </p>
                   </div>
                </div>
            </div>       
            <div class="howtoeat">
                <p>HOW TO DRINK</p>
                <ul>
                    <li>
                        <span class="howto_num">1</span>
                        <span>빵에<br>발라먹습니다.</span>
                    </li>
                    <li>
                        <span class="howto_num">2</span>
                        <span>우유에 녹여 녹차<br>라떼로 먹습니다.</span>
                    </li>
                    <li>
                        <span class="howto_num">3</span>
                        <span>각종요리에<br>사용합니다</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="detail_slide">
            <div class="detail_slide_wrap detail_slide_wrap1">
               <div class="detail_slide_img" id="detail_slide_img1"></div>
               <div class="detail_slide_img_txt">
                   <p class="slide_txt">01  PRESENTATION</p>
                   <p class="slide_tit">녹차밀크스프레드</p>
                   <p class="slide_txt">깊고 진한 녹차의 풍미가 부드러운 우유 스프레드를 만났습니다.</p>
               </div>
            </div>
            <div class="detail_slide_wrap detail_slide_wrap2">
               <div class="detail_slide_img"  id="detail_slide_img2">
                   <img src="./img/product/18_line_slide_02_img.png" alt="slide_02m">
               </div>
               <div class="detail_slide_img_txt">
                   <p class="slide_txt">02  ABOUT PRODUCT</p>
                   <p class="slide_tit">녹차밀크스프레드 200g</p>
                   <p class="slide_txt">자세히 알아보기</p>
               </div>
               <div class="detail_slide_txt_left">
                   <div class="img_tit">유리병</div>
                   <div class="img_txt">내부가 잘 보이는 투명한 유리병에 담겨 있습니다. 환경을 생각하여 유리에 색소를 담지 않았습니다.</div>
               </div>
               <div class="detail_slide_txt_right">
                   <div class="img_tit">프리미엄 스티커</div>
                   <div class="img_txt">처음 받아보실 때, 새 제품임을 의미하는 오설록 로고가 들어간 프리미엄 스티커가 있는지 확인해보세요.</div>
               </div>
            </div>
            <div class="detail_slide_wrap detail_slide_wrap3">
                <div class="detail_slide_img"  id="detail_slide_img3"></div>
                <div class="detail_slide_img_txt">
                   <p class="slide_txt">03  PRODUCT SIZE</p>
                   <p class="slide_txt">지름 69 * 높이 88의 유리병으로 되어있습니다.(단위 mm)</p>
               </div>
            </div>
        </div>
        <div class="product_recommend">
            <div class="text_area">
                오설록의 다양한 티푸드로<br>더욱 즐거운 티타임 가지세요!
            </div>
            <div class="recommend_img_wrap">
                <div class="recommend_img">
                    <img src="./img/product/18_img_lineup.jpg" alt="line_up_img">
                </div>
                <a href="" class="plus_box_area plus_box1">
                    <div class="plus_info">
                        <img src="./img/product/18_line_02.png" alt="제주섬 녹차 초콜릿바 3입">
                        <div class="info_txt">
                            <p class="info_txt_tit">제주섬 녹차 초콜릿바 3입</p>
                            <p class="info_txt_price">
                                <span class="font_bold font18 color333 num">8,500</span><span>원</span>
                            </p>
                        </div>
                    </div>
                    <span class="plus_button">
                        <img src="./img/product/ico/ico_itmview_tip_plus.png" alt="plus_icon">
                    </span>
                </a>
                <a href="" class="plus_box_area plus_box2">
                    <div class="plus_info">
                        <img src="./img/product/18_line_03.png" alt="제주섬녹차화이트트러플">
                        <div class="info_txt">
                            <p class="info_txt_tit">제주섬녹차화이트트러플</p>
                            <p class="info_txt_price">
                                <span class="font_bold font18 color333 num">15,000</span><span>원</span>
                            </p>
                        </div>
                    </div>
                    <span class="plus_button">
                        <img src="./img/product/ico/ico_itmview_tip_plus.png" alt="plus_icon">
                    </span>
                </a>
                <a href="" class="plus_box_area plus_box3">
                    <div class="plus_info">
                        <img src="./img/product/18_line_01.png" alt="그린티 랑드샤 10입">
                        <div class="info_txt">
                            <p class="info_txt_tit">그린티 랑드샤 10입</p>
                            <p class="info_txt_price">
                                <span class="font_bold font18 color333 num">12,000</span><span>원</span>
                            </p>
                        </div>
                    </div>
                    <span class="plus_button">
                        <img src="./img/product/ico/ico_itmview_tip_plus.png" alt="plus_icon">
                    </span>
                </a>
                <a href="" class="plus_box_area plus_box4">
                    <div class="plus_info">
                        <img src="./img/product/18_line_04.png" alt="녹차밀크스프레드 200g">
                        <div class="info_txt">
                            <p class="info_txt_tit">녹차밀크스프레드 200g </p>
                            <p class="info_txt_price">
                                <span class="font_bold font18 color333 num">8,500</span><span>원</span>
                            </p>
                        </div>
                    </div>
                    <span class="plus_button">
                        <img src="./img/product/ico/ico_itmview_tip_plus.png" alt="plus_icon">
                    </span>
                </a>
                <a href="" class="plus_box_area plus_box5">
                    <div class="plus_info">
                        <img src="./img/product/18_line_06.png" alt="호지차밀크스프레드 200g">
                        <div class="info_txt">
                            <p class="info_txt_tit">호지차밀크스프레드 200g</p>
                            <p class="info_txt_price">
                                <span class="font_bold font18 color333 num">8,500</span><span>원</span>
                            </p>
                        </div>
                    </div>
                    <span class="plus_button">
                        <img src="./img/product/ico/ico_itmview_tip_plus.png" alt="plus_icon">
                    </span>
                </a>
                <a href="" class="plus_box_area plus_box6">
                    <div class="plus_info">
                        <img src="./img/product/18_line_05.png" alt="녹차밀크스프레드 400g">
                        <div class="info_txt">
                            <p class="info_txt_tit">녹차밀크스프레드 400g</p>
                            <p class="info_txt_price">
                                <span class="font_bold font18 color333 num">15,000</span><span>원</span>
                            </p>
                        </div>
                    </div>
                    <span class="plus_button">
                        <img src="./img/product/ico/ico_itmview_tip_plus.png" alt="plus_icon">
                    </span>
                </a>
            </div>
           <ul class="line_up">
               <li>
                   <img src="./img/product/18_line_01.png" alt="그린티 랑드샤 10입">
                   <div class="txt_box">
                       <p class="tit font_bold font18 color333">그린티 랑드샤 10입</p>
                       <p class="sub">바삭하고 달콤한 고급 크림 샌딩 쿠키</p>
                   </div>
               </li>
               <li>
                   <img src="./img/product/18_line_02.png" alt="제주섬 녹차 초콜릿바 3입">
                   <div class="txt_box">
                       <p class="tit font_bold font18 color333">제주섬 녹차 초콜릿바 3입</p>
                       <p class="sub">진한 녹차크림이 가득한 초콜릿 바.  낱개 포장으로 휴대하기 좋습니다.</p>
                   </div>
               </li>
               <li>
                   <img src="./img/product/18_line_03.png" alt="제주섬녹차화이트트러플">
                   <div class="txt_box">
                       <p class="tit font_bold font18 color333">제주섬녹차화이트트러플</p>
                       <p class="sub">화이트와 녹색의 녹차잎 모양으로 만들어진 보는 재미가 있는 녹차초콜릿</p>
                   </div>
               </li>
               <li>
                   <img src="./img/product/18_line_04.png" alt="녹차밀크스프레드 200g">
                   <div class="txt_box">
                       <p class="tit font_bold font18 color333">녹차밀크스프레드 200g </p>
                       <p class="sub">모든 것을 녹차디저트로 만들어 주는 마법의 스프레드!</p>
                   </div>
               </li>
               <li>
                   <img src="./img/product/18_line_05.png" alt="녹차밀크스프레드 400g">
                   <div class="txt_box">
                       <p class="tit font_bold font18 color333">녹차밀크스프레드 400g</p>
                       <p class="sub">녹차밀크스프레드를 대용량으로 즐기세요</p>
                   </div>
               </li>
               <li>
                   <img src="./img/product/18_line_06.png" alt="호지차밀크스프레드 200g">
                   <div class="txt_box">
                       <p class="tit font_bold font18 color333">호지차밀크스프레드 200g</p>
                       <p class="sub">모든 것을 구수한 호지차맛 디저트로 만들어주는 마법의 스프레드!</p>
                   </div>
               </li>
           </ul>
        </div>
        <div class="product_closecont">
            <div class="text_area">
               <div class="txt_tit_box">
                    <p class="sub">싱그러운 녹차 향 가득한 티 테이블</p>
                    <p class="tit">녹차밀크스프레드</p>
                    <p class="about">ABOUT PRODUCT</p>
               </div>
                <p class="txt">진한 녹차의 싱그러움과 풍부한 단맛이 조화를 이루는 오설록 티푸드입니다. 오설록 녹차가 풍부하게 함유된 초콜릿, 쿠키, 밀크 스프레드가 당신에게 풍성한 녹차 향과 부드러운 단맛을 전합니다. 오설록의 티푸드로 소중한 분과 즐거운 티타임을 가져보세요.</p>
            </div>
            <div class="closecont_img">
               <div class="left"> 
                   <img src="./img/product/18_about_01p.jpg" alt="18_about_01p.jpg">
                </div>
                <div class="right">
                    <img src="./img/product/18_about_02p.jpg" alt="18_about_02p.jpg">
                </div>
            </div>
        </div>
        <div class="other_product">
            <div class="other_product_tit">
                <h2>추천상품</h2>
                <div class=button_wrap>
                    <button class="pointer" type="button">
                      <label for="chk1"> <input type="checkbox" name="" class="chk" id="chk1">전체선택</label>
                    </button>
                    <button class="pointer" type="button">장바구니 담기</button>
                </div>
            </div>
            <div class="other_product_listbox">
                <div class="listbox_area">
                    <div class="list">
                        <!-- <div class="itme_list pointer">
                            <a href="" class="img">
                                <img src="./img/4.png" alt="">
                            </a>
                           <a class="name pointer"> 
                               <span>프리미엄가루녹차 40 g(분말)</span>
                            </a>
                            <div class="prod_button_wrap">
                                <span class="price">10,000원</span>
                                <label for="pro1" class="chkbox pointer">
                                    <input type="checkbox" name="" class="chk" id="pro1">
                                </label>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<? // include "../layout/sub_bot.php"?>
<!-- checkbox.js 제거하려고 -->
<footer id="footer">
            <? include "../layout/_footer.html"?>
        </footer>
    </div>
    <footer id="footer"></footer>
	<script src="../js/product.js"></script>
    <script src="../js/footer.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/scroll.js"></script>
    <script src="../js/product_close.js"></script>
</body>
</html>
<style>
.other_product_listbox .listbox_area .list .itme_list{outline:none;}
.other_product_listbox .listbox_area .list .itme_list .prod_button_wrap .checkboxWrap{position: relative;}
.other_product_listbox .listbox_area .list .itme_list .prod_button_wrap .checkboxWrap input[type=checkbox] + label{
    float: right;
    display: block;
    width: 30px;
    height: 30px;
    border: 1px solid #bababa;
    border-radius: 50%;
    background: url('../subP/img/product/ico/ico_itmview_chk_off.png')no-repeat center;
}

/* on */
.other_product_listbox .listbox_area .list .itme_list .prod_button_wrap .checkboxWrap input[type=checkbox]:checked + label{
    background-color: #c4d47d !important;
    border: 1px solid #c4d47d !important; 
}

.other_product_listbox .listbox_area .list .itme_list .prod_button_wrap .checkboxWrap input[type=checkbox]{
   position: absolute;
	width: 1px;
	height: 1px;
	padding: 0;
	margin: -1px;
	overflow: hidden;
	clip:rect(0,0,0,0);
	border: 0
}

</style>

<script>
        $(document).ready(function(){
 

            for(var i=0;  i < 12 ; i++ ){ //기존과 다르개 갯수가 정해진 경우
                name = pdts[i].name;
                id = pdts[i].id;
                price = pdts[i].price;
                discount = pdts[i].discount;
				discount2 = pdts[i].discount2;
                img = pdts[i].img;
                discountTag = "";
            

               
                txt = 
                    `<div class="itme_list">
                            <a href="/subP/product.php?idx=`+id+`" class="img">
                            <img src="./img/`+img+`" alt="`+img+`">
                            </a>
                           <a href="/subP/product.php?idx=`+id+`" class="name pointer"> 
                               <span>`+name+`</span>
                            </a>
                            <div class="prod_button_wrap">
                                <span class="price">`+price+`<strong style="padding-left:3px;">원</strong></span>
                                <div class="checkboxWrap">
									<input type="checkbox" name="chk" class="chk" id="pro`+i+`">
                                	<label for="pro`+i+`" class="chkbox pointer"></label>
                                </div>
                            </div>
                        </div>
                    `;
                html = html + txt;
            }

            $(".other_product_listbox > .listbox_area > .list").html(html);
            
           
        });
</script>

<script>
// 전체선택
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




</script>
<script>
    $(document).ready(function(){
		// slickslide 에 active가 붙으면 현재 페이지 이고 inex();로 움직인다.
            $('.detail_slide').slick({
                dots: true,
                infinite: true,
                arrow:true,
                autoplay: true,
                pauseOnHover:false,
                autoplaySpeed: 3000,
                cssEase: 'ease-in-out',
                slidesToShow: 1,
                dotsClass: 'detail_slide_pager_area',
                customPaging : function(slider, i) {
                    if(i == 0){ 
                        return `<span class="num pointer">01</span><span class="txt pointer">PRESENTATION</span>`
                    }else if(i == 1){
                            return `<span class="num pointer">02</span><span class="txt pointer">ABOUT PRODUCT</span>`
                    }else if(i == 2){
                            return `<span class="num pointer">03</span><span class="txt pointer">PRODUCT SIZE</span>` 
                    }
                }
            });      

            $('.other_product_listbox > .listbox_area > .list').slick({
                dots: false,
                infinite: true,
                arrow:true,
                autoplay: false,
                pauseOnHover:false,
                autoplaySpeed: 3000,
                cssEase: 'ease-in-out',
                slidesToShow: 4
            });      
     });
        
</script>
<style>
.price_sale {overflow:hidden; margin-top:22px;}
.price_sale .down_price {float:left; font-size:13px; margin-top:10px; color:#818181;}
.price_sale .down_price .down_arrow {vertical-align: top; display: inline-block; color: #d24e26;}
.price_sale .original_won {position: relative;float:right;font-size:25px;color:#818181;line-height: 1.2;}
.price_sale .original_won::after {position: absolute; display:block; height:1px; top:50%; left: 0; right: 20px; content:""; background-color:#818181;}
.price_sale .original_won .won_size {font-size:17px;}
.product_info_box .info_buy{top:auto; bottom:20px;}
.count{
	outline:0;
	border:0;
}
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>
<script>

	function numberWithCommas(x) {
		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}



        $(document).ready(function(){

            var item_id = getUrlParameter('idx');    //idx = pdts[i].id 값
            var item = searchItem(item_id);  // idx값을 이용하여 해당 [] 배열의 값을 불러오기
			//console.log(item_id)

			
			
			//2019-06-18 Hong's Add
			var price = item.price;
			 if(item.discount){   
				var sale = `
								<div class="price_sale">
									<p class="down_price">( `+item.discount2+` %
									<span class="down_arrow">▼</span> )</p>
									<p class="original_won">`+numberWithCommas(item.price)+`
									<span class="won_size"></span>원</p>
								</div>
								`
				$('.product_price').before(sale)
				var price = item.price - ( item.price * item.discount2 / 100 );
			}


			$('.price').html(numberWithCommas(price));
            $(".product_title").html(item.name); // pdts 이름값
			//2019-06-18 Hong's Add end


            $(".item_img").attr("src","./img/product/"+item.img); //큰이미지 src
			
            function searchItem(data){  // idx로 배열 찾기
                for(var i in pdts){
                    if(data == pdts[i].id){
                        return pdts[i];
                    }
                }
            }

            function getUrlParameter(key){ 
				// 주소창에 주소뒤에 ? <-- 시작 ,  & 여러값 중복 사용시
                var pageUrl = window.location.search.substring(1); // page url 주소를 받아오기
                var urlVariables = pageUrl.split("&"); //& 자른후 뒤에 붙는 파라메터 값 추출 하는 함수 여러 값이 있을 수 있으니 & 부분에서 다시한번 자름
                var parameterName;
                for(var i in urlVariables){ //잘라서 만들어진 배열만큼 돌림
                    parameterName = urlVariables[i].split("="); //각 파라메터 = 다음 값 구하기 //ex) idx = 1; 1 값 추출을 위한 자르기
                    if(parameterName[0] == key){
                        return parameterName[1];
                    }
                }
            }
        });
</script>

<!-- //2019-06-18 Hong's Add  -->
<script>



	$(function(){
		var  $count = $('.count') , 
			  value ,
		      price = $('.price');
		var  price_val = parseInt(price.html().replace(/,/g, ''));
		var value = parseInt($count.val());
		

		$(document).on('click','.count_btn', function(){
			var $this = $(this);
			     
			
			
			
		//console.log(price)

			console.log(value + "현재 값");
			if( $this.hasClass('plus')){
				 value++;
				

				console.log(value + "증가값");

			}else{
				value--;
				if(value<=0){
					//alert('더이상 줄일수 없습니다.');
					value =1;
				}
				
				console.log(value + "감소값");
				
			}
			
			$count.val(value);

			price.html( numberWithCommas(value * price_val) )
			
			value = value;
		   return value;
		});
		
		$('#count').on('propertychange change keyup paste input', function(){ 
			 value = $(this).val();
			price.html( numberWithCommas(value * price_val) )
		})

	});
</script>

