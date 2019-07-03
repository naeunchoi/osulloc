<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Nanum+Gothic|Noto+Sans+KR|Noto+Serif+KR&display=swap" rel="stylesheet">
       <!-- font-family: 'Noto Sans KR', sans-serif;
font-family: 'Nanum Gothic', sans-serif;
font-family: 'Merriweather', serif;
font-family: 'Noto Serif KR', serif; -->
	
	<!-- 2019-06-14 AM 11:08 - Hong's Add -->
	<link rel="icon" type="image/png" sizes="32x32" href="../common_img/favicon32.png">
	<link rel="shortcut icon" type="image/x-icon" href="../common_img/favicon.ico">
	<!-- end -->


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">  
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/footer.css">

    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script type="text/javascript" src="../js/instafeed.min.js"></script>
    <script type="text/javascript">    
        var userFeed = new Instafeed({
            get: 'user',
            userId: '9459171257', //토큰 앞에 값
            sortBy: "most-recent",
            limit: 9,
            template: '<li><a href="{{link}}" target="_blank"><img src="{{image}}" /></a></li>', 
            // {{link}} : 게시물 링크, {{image}} : 사진 url, {{caption}} : 게시물 텍스트
            accessToken: '9459171257.c105b12.94a32dbbcc124597a8daa7741a92b87e'   
        });
         
        userFeed.run();
    </script>
    <link rel="stylesheet" href="../css/slick.css">
    <script src="../js/slick.min.js"></script>
    
    <title>Document</title>
