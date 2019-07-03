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
                       <a href="../formP/cart.php">
                           <img src="./img/product/ico/ico_itmview_incart.png" alt="">
                           <span>장바구니 담기</span>
                       </a>
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
              <h3 class="info_mid_title">녹차밀크스프레드 200g</h3>
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
                        <!-- <div class="count">1</div>   실제 글씨가 써지는 영역 -->
                        <input type="number" min="1" max="1000" class="count" id="count" value=1>
                        <button type="button" class="count_btn plus">
                            <img src="./img/product/ico/ico_itmview_plus.png" alt="plusbutton">
                        </button>
                    </div>
               </div>
               <div class="buy_box product_price">
                    <p class="product_count_txt">PRICE</p><!--가격계산 박스-->
                    <div class="sum_price sumbox">
                        <div class="price"></div> <!-- 실제 글씨가 써지는 영역-->
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
       <div class="product_tab_inner">
        	 <ul>
        	    <li class="on"> 
        	        <a href="#detail_info"  rel="noopener noreferrer" id="productTab1">제품상세</a>
        	    </li>
        	    <li>
        	        <a href="#cs_review"  rel="noopener noreferrer" id="productTab2">제품리뷰
        	           <i class="new"></i>
        	        </a>
        	    </li>
        	    <li>
        	        <a href="#purchasing_info" rel="noopener noreferrer" id="productTab3">제품고시정보</a>
        	    </li>
        	</ul>
        </div>
    </div>
    <article class="poroduct_detail_wrap">
        <div class="detail_info product_section" id="detail_info">
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
        </div><!--product_closecont-->
        <div id="product_close" class="pointer">
            <p>
                <span class="txt">제품상세 접어보기</span>
                <span class="arrow">
                </span>
            </p>
        </div>
        <div class="cs_review product_section" id="cs_review">
            <div class="txt_box">
               <h2>고객후기</h2>
               <p>제품을 직접 구매하여 경험하신 분들의 솔직담백한 후기들을 확인해보세요</p>
               <div class="average">
                  <p>제품평균</p>
                  <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                  </div>
               </div>
            </div>
            <ul class="review_area">
               <li>
                   <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                   </div>
                   <div class="rev_cont">
                         <p>버터 발라 구운 식빵에 스프레드바르면 너무 맛있어요 녹차밀크티로도 굿이에요 강~~추^^</p>
                         <span class="user">pha***</span>
                         <span class="date">2019.06.21</span>
                    </div>
               </li>
               <li>
                   <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                   </div>
                   <div class="rev_cont">
                         <p>식빵에 발라먹었는데 녹차맛이 진하고 아주 맛있어요^^</p>
                         <span class="user">gid******</span>
                         <span class="date">2019.06.12</span>
                    </div>
               </li>
               <li>
                   <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star colorCcc"></i>
                         <i class="fas fa-star colorCcc"></i>
                   </div>
                   <div class="rev_cont">
                         <p>아무리 할인제품이라해도 이렇게 유통기한 짧은제품 주는게 정상인가요? 2019년 내에 2통을 먹으라니 ㅋㅋㅋㅋ할인가로 샀으니 망정이지 다시는 이렇게는 안살듯해요 오설록이란 회사는 마켓팅을 이렇게 하십니까? 생각이 정말이지 짧으시네요~</p>
                         <span class="user">seo****</span>
                         <span class="date">2019.06.11</span>
                    </div>
               </li>
               <li>
                   <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                   </div>
                   <div class="rev_cont">
                         <p>녹차가 너무 좋아서 빵에 발라 먹을려고 샀어요. 먹어도 먹어도 질리지 않는 이 맛을 어떻게 해요. ^^ 다먹고 또 , 사러 올께요.</p>
                         <div class="rev_img" id="revimg1">
                             <img src="./img/product/revimg1.jpg" alt="hut****review image">
                             <div class="view_wide pointer" id="wide1">
                                <div class="wide_arrow">
                                    <i class="fas fa-arrow-left"></i>
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                             </div>
                         </div>
                         <span class="user">hut****</span>
                         <span class="date">2019.05.29</span>
                    </div>
               </li>
               <li>
                   <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                   </div>
                   <div class="rev_cont">
                         <p>저번에 한번 사봤는데 너무 맛있어서 순삭... 이제 아껴먹으려규요 ㅋㅋㅋ구운 토스트에 먹으니 진짜 맛있어요 우유에 타마신건 그냥 그렇더라구요 ㅋㅋ</p>
                         <span class="user">myt***</span>
                         <span class="date">2019.05.25</span>
                    </div>
               </li>
               <li> 
                   <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                   </div>
                   <div class="rev_cont">
                         <p>올리브영 베이글칩에 발라먹으려고 삿는데 꿀맛이에요ㅋㅋㅋㅋ 녹차조아해서그런지 넘맛잇네여</p>
                         <div class="rev_img"  id="revimg2">
                            <img src="./img/product/revimg2.jpg" alt="da7***review image">
                            <div class="view_wide pointer" id="wide2">
                                <div class="wide_arrow">
                                    <i class="fas fa-arrow-left"></i>
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                             </div>    
                         </div>
                         <span class="user">da7***</span>
                         <span class="date">2019.05.21</span>
                    </div>
               </li>
               <li>
                   <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                   </div>
                   <div class="rev_cont">
                         <p>선물하려고 구매한거라 맛은 모르겠고 배송이 너무 특이하게되어와서 맘에드네요 선물반응 좋으면 또구매하려고요</p>
                         <span class="user">aai**</span>
                         <span class="date">2019.05.19</span>
                    </div>
               </li>
               <li>
                   <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                   </div>
                   <div class="rev_cont">
                         <p>예상한 맛 그대로에요. 다른 후기에 유통기한이 짧다는 의견도 있었지만, 전 모든 제품 넉넉한 기간의 제품으로 받아서 매우 만족합니다.</p>
                         <span class="user">010********</span>
                         <span class="date">2019.05.13</span>
                    </div>
               </li>
               <li>
                   <div class="stars">
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                   </div>
                   <div class="rev_cont">
                         <p>하나는 먹고 나머지는 선물하려 샀는데 역시 실망시키지 않네요^^♥</p>
                         <span class="user">blu****</span>
                         <span class="date">2019.05.13</span>
                    </div>
               </li>
            </ul>
            <div class="detail_pager">
                <ul class="pager_wrap">
                    <li class="pager_round">
                        <a href="">
                            <i class="fas fa-angle-double-left"></i>
                        </a>
                    </li>
                    <li class="pager_round">
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
                    <li class="pager_round b_22">
                        <a href="">
                            <i class="fas fa-angle-right color222"></i>
                        </a>
                    </li>
                    <li class="pager_round b_22">
                        <a href="">
                            <i class="fas fa-angle-double-right color222"></i>
                        </a>
                    </li>
                </ul>
                <button type="button">
                    <a href="">구매후기 작성</a>
                </button>
            </div>
        </div>
        <div class="purchasing_info product_section" id="purchasing_info">
            <div class="txt_box">
                <h2>제품의 자세한 사항을 확인해보세요.</h2>
                <p>제품에 대한 디테일한 사항을 하단에서 확인해보세요.<br>상품정보제공 고시부터 상품청약 조회안내까지 모든 사항을 확인하실 수 있습니다.
                </p>
            </div>
            <div class="tab_wrap">
                <ul class="tab">
                        <li class="on pointer"><a href="">상품정보제공고시</a></li>
                        <li class="pointer"><a href="">배송/교환/반품 안내</a></li>
                        <li class="pointer"><a href="">배송/교환/반품 유의사항</a></li>
                        <li class="pointer"><a href="">상품청약 조회 안내</a></li>
                 </ul>
                 <div class="tabindexWrap">
                        <table class="tabindex tabindex1 on">
                            <tbody>
                                <tr>
                                    <th>품명 및 모델명</th>
                                    <td>녹차밀크스프레드 200 g</td>
                                    <th>식품의 유형</th>
                                    <td>식물성크림</td>
                                </tr>
                                <tr>
                                    <th>용량/중량</th>
                                    <td>200 g</td>
                                    <th>유통기한</th>
                                    <td>제조일로부터 8개월</td>
                                </tr>
                                <tr>
                                    <th>영양성분</th>
                                    <td>해당사항없음</td>
                                    <th>원재료 및 함량</th>
                                    <td>백설탕, 혼합식용유(유채유(호주산),팜유(말레이시아산),가공유지,글리세린지방산에스테르),유채유(호주산),전지분유(외국산:벨기에, 미국,호주),탈지분유(외국산:미국,프랑스,독일),유청분말,녹차가루(제주산),레시틴,글리세린지방산에스테르,혼합제제(바닐린,말토덱스트린)</td>
                                </tr>
                                <tr>
                                    <th>제조원</th>
                                    <td>(주)삼광식품</td>
                                    <th>제조원 사업장 소재지</th>
                                    <td>충북 진천군 이월면 생거진천로 1492</td>
                                </tr>
                                <tr>
                                    <th>판매원</th>
                                    <td>(주)아모레퍼시픽</td>
                                    <th>판매원 사업장 소재지</th>
                                    <td>경기도 오산시 가장산업동로 37</td>
                                </tr>
                                <tr>
                                    <th>수입원</th>
                                    <td>구입처 및 고객상담센터</td>
                                    <th>고객상담전화</th>
                                    <td>031-8047-9388</td>
                                </tr>
                                <tr>
                                    <th>교환 문의처</th>
                                    <td></td>
                                    <th>수입원 사업장 소재지</th>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th colspan="2">보관시 주의사항</th>
                                    <td colspan="2">- 직사광선과 습기가 많은 곳을 피하고 통풍이 잘되는 곳에 보관하십시오 - 개봉 후 냉장보관 하십시오 - 고온 보관 시, 제품에 포함된 유지의 층분리가 발생할 수 있으나 이는 제품 이상이 아닙니다. 내용물을 잘 섞어 냉장보관하면 원래 상태로 돌아가니 안심하고 드셔도 됩니다 - 개봉 후 가급적이면 빠른 시일 내에 드시기 바랍니다</td>
                                </tr>
                                <tr>
                                    <th colspan="2">유전자변형식품에 해당하는 경우의 표시</th>
                                    <td colspan="2">해당사항없음</td>
                                </tr>
                                <tr>
                                    <th colspan="2">영유아식 또는 체중조절식품 등에 해당하는 경우 표시광고사전심의필 유무 및<br>부작용 발생 가능성</th>
                                    <td colspan="2">해당사항없음</td>
                                </tr>
                                <tr>
                                    <th colspan="2">수입식품에 해당하는 경우 '식품 위생법에 따른 수입신고를 필함'의 문구</th>
                                    <td colspan="2">해당사항없음</td>
                                </tr>
                                <tr>
                                    <th colspan="2">기타</th>
                                    <td colspan="2">본 제품에 이상이 있을 경우, 공정거래위원회 고시에 의거 보상해 드립니다.<br>부정,불량식품 신고는 국번없이 1399</td>
                                </tr>
                            </tbody>
                        </table>  
                        <table class="tabindex tabindex2">
                            <tbody>
                                    <tr>
                                        <th>배송기간</th>
                                        <td>입금 확인 후 2~4일 가량 소요되며, 지역에 따라 약간의 차이가 있을 수 있습니다.(매일 14:00시 주문 건까지 출고됩니다.)<br>(연휴, 공휴일, 일부 도서지역 및 사서함 주소는 2~3일 추가 소요 예상됩니다.)
                                        </td>               
                                    </tr>
                                    <tr>
                                        <th>배송비</th>
                                        <td>
                                            <ul>
                                                <li>총 구매금액이 3만원 이상 무료배송이며, 3만원 미만 주문 시에는 택배비 2,500원을 부담하셔야 합니다.</li>
                                                <li>고객님 개인적인 사정에 의한 교환/반품 시에는 왕복 배송비를 부담해 주셔야 교환/반품이 가능합니다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>교환/반품</th>
                                        <td>
                                            <ul>
                                                <li>상품을 받으신 날로부터 7일 이내 교환/반품이 가능합니다. 단, 일부 제품의 경우 포장을 개봉하였거나 포장이 훼손되어 상품가치가 상실된 경우에는 교환 및 반품이 불가능합니다.</li>
                                                <li>받으신 상품 내용이 표시, 광고 내용과 다르거나 다르게 이행된 경우에는 그 상품을 받은 날로부터 3개월 이내, 그 사실을 안 날 또는 알 수 있었던 날부터 30일 이내 청약 철회가 가능합니다.</li>
                                                <li>고객님의 책임있는 사유로 상품 등이 멸실 또는 훼손된 경우 교환/반품이 불가능합니다.</li>
                                                <li>고객님의 사용 또는 일부 소비에 의하여 상품의 가치가 현저히 감소한 경우 교환/반품이 불가능합니다.</li>
                                                <li>시간의 경과에 의하여 재판매가 곤란한 정도로 상품 등의 가치가 현저히 감소한 경우 교환/반품이 불가능합니다.</li>
                                            </ul>
                                        </td>
                                    </tr>
                            </tbody>                       
                         </table>
                        <table class="tabindex tabindex3">
                            <tbody>
                                <tr>
                                    <th>유의사항</th>
                                    <td>
                                        <ul>
                                            <li>사은품 품절 시 공지 없이 대체상품이 발송될 수 있습니다.</li>
                                            <li>주문자, 수취인, 전화번호, 주소가 동일한 경우 자동 묶음배송되며 구매금액 사은품은 합산되어 지급되지 않습니다. (주문 건별 구매금액으로 처리됩니다.)</li>
                                            <li>이벤트 적용 및 사은품 증정은 장바구니에 담아두신 시점과 관계없이 결제 당시 사은품으로 증정됩니다.</li>
                                            <li>교환/반품 신청은 마이페이지 > 주문배송조회에서 가능합니다. (신청 후, 2~3일 이내에 오설록 쇼핑몰 지정 택배사가 직접 방문하여 상품을 수거하며, 제품 회수 확인 후 교환/반품 처리해 드립니다.)</li>
                                            <li>교환/반품 시에는 함께 받으신 사은품도 반납해 주셔야 교환/반품이 가능합니다. 이점 양해 부탁드립니다.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>반송지 주소</th>
                                    <td class="no_dot">
                                        <ul>
                                            <li>경기 오산시 가장동 46-1번지 아모레퍼시픽 뷰티사업장 오설록몰 우편번호 447-210</li>
                                            <li>전화번호 031-8047-9388</li>
                                            <li>그 밖에 궁금하신 점이 있으시다면 오설록몰 온라인 고객센터 또는 고객상담실(080-023-5454)를 이용해 주세요.</li>
                                            <li>오설록몰에서 구입하신 상품에 대한 품질 보증 및 피해보상에 관한 사항은 소비자피해보상규정(재정경제부 고시 2000-21)에 의거하며, 문의사항은 오설록몰 고객상담실(080-023-5454)로 문의해 주시기 바랍니다.</li>
                                            <li>구매자가 미성년자인 경우에는 상품 구입 시 법정 대리인이 동의하지 아니하면 미성년자 본인 또는 법정 대리인이 구매 취소할 수 있습니다. 이점 고객님의 양해 부탁드립니다.</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="tabindex tabindex4">
                            <tbody>
                                <tr>
                                    <th>상품철회</th>
                                    <td>
                                        <ul>
                                            <li>본 상품은 상품 인도 시로부터 7일 내 당해 상품 구매 계약에 대한 청약을 철회할 수 있습니다. 단, 소비자에게 책임이 있는 사유로 당해 제품이 멸실 또는 훼손된 경우, 사용 또는 일부 소비에 의해 가치가 현저히 감소한 경우에는 청약철회가 제한될 수 있으며, 상품 철회기간에 있어서는 사전 고지된 제품은 예외일 수 있습니다.</li>
                                            <li>청약의 철회는 080-023-5454로 전화를 하시거나 마이페이지 > 주문배송조회에서 하실 수 있습니다.</li>
                                            <li>청약 철회 후 당사의 배송 사원이 고객님을 방문할 때 상품을 반품하시면 되고, 이에 따른 부대 비용은 당사가 부담합니다. (단, 사전 고지된 제품은 제외)</li>
                                            <li>상품 반품 시 배송 사원으로부터 영수증을 반드시 수령하시고 이의 증명을 위하여 1개월 이상 영수증을 보관하여 주십시오.</li>
                                            <li>상품 반품 시 현금은 청약 철회 요청 후 상품의 회수 및 청약 철회가 확정된 날로부터 3일 내 진행되며, 환급이 지연될 경우 년간 20% 이자율에 상응하는 금액을 보상합니다. 환급 지연에 대한 문의 및 보상요청은 고객센터(080-023-5454)로 연락부탁드립니다.<br>*본 상품에 대한 품질 보증 및 피해보상에 대한 사항은 소비자 피해보상규정(재정경제부 고시 2000-21)에 의거 합니다.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>계약 서면 송부</th>
                                    <td>
                                        <ul>
                                            <li>본 메일은 전자상거래 등에서의 소비자 보호에 관한 법률 제 13조 2항에서 규정하는 계약의 내용을 담은 서면 교부 의무에 의해 발송됩니다.</li>
                                            <li>공급되는 재화 등의 명칭, 종류, 공급방법 및 시기는 전면 송장에 기재되어 있으며 재화 등의 가격은 인터넷 등에서 이미 지하였으며 이에 대한 질의는 080-023-5454로 전화하시면 상세히 안내해 드리겠습니다.</li>
                                            <li>오설록몰 이용약관은 공정위 승인 사이버몰 표준약관 [제 10023호]를 사용하고 있으며, 또한 080-023-5454로 전화주시면 약관 전문을 송부하여 드립니다.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>결제 대금 보호</th>
                                    <td class="no_dot">
                                        <ul>
                                            <li>당사는 전자상거래 등에서의 소비자 보호에 관한 법 제24조에서 정하고 있는 1회 10만원 이상의 현금 결제에 대하여 청약의 철회 및 계약의 해제 또는 재화 등의 공급 불이행으로 인한 대금 환불을 이행하지 않을 경우 해당 금액을 서울보증보험에서 보상하여 드리고 있습니다.</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>미성년자 계약 취소</th>
                                    <td class="no_dot">
                                        <ul>
                                            <li>본 계약에 대하여 체결인이 민법 제4조의 미성년자인 경우, 민법 제5조에 따라서 법정 대리인이 본 계약에 대하여 동의하지 아니하면 미성년자 본인 또는 법정 대리인은 본 계약을 취소할 수 있습니다. 취소의 방법은 청약 철회에 준하여 080-023-5454로 연락하시기 바랍니다.<br>(본 미성년자 계약 취소의 고지는 전자상거래 등에서의 소비자 보호에 관한 법률 제13조 3항에 따릅니다.)</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </article>
