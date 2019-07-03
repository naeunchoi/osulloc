
function TAB1(){
    var pTabla = '.product_tab> div > ul > li';

    $(document).on('click',pTabla,function(e){
        e.preventDefault();
		  var $this = $(this);
		  var this_id = $this.find('a').attr('href');
		  var sectionTop = $(this_id).offset().top;
			$this.addClass('on').siblings().removeClass('on');
			 $('html, body').animate({
				scrollTop: sectionTop
			}, 1000)
    });


/*
    $(document).on('click','#productTab1',function(e){
        
        e.preventDefault();           
        $('html, body').animate({
            scrollTop: detailInfo
        }, 1000)
    });

    $(document).on('click','#productTab2',function(e){
        
        e.preventDefault();           
        $('html, body').animate({
            scrollTop: csReview
        }, 1000)
    });


    $(document).on('click','#productTab3',function(e){
        
        e.preventDefault();           
        $('html, body').animate({
            scrollTop: purchasingInfo
        }, 1000)
    });

	*/
}

$(function(){

    TAB1();
    })











function TAB2(){
    var tabli = '.tab li a';

   $(document).on('click' ,  tabli , function(e){
        e.preventDefault();
        var $this = $(this)
        var thisIndx = $this.parents('li').index();
        var tabindex = $('.tabindex');
        


      
        $this.parents('li').addClass('on').siblings().removeClass('on');
        tabindex.eq(thisIndx).addClass('on').siblings().removeClass('on');
        
        return $this;
   })

}

$(function(){

TAB2();
})