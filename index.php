
<!DOCTYPE HTML>
<html  xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>淡江大學童軍團40週年暨財團法人剛毅童軍文教基金會15週年 慶祝活動網站</title>
	        <!-- 基本meta定義 -->
			<meta name="description" content="淡江大學童軍團即將邁入第40年了，同時也是財團法人剛毅童軍文教基金會15歲生日，本次團慶主旨「剛毅四十，邁向優質」，期望在這四十年的歲月之下，在大家一同努力之下，邁向更優質的複式童軍團。">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
						
			<!-- 臉書分享顯示定義 -->
			<meta property="og:title" content="淡江大學童軍團40週年暨財團法人剛毅童軍文教基金會15週年 慶祝活動網站" />
			<meta property="og:type" content="website" />
			<meta property="og:image" content="images/fb-share.jpg" />
			<meta property="og:description" content="淡江大學童軍團即將邁入第40年了，同時也是財團法人剛毅童軍文教基金會15歲生日，本次團慶主旨「剛毅四十，邁向優質」，期望在這四十年的歲月之下，在大家一同努力之下，邁向更優質的複式童軍團。" />
			
			<!-- CSS引用外部 -->
			<link rel="stylesheet" href="css/all.css" media="all">


			<!-- 倒數計時外部引用 -->

			<link rel="Stylesheet" type="text/css" href="css/time/main.css"></link>
			<script language="Javascript" type="text/javascript" src="js/jquery-1.4.1.js"></script>
			<script language="Javascript" type="text/javascript" src="js/jquery.lwtCountdown-1.0.js"></script>
			<script language="Javascript" type="text/javascript" src="js/misc.js"></script>

			<!-- Awesome Font引用外部 -->
			<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
			
			<!-- 縮圖icon -->
			<link rel="shortcut icon" href="images/favicon.ico" />
			
			<!-- 神之jQuery -->
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
			<script>window.jQuery || document.write('<script src="js/jquery-1.8.3.min.js"><\/script>')</script>
			<script src="js/jquery.main.js"></script>
				<!--[if lt IE 9]>
					<link rel="stylesheet" href="css/ie.css" >
					<script src="js/ie.js"></script>
				<![endif]-->
				<!--[if lt IE 10]><link rel="stylesheet" href="css/ie9.css" ><![endif]-->
				<!--[if gte IE 9]>
				  <style type="text/css">
				    .gradient {
				       filter: none;
				    }
				  </style>
				<![endif]-->
			
			
			
			<!-- Script 從25lab得到的Slide -->
			<script type="text/javascript" src="sprout-slide/sprout-slide.js"></script>
			<link type="text/css" rel="stylesheet" href="sprout-slide/sprout-slide.css">
			<script type="text/javascript">
			$(document).ready(function() {
				// sproutSlide(element,width,slideNum,duration,autovalue,interval);
				// element  : Slider's ID or class
				// width    : Slider's width 
				// slideNum : 'li' number per Page 
				// duration : animation's speed
				// autoplay : true or false
				// interval : autoplay interval
				sproutSlide('#slide1',1000,1,2000,true,3000);
			});
			</script>
			
			<!-- Script 浮動式選單 -->
			<script type='text/javascript'>
			$(function(){
　				$(window).load(function(){
　				　$(window).bind('scroll resize', function(){
　				　var $this = $(this);
				　　var $this_Top=$this.scrollTop();
 
　					　if($this_Top < 100){
　					　$('#top-bar').stop().animate({top:"-65px"});
　					　　}
　				　　　if($this_Top > 100){
　				　　　$('#top-bar').stop().animate({top:"0px"});
　　				　 }
　					　}).scroll();
　						});
						});
			</script>
			
			<!-- Script 動畫 for 8icon tada -->
			<link rel="stylesheet" href="css/animate.css">
			<script src="js/ani.js"></script>
			<script>
				$(function(){
				$("#8icon").mouseover(function(){
				$(this).addClass("animated pulse");		
				}).mouseout(function(){
				$(this).removeClass("animated pulse");
				});;
				});
			</script>


			<script src="js/kkcountdown.min.js" type="text/javascript"></script>
			<script type="text/javascript">
            $(document).ready(function(){

                $(".kkcountdown-1").kkcountdown({
                	dayText		: '天 ',
                	daysText 	: '天 ',
                    hoursText	: '時 ',
                    minutesText	: '分 ',
                    secondsText	: '秒',
                    displayZeroDays : true,
                    callback	: cBack,
                    rusNumbers  :   false
                });

                $("#go").on('click', function() {
                	var secs = $("#secs").val();

                	$("#secs").parent("span").html("<strong>"+secs+"</strong>");

                	$("#go").hide();

	                $(".kkcountdown-2")
	                	.attr('data-seconds', secs)
	                	.kkcountdown({
	                    hoursText	: ':',
	                    minutesText	: ':',
	                    secondsText	: '',
	                    displayZeroDays : true,
	                    textAfterCount: 'Hello! :-) ',
	                    warnSeconds : 10,
	                    warnClass   : 'alert',
                        callback : test
	                });
                });

            });

            function cBack(){
            	console.log('THE END - Function callback!');
            }
        </script>

