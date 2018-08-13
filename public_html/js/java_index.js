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


$(function(){
  $('.slideun').slick({
    accessibility: true,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    fade: true,
  });
});


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

// スクロールに追従するheader
jQuery(function($){
	// #imgtop01の読み込みを待つ
	setTimeout(function(){
		var cash = $('#cash');
		var container = $('#container');
		var scroll = $('#imgtop01').height() + 8;

		// 画像サイズが異様に小さい場合には再度取得を試みる
		if(scroll < 100){
			scroll = $('#imgtop01').height() + 8;
		}

		$(window).scroll(function() {
			if($(window).scrollTop() > scroll) {
				// #imgtop01が隠れている場合
				cash.addClass('stalking');
				container.addClass('for_stalk');
			} else {
				// #imgtop01が隠れていない場合
				cash.removeClass('stalking');
				container.removeClass('for_stalk');
			}
		});
	}, 500);
});


//線を引く

/*
$(function(){
    checkWidth();
    $(window).resize(checkWidth);
});
 
$(function(){
    checkHeight();
    $(window).resize(checkHeight);
});
*/

/*
checkWidth = function(){
    // ブラウザの横幅を取得
    var browserWidth = $(window).width();
 
    // ボックスの横幅を取得
    var boxW = $("#opimg02").width();
 
    // 左端から離す距離pxを計算
    var plusPxW = ((browserWidth - boxW)/2);
 
    // CSSで追加
    $('#opimg02').css({'left': plusPxW + "px"});
	
	
	spped = 1500;
	$('#op').css({
        left: browserWidth / 2,
    }).animate({
        left: 0,
        width: winW
    }, spped);
};
 
checkHeight = function(){
    var browserHeight = $(window).height();
 
    // ボックスの縦幅を取得
    var boxH = $("#opimg02").height();
 
    // 上端から離す距離pxを計算
    var plusPxH = ((browserHeight - boxH)/2);
 
    // CSSで追加
    $('#opimg02').css({'top': plusPxH + "px"});
	
	$('#op').css({
		top: browserHeight / 2
    });
	
};
*/



$(function() {
    winW = $(window).width();
	winH = $(window).height();
    spped = 1000;
    $('#op').css({
        left: winW / 2,
		top: winH / 2
    }).animate({
        left: 0,
        width: winW
    }, spped);
	

//線フェードアウト
	 $("#op").css({opacity:'1'});
    setTimeout(function(){
        $("#op").stop().animate({opacity:'0'},700);
    },1200);

    setTimeout(function(){
        $("#opimg02").stop().animate({opacity:'1'},800);
    },1900);

	$('#opimg02').css({
		left: (winW - 150) / 2,
		top: (winH - 100) / 2
    });
	
	$("#first").css({opacity:'1'});
    setTimeout(function(){
        $("#first").stop().animate({opacity:'0'},800);
    },3000);
	
    setTimeout(function(){
        $("#opimg02").stop().animate({opacity:'0'},800);
    },2800);
	
	setTimeout(function(){
		$('#first').css({'display':'none'});
		$('#opimg01').css({'display':'none'});
    },3800);
});
