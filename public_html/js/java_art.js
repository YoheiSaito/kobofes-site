$(function(){
var topb=$('#pageTop');
topb.hide();

 
$(window).scroll(function(){
  if($(this).scrollTop()>80){
    //画面を80pxスクロールしたら、ボタン表示
    topb.fadeIn();
  }else{
    //画面が80pxより上なら、ボタン表示
    topb.fadeOut();
  } 
});

//ボタンクリック後、スクロールして上に戻る
topb.click(function(){
  $('body,html').animate({
  scrollTop: 0},500);
  return false;
});

});

//ハンバーガーメニュー

$(function(){
    $(".menu").click(function(){
        $(".menu1").toggleClass("menuclick1")
    });
    $(".menu").click(function(){
        $(".menu2").toggleClass("menuclick2")
    });
    $(".menu").click(function(){
        $(".menu3").toggleClass("menuclick3")
    }); 
});

jQuery(function($){
	$('.menu').click(function(){
		if ($('#menu').css('display') == 'none') {
			$('#menu').slideDown('fast');
		} else {
			$('#menu').slideUp('fast');
		}
	});
});


/*
$(function(){
    if($.cookie("access")){
        $('#first').css({display:'none'});
    }
    $(window).load(function(){
        $.cookie("access",$('body').addClass('access'));
    })
});
*/