</head>

<body>
	<div id="wrapper">
		<?php include("banner.php");?>

		<section class="intro-section">
			<div class="intro">
		    <div id="8icon"><p><img src="images/8icon-logo-2.png" style="width:75%;"></p></div>
		    <p></p>
			<h2>距離40週年團慶慶祝大會，還剩下：</h2>
			
		<section>
            <div class="box" style="width:35%; margin:0px auto;">
                <div class="big-countdown">
                    <div>
                        <span style="font-size:50px;font-weight:bold;"><span data-time="1419076800" class="kkcountdown-1"></span></span>
                    </div>
                </div>
             </div>
        </section>
        <br>
        <br>
		<h2>12月20日相聚淡江，歡慶四十</h2>
		</div>
		
		</section>
		
		<section class="expense-section">
			<div class="container">
				<div><h1 style="font-size:35px;font-weight: bold;">淡江大學童軍團即將邁入第40歲生日了</h1><br/><br/>
				<p><img src="images/index/header-01.png" style="width:90%;"></p><br/><br/>
				<p>接下來跟各位介紹，本次40週年團慶的8個主要的慶祝活動吧!<br/>
				這八個圖示都分別代表一個精心規劃的活動，即將在接下來的時間一一登場與各位相遇。</p>
				<ul><i class="fa fa-arrow-down fa-5x"></i></ul>
			</div>
			</div>
		</section>
		
		<section class="four-columns">
			<div class="container line-anim">
				<div class="column anim-box" id="column1">
					<div class="inner"> 
						<div id="icon-ani">
						<span data-picture data-alt="集會">
							<span data-src="images/4col-01.png" data-width="100" ></span>
							<span data-src="images/4col-01.png" data-media="(-webkit-min-device-pixel-ratio : 1.5),(min-resolution : 144dpi)" data-width="100" > </span>							
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/jet.png"></span>
							<![endif]-->
							<noscript><img src="images/4col-01.png" width="100"  alt="集會" ></noscript>
						</span>
						<h2 style="font-size:25px;font-family">團集會&慶祝大會</h2><br/>
						</div>
					</div>
				</div>
				<div class="column anim-box" id="column2">
					<div class="inner">
						<div id="icon-ani2">
						<span data-picture data-alt="工作坊">
							<span data-src="images/4col-02.png" data-width="100" ></span>
							<span data-src="images/4col-02.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="100" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/expenses.png"></span>
							<![endif]-->
							<noscript><img src="images/4col-02.png" width="100"  alt="工作坊" ></noscript>
						</span>
						<h2 style="font-size:25px;">Workshop工作坊</h2><br/>
						</div>
					</div>
				</div>
				<div class="column anim-box" id="column3">
					<div class="inner">
						<div id="icon-ani3">
						<span data-picture data-alt="大露營">
							<span data-src="images/4col-03.png" data-width="100"></span>
							<span data-src="images/4col-03.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="100" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/ico-go.png"></span>
							<![endif]-->
							<noscript><img src="images/4col-03.png" width="100"  alt="大露營" ></noscript>
						</span>
						<h2 style="font-size:25px;">40團慶大露營</h2><br/>
						</div>
					</div>
				</div>
				<div class="column anim-box" id="column4">
					<div class="inner">
						<div id="icon-ani4">
						<span data-picture data-alt="慶祝大會">
							<span data-src="images/4col-04.png" data-width="100"></span>
							<span data-src="images/4col-04.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="100"></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/analytics.png"></span>
							<![endif]-->
							<noscript><img src="images/4col-04.png" width="100" alt="慶祝大會" ></noscript>
						</span>
						<h2 style="font-size:25px;">慶祝晚會</h2><br/>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="four-columns">
			<div class="container line-anim">
				<div class="column anim-box" id="column1">
					<div class="inner"> 
						<div id="icon-ani5">
						<span data-picture data-alt="蛋捲劇場">
							<span data-src="images/4col-05.png" data-width="100" ></span>
							<span data-src="images/4col-05.png" data-media="(-webkit-min-device-pixel-ratio : 1.5),(min-resolution : 144dpi)" data-width="100" > </span>							
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/jet.png"></span>
							<![endif]-->
							<noscript><img src="images/4col-05.png" width="100"  alt="蛋捲劇場" ></noscript>
						</span>
						<h2 style="font-size:25px;">蛋捲劇場</h2><br/>
						</div>
					</div>
				</div>
				<div class="column anim-box" id="column2">
					<div class="inner" >
						<div id="icon-ani6">
						<span data-picture data-alt="童軍體驗展">
							<span data-src="images/4col-06.png" data-width="100" ></span>
							<span data-src="images/4col-06.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="100" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/expenses.png"></span>
							<![endif]-->
							<noscript><img src="images/4col-06.png" width="100"  alt="童軍體驗展" ></noscript>
						</span>
						<h2 style="font-size:25px;">童軍體驗展</h2><br/>
						</div>
					</div>
				</div>
				<div class="column anim-box" id="column3">
					<div class="inner" >
						<div id="icon-ani7">
						<span data-picture data-alt="40團刊">
							<span data-src="images/4col-07.png" data-width="100"></span>
							<span data-src="images/4col-07.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="100" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/ico-go.png"></span>
							<![endif]-->
							<noscript><img src="images/4col-07.png" width="100"  alt="40團刊" ></noscript>
						</span>
						<h2 style="font-size:25px;">40團刊</h2><br/>
						</div>
					</div>
				</div>
				<div class="column anim-box" id="column4">
					<div class="inner">
						<div id="icon-ani8">
						<span data-picture data-alt="團慶特色斥候工程">
							<span data-src="images/4col-08.png" data-width="100"></span>
							<span data-src="images/4col-08.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="100"></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/analytics.png"></span>
							<![endif]-->
							<noscript><img src="images/4col-08.png" width="100" alt="團慶特色斥候工程" ></noscript>
						</span>
						<h2 style="font-size:25px;">團慶特色斥候工程</h2><br/>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<section class="gamification-section">		
			<div class="container">
				<div class="gamification">
					<h2>除了上面看到這些活動之外，想知道40團慶一系列活動還有什麼嗎?</h2><br/>
					<h2 style="font-size:30px;font-weight: bold;">淡江大學童軍團40週年<br/>財團法人剛毅童軍文教基金會15週年<br/>慶祝活動預告</h2><br/>
				</div>
				<!-- 1 -->
				<div class="row order-anim conversely">
					<div class="ico ico2 anim-box"><span><em><i>
						<span data-picture data-alt="團慶大露營">
							<span data-src="images/gam/02.png" data-width="50" ></span>
							<span data-src="images/gam/02.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/food.png"></span>
							<![endif]-->
							<noscript><img src="images/gam/02.png" width="50" alt="團慶大露營" ></noscript>
						</span>
					</i></em></span></div>
					<div class="col-r pre-animation anim-box" id="col-4">
						<h2 class="game">40週年團慶大露營</h2>
						<p>團友及全團大小伙伴的家庭式露營，詳細資訊及報名方式請參考團慶大露營活動通知。<br/>
						國際級的模組活動，適合大家一同參與。</p>
						<p>時間：2014年8月1日至3日<br/>
						(也可選擇8月2日至3日)<br/>
						地點：日月潭左岸松湖營地<br/>
						費用：<br/>
						C區一般露營區 ＄1,200 /營位/夜 共30個<br/>
						B區空中帳棚區 ＄1,800 /營位/夜 共20個<br/>
						如不露營者，每人酌收清潔費100元/每天<br/>
						模組活動費用，加價500/人</p>
						<p><ul class="actions">
							<li><a href="jomb.php" class="button">團慶大露營專區</a></li>
							</ul></p>
					</div>
					<div class="col-l pre-animation anim-box" id="col-3">
						<img src="images/gam/gam-02.jpg" alt="團慶大露營" width="410">
					</div>
				</div>
				<div class="row order-anim">
					<div class="ico ico1 anim-box"><span><em><i>
						<span data-picture data-alt="團刊出版">
							<span data-src="images/gam/01.png" data-width="50" ></span>
							<span data-src="images/gam/01.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/hotel.png"></span>
							<![endif]-->
							<noscript><img src="images/gam/01.png" width="50"  alt="團刊出版" ></noscript>
						</span>
					</i></em></span></div>
					
					<div class="col-l pre-animation anim-box" id="col-1">
						<h2 class="game">40週年團刊 <b>剛毅</b></h2>
						<p>四十週年將會出版本團第12本「剛毅」，為近年來各項活動留下見證，補齊團史紀錄。本團自民國64年3月創立自今，足足已過了40個年頭，其中的歷史已是促成本團如今優質的重要原因之一，因此出版本刊，也是為了將歷史傳承下去。</p><br/>
						<p><a href="//" target= "_blank" >廣告刊登贊助說明</a></p>
						<p><a href="http://books.google.com.tw/books?id=9BhAAwAAQBAJ&pg=PA21&dq=%E5%89%9B%E6%AF%85&hl=zh-TW&sa=X&ei=FjVGVOuMEqXKmwWdwIKQCg&ved=0CCUQ6AEwAQ#v=onepage&q=%E5%89%9B%E6%AF%85&f=false" target= "_blank" >下載11期剛毅電子書(Google)</a></p>
					</div>
					<div class="col-r pre-animation anim-box" id="col-2">
						<img src="images/gam/gam-01.jpg" alt="團刊" width="400" >
					</div>
				</div>
				<!-- 2 -->
				<div class="row order-anim conversely">
					<div class="ico ico2 anim-box"><span><em><i>
						<span data-picture data-alt="童軍技能工作坊">
							<span data-src="images/gam/03.png" data-width="50" ></span>
							<span data-src="images/gam/03.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/food.png"></span>
							<![endif]-->
							<noscript><img src="images/gam/03.png" width="50" alt="童軍技能工作坊" ></noscript>
						</span>
					</i></em></span></div>
					<div class="col-r pre-animation anim-box" id="col-4">
						<h2 class="game">童軍技能工作坊</h2>
						<p>每月一次的童軍技能工作坊，透過多元的活動設計讓童軍技能更為活用。<br/>
						配合十二生肖及每個月不同主題的童軍技能，「做中學、學中做」。</p>
						<p>時間：每月底的一次團集會下午<br/>
						時間通常約兩小時。<br/>
						時間地點在接近活動時會公布。<br/>
						歡迎各位團友或淡水附近的家長帶小朋友一同來參與。</p>
						<br/>
					</div>
					<div class="col-l pre-animation anim-box" id="col-3">
						<img src="images/gam/gam-03.jpg" alt="童軍技能工作坊" width="350">
					</div>
				</div>
				<div class="row order-anim">
					<div class="ico ico1 anim-box"><span><em><i>
						<span data-picture data-alt="Scout PaPa去哪了">
							<span data-src="images/gam/04.png" data-width="50" ></span>
							<span data-src="images/gam/04.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/hotel.png"></span>
							<![endif]-->
							<noscript><img src="images/gam/04.png" width="50"  alt="Scout PaPa去哪了" ></noscript>
						</span>
					</i></em></span></div>
					
					<div class="col-l pre-animation anim-box" id="col-1">
						<h2 class="game">「Scout PaPa去哪了」<br/>童軍展</h2>
						<p>為期一週的童軍展覽，以靜態展示及動態手作坊來讓淡江同學、淡水居民與各校童軍伙伴對本團及童軍運動有更深入的了解。</p><br/>
						<p>時間:2014年12月16日-20日<br/>
						地點:淡江大學黑天鵝展示廳<br/>
						書卷廣場(晚上有蛋捲劇場)<br/>
						</p>
						<p><ul class="actions">
							<li><a href="booking.php" class="button">「Scout PaPa去哪了」</a></li>
							</ul></p>
					</div>
					<div class="col-r pre-animation anim-box" id="col-2">
						<img src="images/gam/gam-04.jpg" alt="Scout PaPa去哪了" width="400" >
					</div>
				</div>
				<!-- 2 -->
				<div class="row order-anim conversely">
					<div class="ico ico2 anim-box"><span><em><i>
						<span data-picture data-alt="特色斥堠工程">
							<span data-src="images/gam/05.png" data-width="50" ></span>
							<span data-src="images/gam/05.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/food.png"></span>
							<![endif]-->
							<noscript><img src="images/gam/05.png" width="50" alt="特色斥堠工程" ></noscript>
						</span>
					</i></em></span></div>
					<div class="col-r pre-animation anim-box" id="col-4">
						<h2 class="game">特色斥堠工程</h2>
						<p>羅浮群與資深團伙伴將設計團慶專屬的大型斥堠工程，歡迎大家一起來參觀留影。
						</p>
						<p>時間：2014年12月16日至20日<br/>
						地點：淡江大學書卷廣場<br/>
						</p>
					</div>
					<div class="col-l pre-animation anim-box" id="col-3">
						<img src="images/gam/gam-05.jpg" alt="特色斥堠工程" width="450">
					</div>
				</div>
				<div class="row order-anim">
					<div class="ico ico1 anim-box"><span><em><i>
						<span data-picture data-alt="慶祝大會">
							<span data-src="images/gam/06.png" data-width="50" ></span>
							<span data-src="images/gam/06.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/hotel.png"></span>
							<![endif]-->
							<noscript><img src="images/gam/06.png" width="50"  alt="慶祝大會" ></noscript>
						</span>
					</i></em></span></div>
					
					<div class="col-l pre-animation anim-box" id="col-1">
						<h2 class="game">慶祝大會</h2>
						<p>本團全體團員、服務員、家長、團友及各童軍團伙伴們共同分享成立40週年的喜悅。</p><br/>
						<p>時間：2014年12月20日下午<br/>
						地點：淡江大學<br/></p>
					</div>
					<div class="col-r pre-animation anim-box" id="col-2">
						<img src="images/gam/gam-06.jpg" alt="慶祝大會" width="400" >
					</div>
				</div>
				<div class="row order-anim conversely">
					<div class="ico ico2 anim-box"><span><em><i>
						<span data-picture data-alt="慶祝晚會">
							<span data-src="images/gam/07.png" data-width="50" ></span>
							<span data-src="images/gam/07.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/food.png"></span>
							<![endif]-->
							<noscript><img src="images/gam/07.png" width="50" alt="慶祝晚會" ></noscript>
						</span>
					</i></em></span></div>
					<div class="col-r pre-animation anim-box" id="col-4">
						<h2 class="game">慶祝晚會</h2>
						<p>本團全體團員、服務員、家長、團友及各童軍團伙伴們共同分享成立40週年的喜悅。
						</p>
						<p>時間：2014年12月20日晚間<br/>
						地點：淡水<br/>
						</p>
					</div>
					<div class="col-l pre-animation anim-box" id="col-3">
						<img src="images/gam/gam-07.jpg" alt="慶祝晚會" width="350">
					</div>
				</div>
				<div class="row order-anim">
					<div class="ico ico1 anim-box"><span><em><i>
						<span data-picture data-alt="文物捐贈">
							<span data-src="images/gam/08.png" data-width="50" ></span>
							<span data-src="images/gam/08.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/hotel.png"></span>
							<![endif]-->
							<noscript><img src="images/gam/08.png" width="50"  alt="文物捐贈" ></noscript>
						</span>
					</i></em></span></div>
					
					<div class="col-l pre-animation anim-box" id="col-1">
						<h2 class="game">文物捐贈</h2>
						<p>為了感謝淡江大學對本團長年的支持、發揮童軍回饋反哺之精神，我們希望能捐款30萬元，在淡水校園新蓋的會館中專屬於社團的同舟廣場留下童軍徽或是貝登堡的足跡，讓淡江校園也能成為童軍的重要地標。</p><br/>
					</div>
					<div class="col-r pre-animation anim-box" id="col-2">
						<img src="images/gam/gam-08.jpg" alt="文物捐贈" width="350" >
					</div>
				</div>
				
				
			</div>
		</section>
		
		<section class="expense-section">
			<div class="container">
				<div class="txt">
					<h2>剛毅四十，邁向優質</h2>
				</div>
			</div>
		</section>
		
		<section class="more-section">
			<div class="container">
				<h1>想知道更多關於40週年團慶的消息嗎?</h1>
				<p><ul class="actions">
				<li><a href="wait.html" class="button">知道更多</a></li>
				</ul></p>
			</div>
		</section>
	</div>
	<footer id="footer">
		<div class="footer-section">
			<p class="leftfooter">&copy; 2014 Scouts Group of Tamkang University.</p>
			<p class="rightfooter">
			
<!-- AddToAny BEGIN -->
<div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="margin:0px auto">
<a class="a2a_dd" href="http://www.addtoany.com/share_save"style="margin:0px auto"></a>
<a class="a2a_button_facebook"style="margin:0px auto"></a>
<a class="a2a_button_twitter"style="margin:0px auto"></a>
<a class="a2a_button_google_plus"style="margin:0px auto"></a>
</div>
<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
<!-- AddToAny END -->
<script type="text/javascript" id="tc_40bbd96f26">
var _tcq = _tcq || []; _tcq.push(['blog', '40bbd96f26', 'f29316', '000000']); 
(function() { var e = document.createElement('script'); e.type = 'text/javascript'; e.async = true; e.src = 'http://s.tcimg.com/w/v2/blog.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s); })();
</script>
</p>
		</div>
	</footer>
	
</body>
</html>