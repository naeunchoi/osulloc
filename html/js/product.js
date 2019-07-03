var pdts = [
                {"id":1, "name":"녹차밀크스프레드 200g", "price":8500, "unit":2000, "best":true, "discount":false,"eventNotice":false,"giftNotice":false,"img":"1.png"},
                {"id":2, "name":"삼다꿀배티 20입(티백)", "price":8500, "unit":2000, "best":true,"discount":true, "discount2":10, "eventNotice":false,"giftNotice":false,"img":"2.png"},
                {"id":3, "name":"제주동백꽃티 20입(티백)", "price":8500, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":false,"img":"3.png"},
                {"id":4, "name":"찬물녹차 20입(아이스티)", "price":7500, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":false,"img":"4.png"},
                {"id":5, "name":"WATER+ 컬렉션(티백)", "price":12000, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":false,"img":"5.png"},
                {"id":6, "name":"세작 40g(잎차)", "price":34000, "unit":2000, "best":true,"discount":true, "discount2":50, "eventNotice":true,"giftNotice":false,"img":"6.png"},
                {"id":7, "name":"메모리인제주 4입", "price":6000, "unit":2000, "best":true, "discount":false,"eventNotice":false,"giftNotice":true,"img":"7.png"},
                {"id":8, "name":"제주유채&꿀티 20입(티백)", "price":8500, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":false,"img":"8.png"},
                {"id":9, "name":"그린티 시트 마스크", "price":12000, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":false,"img":"9.png"},
                {"id":10, "name":"산호섬 20입(아이스티)", "price":12000, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":false,"img":"10.png"},
                {"id":11, "name":"벚꽃향가득한올레 20입(피라미드)", "price":23000, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":false,"img":"11.png"},
                {"id":12, "name":"프리미엄 티컬렉션", "price":25000, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":true,"img":"12.png"},
                {"id":13, "name":"세작 20입(피라미드)", "price":25000, "unit":2000, "best":true, "discount":false,"eventNotice":false,"giftNotice":false,"img":"13.png"},
                {"id":14, "name":"프리미엄가루녹차 40g(분말)", "price":10000, "unit":2000, "best":true, "discount":false,"eventNotice":false,"giftNotice":false,"img":"14.png"},
                {"id":15, "name":"그린티 랑드샤 10입", "price":12000, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":false,"img":"15.png"},
                {"id":16, "name":"제주섬녹차초콜릿바 3입", "price":8500, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":false,"img":"16.png"},
                {"id":17, "name":"덖음차 50g(잎차)", "price":15000, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":false,"img":"17.png"},
                {"id":18, "name":"달빛섬 20입(아이스티)", "price":12000, "unit":2000, "best":true, "discount":false,"eventNotice":false,"giftNotice":false,"img":"18.png"},
                {"id":19, "name":"제주순수녹차 20입(티백)", "price":8500, "unit":2000, "best":true, "discount":false,"eventNotice":false,"giftNotice":false,"img":"19.png"},
                {"id":20, "name":"귤꽃향을품은우잣담 10입(하드케이스)", "price":15000, "unit":2000, "best":true, "discount":false,"eventNotice":false,"giftNotice":false,"img":"20.png"},
                {"id":21, "name":"트로피컬블랙티 20입(티백)", "price":8500, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":false,"img":"21.png"},
                {"id":22, "name":"영귤섬 20입(아이스티)", "price":12000, "unit":2000, "best":true, "discount":false,"eventNotice":false,"giftNotice":false,"img":"22.png"},
                {"id":23, "name":"녹차밀크스프레드 400g", "price":15000, "unit":2000, "best":true,"discount":true, "discount2":20, "eventNotice":true,"giftNotice":false,"img":"23.png"},
                {"id":24, "name":"그린티라떼더블샷 10입(분말)", "price":12000, "unit":2000, "best":true,"discount":false, "eventNotice":false,"giftNotice":false,"img":"24.png"}
            ];

var html="";
var txt="";
var name="";
var price;
var unit;
var best;
var discount;
var discount2;
var eventNotice;
var giftNotice;
var img;
var imgTag;
var discountTag;
var eventTag;
var giftTag;
var id;
var cart = [];
var ct = 0;

var num = 5000;