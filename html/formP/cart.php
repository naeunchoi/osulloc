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
    <link rel="stylesheet" href="../css/cart.css">
    <link rel="stylesheet" href="../css/footer.css">

    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script type="text/javascript" src="../js/instafeed.min.js"></script>

    <link rel="stylesheet" href="../css/slick.css">
    
    <title>cart</title>
</head>
<body>
        <header id="header">
            <? include "../layout/_header.html"?>
        </header>
        <section class="main_banner cart_wrap">
            <div class="cart_title">
                <h1>장바구니</h1>
            </div>
            <div class="cart_tab_wrap">
                <ul class="cart_tab">
                    <li class="active pointer">
                        <a href="http://" target="_blank" rel="noopener noreferrer">일반상품
                            <span class="num">
                                (
                                    <div class="numwrite">0</div>
                                )
                            </span>
                        </a>
                    </li>
                    <li class="pointer">
                        <a href="http://" target="_blank" rel="noopener noreferrer">베이커리
                            <span class="num">
                                (
                                    <div class="numwrite">0</div>
                                )
                            </span>
                        </a>
                    </li>
                </ul>
                <div class="order_wrap">
                    <table class="cart_tabindex_wrap">
                        <thead>
                            <tr>
                                <th class="col_chkbox">
                                    <input type="checkbox" id=cart_chk_pub checked>
                                    <label class="pointer cart_chk " for="cart_chk_pub"></label>
                                </th>
                                <th class="col_info">상품정보</th>
                                <th class="col_num">수량</th>
                                <th class="col_price">상품가격</th>
                                <th class="col_sell">판매가격</th>
                                <th class="col_blank"></th>
                            </tr>
                        </thead>
                        <tbody class="order_area ordinary_order active">
                        </tbody>
                        <tbody class="order_area bakery_order">
                            <tr class="nocart">
                                <td colspan="6">장바구니에 담긴 상품이 없습니다.</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="order_notice">
                        <span>
                            * 장바구니에 보관된 제품은 15일 후에 삭제됩니다.
                        </span>
                    </div>
                </div>
            </div>
            <div class="bill">
                <div class="bill_box">
                    <div class="bill_item">
                        <div class="bill_tit">상품가격</div>
                        <div class="bill_price">
                            <span class="bill_og_price font_bold">0</span>
                            <span class="color72">원</span>
                        </div>
                    </div>
                    <i class="fas fa-minus"></i>
                    <div class="bill_item">
                        <div class="bill_tit">상품할인</div>
                        <div class="bill_price">
                            <span class="bill_dc font_bold">0</span>
                            <span class="color72">원</span>
                        </div>
                    </div>
                    <i class="fas fa-plus"></i>
                    <div class="bill_item">
                        <div class="bill_tit">배송비</div>
                        <div class="bill_price">
                            <span class="bill_delivery font_bold">2500</span>
                            <span class="color72">원</span>
                        </div>
                    </div>
                    <i class="fas fa-equals"></i>
                    <div class="bill_item bill_item_payfin">
                        <div class="bill_tit">장바구니 금액</div>
                        <div class="bill_price">
                            <span class="bill_payfin font_bold discount_color font30">0</span>
                            <span class="discount_color font25">원</span>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="cart_footer">
                <button>
                    <a href="http://" target="_blank" rel="noopener noreferrer">선택상품 주문</a>
                </button>
                <button>
                    <a href="http://" target="_blank" rel="noopener noreferrer">전체상품 주문</a>
                </button>
            </div>
        </section>
        <footer id="footer">
            <? include "../layout/_footer.html"?>
        </footer>

    <script src="../js/product.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/scroll.js"></script>
    
    <script src="../js/footer.js"></script>    

    <style>
    .col_sell{position: relative;}
     .order_wrap .cart_tabindex_wrap .order_area tr .col_sell .dc_wrap{
  
        display: block; 

        position: absolute;
        top: 33%;
        right: 2%;

      
        color: #d5761b; 
        font-size: 12px;
      }
      .order_wrap .cart_tabindex_wrap .order_area tr .col_sell .dc_wrap .dc{
        font-size: 12px;
        font-weight:bold;
        color: #d5761b; 
    }
    
    </style>
    
    <script>

        function numberWithCommas(x) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }

        $(function(){
            for(var i=4;  i < 7 ; i++ ){ 
                name = pdts[i].name;
                id = pdts[i].id;
                price = pdts[i].price;
                discount = pdts[i].discount;
				discount2 = pdts[i].discount2;
                img = pdts[i].img;
                discountTag = "";

                if(discount){

                    var price2 = price - (price * discount2 / 100);
                    var salePrice = parseInt(price * discount2 / 100);
                    var sale = `
                    <span class="dc_wrap">( -<i class="dc">`+numberWithCommas(salePrice)+`</i>원 ) </span>
                    `
                }else{
                    price2 = price;
                    sale = ''; 
                }
            
                
                txt = `
                            <tr class="order`+ i +` order" idx="`+id+`"> 
                                <th class="col_chkbox">
                                    <input type="checkbox"id="cark_chk`+i+`" name="chk" checked ="checked">
                                    <label  class="pointer cart_chk " for="cark_chk`+i+`"></label>
                                </th>
                                <th class="col_info_item">
                                    <div class="info_item_area">
                                        <span class="img">
                                            <img src="../subP/img/`+img+`" alt="`+img+`">
                                        </span>
                                        <div class="txt_box">
                                            <span class="name"><a href="">`+name+`</a></span>
                                            <span>포장불가</span>
                                        </div>
                                    </div>
                                </th>
                                <th class="col_num col_num_`+i+`">
                                    <button type="button" class="count_btn minus pointer">
                                         <i class="fas fa-minus"></i>
                                    </button>
                                    <input type="text" min="1" max="100" class="incart_count pointer" id="incart_count" value="1">
                                    <button type="button" class="count_btn plus pointer">
                                         <i class="fas fa-plus"></i>
                                    </button>
                                </th>
                                <th class="col_price">
                                    <span><strong class=price>`+numberWithCommas(price)+`</strong>원</span>
                                </th>
                                <th class="col_sell">
                                    `+sale+`
                                    <span><strong class="sell_price font_bold">`+numberWithCommas(price2)+`</strong>원</span>
                                </th>
                                <th class="col_blank col_btn_wrap">
                                    <div class="col_btn_area">
                                        <button type="button" class="pointer"><a href="">바로구매</a></button>
                                        <button type="button" class="pointer"><a href="">위시리스트</a></button>
                                        <button type="button" class="pointer">삭제</button>
                                    </div>
                                </th>
                            </tr>
                `
                html = html + txt;
                }
               $('.order_wrap .cart_tabindex_wrap .ordinary_order').html(html);
        });
    </script>
    <script>
            function orderTab(){
            var tabli = '.cart_tab li a';

        $(document).on('click' ,  tabli , function(e){
                e.preventDefault();
                var $this = $(this)
                var thisIndx = $this.parents('li').index();
                var orderIndex = $('.order_area');
                


            
                $this.parents('li').addClass('active').siblings().removeClass('active');
                orderIndex.eq(thisIndx).addClass('active').siblings().removeClass('active');
                
                return $this;
        })

        }

        $(function(){

            orderTab();
        })
    
    
    </script>

    <script>
        //     $(document).ready(function(){
            
        //     $(document).on('click','#cart_chk_pub',function(){
        //         //클릭되었으면
        //         if($("#cart_chk_pub").prop("checked")){
        //             $("input[name=chk]").prop("checked",true);
        //         }else{
        //             $("input[name=chk]").prop("checked",false);
        //         }
        //     })
        // })
    </script>

    <script>
    $(function(){

       function addPrice(){
        var bill_og_price = $('.bill_og_price');
        var bill_dc = $('.bill_dc');
	    var bill_delivery  =  $('.bill_delivery');
	    var bill_delivery_price = Number(bill_delivery.html());
        var bill_payfin  = $('.bill_payfin ');
        

        var array = new Array();
        var discountArray = new Array();
        var total = 0;
        var dc_total = 0;

        $('.incart_count').each(function(){
            array.push($(this).val());
        });

        $('.dc').each(function(){
            discountArray.push(Number($(this).parents('tr').find('.incart_count').val()));
        });


       $('.sell_price').each(function(i){
         var idx = $(this).parents('tr').attr('idx')-1;
        //  console.log(idx)
         var check = $(this).parents('tr').find('input[type="checkbox"]').is(':checked');
        
         if(check){
            total += pdts[idx].price * array[i];
            console.log(array[i])
         }
         
       });

       $('.dc').each(function(i){
        var idx = $(this).parents('tr').attr('idx')-1;
    
        var check = $(this).parents('tr').find('input[type="checkbox"]').is(':checked');
        var salePrice = pdts[idx].price * pdts[idx].discount2 / 100;
        if(check){
           
            dc_total += salePrice * discountArray[i];
            console.log(discountArray)
        }
       });


       bill_og_price.html(numberWithCommas(total));
       bill_dc.html(numberWithCommas(dc_total));
    
      
       if((total - dc_total) < 30000){
          bill_delivery_price = 2500;
       }else{
          bill_delivery_price = 0;
       }
       bill_delivery.html(numberWithCommas(bill_delivery_price));

       bill_payfin.html(numberWithCommas(total - dc_total + bill_delivery_price));


      $(document).on('change','input[type="checkbox"]',function(){
        addPrice(); 
      });

       $(document).on('click','#cart_chk_pub',function(){
          if($('#cart_chk_pub').prop('checked')){
            $('input[name="chk"]').prop('checked',true)
          }else{
            $('input[name="chk"]').prop('checked',false)
          }
       });
       }addPrice();            
       function countBtn(){
                $(document).on('click','.count_btn',function(){
                    var $this = $(this);

                    var idx = parseInt($(this).parents('tr').attr('idx')-1);

                    var incartCount = $this.parents('th').find('.incart_count');

                    var value = incartCount.val();

                    var sellprice = $this.parents('tr').find('.sell_price');
                    var sellpriceNum = parseInt(sellprice.html());


                    var dcPrice = $this.parents('tr').find('.dc');

                

                    var orginal_price = parseInt(pdts[idx].price);
                    //pdts의 값 받아오기 
                    
                    if(pdts[idx].discount){
                        var salePrice = parseInt(orginal_price * pdts[idx].discount2 / 100);
                        var orginal_price = orginal_price - salePrice;
                    }
                    //  console.log(ColpriceNum);
                    

                    if($this.hasClass('minus')){
                    // var value =	$this.next('input').val();
                        value --; 
                        
                        if(value < 0){
                            value = 1;  
                        
                        }
                    
                    }else if($this.hasClass('plus')){
                        // var value =	$this.prev('input').val();
                        value++;

                    }
                    incartCount.val(value);
                    sellprice.html(numberWithCommas(value * orginal_price));
                    
                    dcPrice.html(numberWithCommas(salePrice * value));  
                    addPrice();
            }); 
       }countBtn();
                        

                       


    });
    
    </script>
</body>
</html>