</section>
<? include "../layout/sub_bot.php"?>
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
                autoplay: true,
                pauseOnHover:false,
                autoplaySpeed: 3000,
                cssEase: 'ease-in-out',
                slidesToShow: 4
            });      
     });
        
</script>

<style>
.price_sale {
    overflow:hidden; 
    margin-top:22px;
}
.price_sale .down_price {
    float:left; 
    font-size:13px; 
    margin-top:10px; 
    color:#818181;
}
.price_sale .down_price .down_arrow {
    display: inline-block; 
    vertical-align: top;
    color: #d24e26;
}
.price_sale .original_won {
    position: relative; 
    float:right;
    
    font-size:25px;
    
    
    color:#818181;
    
    line-height: 1.2;
}
.price_sale .original_won::after {
    content:""; 
    display:block;
    position: absolute;  

    top:50%; 
    left: 0; 
    right: 20px;

    height:1px; 
    
    background-color:#818181;
}
.price_sale .original_won .won_size {
    font-size:17px;
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
            // $(".name").html(item.name); // pdts 이름값
            $(".item_img").attr("src","./img/product/"+item.img); //큰이미지 src
            $('.info_mid .info_mid_title').html(item.name);
          

            var price = item.price;
            
            if(item.discount){
                console.log(item.discount2);
                var sale = `
								<div class="price_sale">
									<p class="down_price">( `+item.discount2+` %
									<span class="down_arrow">▼</span> )</p>
									<p class="original_won">`+ numberWithCommas(item.price )+`
									<span class="won_size"></span>원</p>
								</div>
                            `
             var price = item.price - ( item.price * item.discount2 / 100 ) ;    
             
             $('.product_price').before(sale);
             
            }
            // $('.product_price').before(sale);
            
            $('.price').html(numberWithCommas(price));

            //next : 선택자의 역할 
            //before : html을 추가시켜준다.
    

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

<script>


$(function(){
    var productTab = $('.product_tab').offset().top;
  
    $(window).scroll(function(){
      var sTop = $(window).scrollTop();
	  var headerH = $('header').height();
	  if( sTop >= productTab-55){
          $('.product_tab').addClass('on');
      }else{
          $('.product_tab').removeClass('on');
      }

	  var product_section = $('.product_section');

		$.each(product_section, function(idx){
			 var $target = product_section.eq(idx),
			  $targetTop = $target.offset().top;
			  if($targetTop <= sTop){
				  $('.product_tab li').removeClass('on');
				  $('.product_tab li').eq(idx).addClass('on')
			  }
		})
    });
  
  });
</script>

<script>
$(function(){

    var price = $('.price');
    var price_num = parseInt(price.html().replace(/,/g, ''));
    var value = $('#count').val();
    var count = $('#count');
    
	$(document).on('click','.count_btn',function(){
        var $this = $(this);
        var count = $('#count');
        
       

       if($this.hasClass('minus')){
           console.log(value);
        //    console.log('감소값');
          
           value--;
        //    count.val(value);
            if(value <= 0){
                alert('더이상 줄일 수 없습니다.');
                console.log(value);
                value = 1; 
                console.log(value);
            }
       }else if($this.hasClass('plus')){
        // console.log(value);
        // console.log('증가');
            value++;
            // count.val(value);
        }  
         count.val(value);

        price.html(numberWithCommas(value * price_num));

        
      
        // value == value;
        // return value;
        
    });

    count.on('change keyup prototypechange input paste',function(){
          
           var value = $(this).val();
           console.log(value);

            $('.price').html(numberWithCommas(value * price_num));
        })

	});

</script>


