
function sproutSlide(element,width,slideNum,duration,autovalue,interval){
	var slider = $(element);
	var animateLoop;

	// setting Area ------------------------
	// width    : Slider Width
	// slideNum : 'li' number per Page 
	// pageNum  : Sldier Page Number
	// autoplay : true or false

	var width = width;
	var slideNum = slideNum;
	var pageNum = Math.ceil($(element).find('.sprout-slide > li').length/slideNum);
	var duration = duration;
	var autoplay = autovalue;
	var autoInterval = interval;

	// Don't Modify ------------------------
	var current =0;
	var next =1;

	//Initial Layout
	slider.find('.sprout-slide-wrapper').css('width', width);
	slider.find('.sprout-slide').css('width', width* pageNum);
	slider.find('.sprout-slide > li').css('width', width/slideNum);

	//清空 舊的 page li
	//解決：如果有重新叫同一個 sider 時出現的 兩倍 li 問題
	slider.find('.sprout-dots').html('');

	//Create Page li
	for( i=1 ; i <= pageNum ; i++ ){
		slider.find('.sprout-dots').append('<div></div>');
	};

	//Active First dots
	//解決：如果有重新叫同一個 sider 時出現的問題，一開始要把 ul margin-left 位置 歸0; 
	slider.find('.sprout-slide').css('margin-left','0px');
	slider.find('.sprout-dots div').eq(0).addClass('active');

	//Fade In Slider
	slider.delay(2000).fadeIn(500);

	//Autoplay Slider
	if (autoplay) {
		clearInterval(parseInt($(element).attr('slide-loop-id')));
		animateLoop = setInterval(animateSetNext, autoInterval);
		$(element).attr('slide-loop-id',animateLoop);
	};

	//unbind 舊的 function
	//解決：如果有重新叫同一個 sider 時出現的 duplicated function
	slider.find('.sprout-next').unbind("click");
	slider.find('.sprout-prev').unbind("click");
	slider.find('.sprout-dots div').unbind("click");
	//clearInterval(animateLoop);
	//clearInterval(animateSetNext);

	slider.find('.sprout-next').click(function(){
		clearInterval(animateLoop);
		next = current + 1;
		if( next > pageNum-1){
			next = 0;
		}
		animateSlide();
		current = next;

		//add animateTimer function to end of animation queue
		if (autoplay) {
			//console.log('autoplay_for_next');
			animateLoop = setInterval(function(){
				animateSetNext();
			}, autoInterval);
			$(element).attr('slide-loop-id',animateLoop);
		};
	});

	slider.find('.sprout-prev').click(function(){
		clearInterval(animateLoop);
		next = current - 1;
		if( next < 0){
			next = pageNum-1;
		}
		animateSlide();
		current = next;

		//add animateTimer function to end of animation queue
		if (autoplay) {
			//console.log('autoplay_for_prev');
			animateLoop = setInterval(function(){
				animateSetNext();
			}, autoInterval);
			$(element).attr('slide-loop-id',animateLoop);
		};
	});

	slider.find('.sprout-dots div').click(function(){
		clearInterval(animateLoop);
		next = $(this).index();
		animateSlide();
		current = next;

		//add animateTimer function to end of animation queue
		if (autoplay) {
			//console.log('autoplay_for_dots');
			animateLoop = setInterval(function(){
				animateSetNext();
			}, autoInterval);
			$(element).attr('slide-loop-id',animateLoop);
		};
	});

	function animateSlide(){
		//animate the slide
		slider.find('.sprout-slide').animate({'margin-left':next*(-1)*width+'px'},duration).queue(function(){
			$(this).dequeue();
		});;
		//Active Pages dot
		slider.find('.sprout-dots div').removeClass('active');
		slider.find('.sprout-dots div').eq(next).addClass('active');
	}

	function animateSetNext(){
		//Reset Next
		next = current + 1;
		if( next > pageNum-1){
			next = 0;
		}
		//DO animate
		animateSlide();
		//Reset Current
		current = next;
	};

}