</head>
<body>
    <div class="wrap">
        <header id="header">
            <? include "../layout/_header.html"?>
        </header>
        <div class="container" id="container">
            <section class="main_banner" id="main_banner">
                    <div class="main_img_item">
                        <div class="mainB mainB1"></div>
                        <div class="main_txtwrap">
                            <h1 class="key_title">
                                <span class="sub white">"역시, 삼다연!" 고객님들이 인정한 베스트 반발효차</span>
                                <span class="title white">삼다연 후(厚) 특별할인 DAY</span>
                            </h1>
                            <p>
                                <span class="white">2019년 6월 03일 ~ 2019년 6월 30일</span>
                            </p>
                            <div class="detail_btn btn">
                                <a href="" class="white b_white">자세히 보기</a>
                            </div>
                        </div>
                    </div>
                    <div class="main_img_item">
                        <div class="mainB mainB2"></div>
                        <div class="main_txtwrap">
                            <h1 class="key_title">
                                <span class="sub">뭉치면 할인UP! 워터플러스4종 신청기간</span>
                                <span class="title">여름대비 워터플러스 준비하세요~!</span>
                            </h1>
                            <p>
                                <span>2019년 6월 03일 ~ 2019년 6월 23일</span>
                            </p>
                            <div class="detail_btn btn">
                                <a href="">자세히 보기</a>
                            </div>
                        </div> 
                    </div>
                    <div class="main_img_item">
                        <div class="mainB mainB3"></div>
                        <div class="main_txtwrap">
                            <h1 class="key_title">
                                <span class="sub">오설록과 함께 시원한 여름을 보내는 방법</span>
                                <span class="title">여름이니까~ 아이스티! COOL SALE</span>
                            </h1>
                            <p>
                                <span>2019년 6월 03일 ~ 2019년 6월 30일</span>
                            </p>
                            <div class="detail_btn btn">
                                <a href="">자세히 보기</a>
                            </div>
                        </div>
                    </div>
                    <div class="main_img_item">
                        <div class="mainB mainB4"></div>
                        <div class="main_txtwrap">
                            <h1 class="key_title">
                                <span class="sub">매일매일 출석체크!</span>
                                <span class="title">6월 출석체크</span>
                            </h1>
                            <p>
                                <span>2019년 6월 01일 ~ 2019년 6월 30일</span>
                            </p>
                            <div class="detail_btn btn">
                                <a href="">자세히 보기</a>
                            </div>
                        </div>
                    </div>
            </section><!-- sec1 -->
            <section class="main_product" id="main_product">
                <article class="main_product_wrap">
                    <h2 class="main_product_title">Weekly Bestseller</h2>
                    <div class="main_priduct_slide" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
                        <!-- <div class="item_list">
                            <a href="">
                                <img src="./img/200_20190416161931537QN.png" alt="오땡큐 티박스 6종">
                                <span>오땡큐 티박스 6종</span>
                                <div class="price">
                                    <span><strong class="strong color333">22000</strong>원</span>
                                </div> 
                            </a>
                        </div>
                        <div class="item_list">
                            <a href="">
                                <img src="./img/200_20170418183503104KB.png" alt="마스터블렌드">
                                <span>마스터블렌드</span>
                                <div class="price">
                                    <span><strong class="strong color333">50,000</strong>원</span>
                                </div>    
                            </a>
                        </div>
                        <div class="item_list">
                            <a href="">
                                <img src="./img/200_20170525143048972GN.png" alt="시크릿티스토리">
                                <span>시크릿티스토리</span>
                                <div class="price">
                                    <span><strong class="strong color333">45,000</strong>원</span>
                                </div>
                            </a>
                        </div>
                        <div class="item_list">
                            <a href="">
                                <img src="./img/200_20181231210610634HR.png" alt="메모리인제주세트 20입">
                                <span>메모리인제주세트 20입</span>
                                <div class="price">
                                    <span><strong class="strong color333">38,000</strong>원</span>
                                </div>              
                            </a>
                        </div>
                        <div class="item_list">
                            <a href="">
                                <img src="./img/200_20190416162326756NH.png" alt="제주숲 동화 3종 미니세트">
                                <span>제주숲 동화 3종 미니세트</span>
                                <div class="price">
                                    <span><strong class="strong color333">25,000</strong>원</span>
                                </div>                   
                            </a>
                        </div>
                        <div class="item_list">
                            <a href="">
                                <img src="./img/200_20160908175319171GR.png" alt="베스트티컬렉션 4종">
                                <span>베스트티컬렉션 4종</span>
                                <div class="price">
                                    <span><strong class="strong color333">45,000</strong>원</span>
                                </div>     
                            </a>
                        </div>
                        <div class="item_list">
                            <a href="">
                                <img src="./img/200_20180510132548266RY.png" alt="러블리티박스">
                                <span>러블리티박스</span>
                                <div class="price">
                                    <span><strong class="strong color333">20,000</strong>원</span>
                                </div>     
                            </a>
                        </div>
                        <div class="item_list">
                            <a href="">
                                <img src="./img/200_20180724134753535TX.png" alt="WATER+ 핑크사워 30입(분말)">
                                <span>WATER+ 핑크사워 30입(분말)</span>
                                <div class="price">
                                    <span class="strong small">18,000원</span><span class="discount_color">16,000원(2,000원↓)</span>
                                </div>  
                            </a>
                        </div>
                        <div class="item_list">
                            <a href="">
                                <img src="./img/200_20181231210627143JC.png" alt="세작 20입(피라미드)">
                                <span>세작 20입(피라미드)</span>
                                <div class="price">
                                    <span><strong class="strong color333">25,000</strong>원</span>
                                </div>
                            </a>
                        </div>
                        <div class="item_list">
                            <a href="">
                                <img src="./img/200_20180821201700655XO.png" alt="스테인레스 더블월 컵">
                                <span>스테인레스 더블월 컵</span>
                                <div class="price">
                                    <span><strong class="strong color333">18,000</strong>원</span>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </article>
            </section><!-- sec2 -->
            <section class="promotion1">
                <div class="common_wrap promotion1_wrap">
                    <article class="today">
                        <a href="">
                            <div class="today_img"></div>
                            <div class="timer">
                                <h3 class="timer_title">Today Only</h3>
                                <ul class="count">
                                    <li class="time hour0">
                                        <span></span>
                                    </li>
                                    <li class="time hour1">
                                        <span></span>
                                    </li>
                                    <li class="colon">
                                        <span>:</span>
                                    </li>
                                    <li class="time min0">
                                        <span></span>
                                    </li>
                                    <li class="time min1">
                                        <span></span>
                                    </li>
                                    <li class="colon">
                                        <span>:</span>
                                    </li>
                                    <li class="time sec0">
                                        <span></span>
                                    </li>
                                    <li class="time sec1">
                                        <span></span>
                                    </li>
                                </ul>
                                <div class="timer_sub">
                                    <span>찬물녹차 20입(아이스티)</span>
                                    <span>7,500원 → <strong class="strong discount_color2 font_bold">5,250원</strong>(30%할인)</span>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="promotion_item">
                        <ul class="p_item">
                            <li>
                                <a href="">
                                    <img src="./img/20180305192813208OV.jpg" alt="오설록 올레길">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./img/20190417184230169BC.jpg" alt="그린티 롤케익 출시">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./img/20181231210756306TR.jpg" alt="상품포장가이드">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="./img/20190218095658034ME.jpg" alt="오피스 티 세트">
                                </a>
                            </li>
                        </ul>
                    </article>
                </div>
            </section><!-- sec3 -->
            <section class="common_wrap event event1">
                <a href="">
                    <h1>
                        <span>회원가입 시 <strong class="num_font">5,000원</strong> 할인쿠폰</span>
                        <span>주말 구매 시 <strong class="num_font">20%</strong> 할인쿠폰 증정</span>
                    </h1>
                </a>
            </section><!-- sec4 -->
            <section class="promotion2">
                <article class="common_wrap promotion2_wrap">
                    <div class="item1">
                        <a href="">
                            <img src="./img/20190602234923571TY.jpg" alt="공동구매">
                        </a>
                    </div>
                    <div class="item2">
                        <a href="">
                            <img src="./img/20190602235000105TJ.jpg" alt="쿠폰혜택s">
                        </a>
                    </div>
                </article>
            </section><!-- sec5 -->
            <section class="common_wrap event event2">
                <h1>
                    <span class="title">나에게 어울리는 차는?</span>
                    <span class="sub">오설록 티를 추천해 드립니다.</span>
                    <span class="view_btn btn "><a href="" class="color72 b_72">바로가기</a></span>
                </h1>
            </section><!-- sec6 -->
            <section class="osulloc_now">
                <ul class="common_wrap now_wrap" id="instafeed">
                    <li>
                        <a href="">
                            <img src="./img/now_h.jpg" alt="">
                        </a>
                    </li>
                </ul>
            </section><!-- sec7 -->
        </div>
        <footer id="footer">
        <? include "../layout/_footer.html"?>
        </footer>
    </div>
	<script src="../js/product.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/scroll.js"></script>
    <script src="../js/timer.js"></script>
    <script src="../js/footer.js"></script>
    

	
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

                if(discount){   // 디스카운트 변수를이용하여 아예다른 코드를 사용 할 경우
					var price2 = price - ( price * discount2 / 100 );
                    discountTag = ` <span class="strong small">`+price+`원</span><span class="discount_color">`+price2+`원(`+discount2+`↓)</span>`
					
                }else{
					discountTag = `<span><strong class="strong color333">`+price+`</strong>원</span>`
				}

                txt = 
                    `
					<div class="item_list">
						<a href="/subP/product.php?idx=`+id+`">
							<img src="/subP/img/`+img+`" alt="`+name+`">
							<span>`+name+`</span>
							<div class="price">
								`+discountTag+`
							</div>
						</a>
					</div>
                    `;
                html = html + txt;
            }

            $(".main_priduct_slide").html(html);
            
           
        });
       </script>
		<script type="text/javascript">
        $(document).ready(function () {
            $('.main_banner').slick({
                dots: true,
                arrow: true,
                autoplay: true,
                pauseOnHover:true,
                speed:1000,
                pauseOnDotsHover:true
            });

            $('.main_priduct_slide').slick({
                dots: true,
                arrow: true,
                autoplay: true,
                pauseOnHover:true,
                speed:1500,
                pauseOnDotsHover:true
            });
        });
    </script>


</body>
</html>