<!DOCTYPE HTML>
<html ng-app>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>淡江大學童軍團40週年暨財團法人剛毅童軍文教基金會15週年 報名系統</title>
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
			
			<!-- Angular引用 -->
			<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular.min.js"></script>
			
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
			
			<!-- 勾選後出現表單 -->
			<script>
				$(function(){
				$(".1p-form").hide();
				$(".2p-form").hide();
				$(".3p-form").hide();
				$(".4p-form").hide();
				$(".5p-form").hide();
				$(".6p-form").hide();
				$(".1moption").hide();
				$(".2moption").hide();
				$(".3moption").hide();
				$(".4moption").hide();
				$(".5moption").hide();
				$(".6moption").hide();
			
				$(".ps").click(function(){
					var id = $('input[name="peoples"]:checked').attr("id");
					if(id == 1){
						hideall();
						$(".mdescription").hide();
						$(".1p-form").slideDown();
						$(".1moption").slideDown();
					}
					if(id == 2){ 
						hideall();
						$(".mdescription").hide();
						$(".1p-form").slideDown();
						$(".2p-form").slideDown();
						$(".1moption").slideDown();
						$(".2moption").slideDown();
					}
					if(id == 3){
						hideall();
						$(".mdescription").hide();
						$(".1p-form").slideDown();
						$(".2p-form").slideDown();
						$(".3p-form").slideDown();
						$(".1moption").slideDown();
						$(".2moption").slideDown();
						$(".3moption").slideDown();
					}
					if(id == 4){ 
						hideall();
						$(".mdescription").hide();
						$(".1p-form").slideDown();
						$(".2p-form").slideDown();
						$(".3p-form").slideDown();
						$(".4p-form").slideDown();
						$(".1moption").slideDown();
						$(".2moption").slideDown();
						$(".3moption").slideDown();
						$(".4moption").slideDown();
					}
					if(id == 5){
						hideall();
						$(".mdescription").hide();
						$(".1p-form").slideDown();
						$(".2p-form").slideDown();
						$(".3p-form").slideDown();
						$(".4p-form").slideDown();
						$(".5p-form").slideDown();
						$(".1moption").slideDown();
						$(".2moption").slideDown();
						$(".3moption").slideDown();
						$(".4moption").slideDown();
						$(".5moption").slideDown();
					}
					if(id == 6){
						hideall();
						$(".mdescription").hide();
						$(".1p-form").slideDown();
						$(".2p-form").slideDown();
						$(".3p-form").slideDown();
						$(".4p-form").slideDown();
						$(".5p-form").slideDown();
						$(".6p-form").slideDown();
						$(".1moption").slideDown();
						$(".2moption").slideDown();
						$(".3moption").slideDown();
						$(".4moption").slideDown();
						$(".5moption").slideDown();
						$(".6moption").slideDown();
					}
					
				});	
			});
			
			function hideall(){
				$(".1p-form").hide();
				$(".2p-form").hide();
				$(".3p-form").hide();
				$(".4p-form").hide();
				$(".5p-form").hide();
				$(".6p-form").hide();
				$(".1moption").hide();
				$(".2moption").hide();
				$(".3moption").hide();
				$(".4moption").hide();
				$(".5moption").hide();
				$(".6moption").hide();
				};
			</script>

			<script type="text/javascript">
			function check_filed(form)
			{
			if(form.join_type.value=="")
			{
			  	 alert('請選擇參加形式!!'); 
			     return false;
			}
			if(form.join_date.value=="")
			{
			  	 alert('請選擇參加日期!!'); 
			     return false;
			}
			if(form.name_1.value=="")
			{
			  	 alert('主要連絡人姓名必需填寫!!'); 
			     return false;
			}
			if(form.tel_1.value=="")
			{
			  	 alert('主要連絡人電話必需填寫!!'); 
			     return false;
			}
			else{return true;}
			} 
			</script>
			
</head>

<body>
	<div id="wrapper">
		<?php include("banner.php");?>

		<section class="intro-section">
			<div class="intro">
		    <h2 style="font-size:35px;">歡迎來到40週年團慶大露營報名系統</h2>
			<img src="images/register/reg-01.png" style="width:60%;">
			</div>
		</section>
		
		
		
		<section class="gamification-section">
			<div class="container">
				<form method="post" action="check.php" onSubmit="return check_filed(this)">
				<div class="gamification">
					<h2 style="font-size:30px;font-weight: bold;color:red;">本活動已經結束，讓我們相約2014年12月20日，再次相會!</h2><br/>
					<p style="font-size:20px;font-weight: bold;text-align:center;">請洽詢慶祝大會活動專頁!</p>
				</div>
				<!-- Step-1 -->
				<div class="row order-anim conversely">
					<div class="ico ico2 anim-box"><span><em><i>
						<span data-picture data-alt="Step-1">
							<span data-src="images/register/01.png" data-width="50" ></span>
							<span data-src="images/register/01.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/food.png"></span>
							<![endif]-->
							<noscript><img src="images/register/01.png" width="50" alt="Step-1" ></noscript>
						</span>
					</i></em></span></div>
					<div class="col-r pre-animation anim-box" id="col-4">
						<div class="box">
						<?php 
						$dbc = mysqli_connect('localhost','mintw_for40','for40','mintw_40')or die('無法連結到MySQL資料庫，請聯繫大麵。');

						$query = "SELECT * FROM 40_jomb_join";

						$data=mysqli_query($dbc,$query);
						$camp = 37;
						$camp_high = 20;
						while ($row= mysqli_fetch_array($data))
						{
							if($row['join_type']=="露營 -普通營位")
							{$camp--;}
							if($row['join_type']=="露營 -空中營位")
							{$camp_high--;}
						}
						echo ("<p>C區一般露營區 ＄1,200 /營位/夜 共30個 <br/><br/><span style=\"font-weight:bold;\">目前尚剩餘 ".$camp." 個</span></p>");
						if(camp_high >= 0){echo ("<p>B區空中帳棚區 ＄1,800 /營位/夜 共20個 <br/><br/><span style=\"font-weight:bold;\">目前尚剩餘 ".$camp_high." 個</span></p>");}
						else{echo ("<p>B區空中帳棚區 ＄1,800 /營位/夜 共20個 <br/><br/><span style=\"font-weight:bold;\">目前已全數額滿 </span></p>");}
						
						mysqli_close($dbc);

						?>
						</div>
					</div>
					<div class="col-l pre-animation anim-box" id="col-3">
						<h2 class="game">Step-1 說明</h2>
						<p>本報名系統，如果是想要參加露營的伙伴，一次報名等同一個營位，而一個營位建議可以四個人一起使用。如果你們是家庭式有七個人想劃位兩個營位，可以爸爸報名一次，媽媽報名一次，方便我們掌握參加人數，謝謝。</p>
						<p>當然，如果有任何報名上的疑問，都可以來信詢問tkuscout@gmail.com<br/>或洽團慶執行秘書蘇傳凱伙伴<br/>0975-113-632。</p>
					</div>
				</div>
				<!-- Step-2 -->
				<div class="row order-anim conversely">
					<div class="ico ico2 anim-box"><span><em><i>
						<span data-picture data-alt="Step-2">
							<span data-src="images/register/02.png" data-width="50" ></span>
							<span data-src="images/register/02.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/food.png"></span>
							<![endif]-->
							<noscript><img src="images/register/02.png" width="50" alt="Step-2" ></noscript>
						</span>
					</i></em></span></div>
					<div class="col-r pre-animation anim-box" id="col-4">
						<div class="box" style="width:100%;">
							<div class="form-reg">
								<h2 class="game">參加形式：</h2><br/>
								<input type="radio" id="camp" name="join_type" ng-model="camp" value="露營 -普通營位">
								<label for="camp" style="width:35%;margin:0px auto;">露營 -普通營位</label><br/>
								<?php
								if(camp_high >= 0){echo  ('<input type="radio" id="camp_high" ng-model="camp_high" name="join_type" value="露營 -空中營位">
								<label for="camp_high" style="width:35%;margin:0px auto;">露營 -空中營位</label><br/>');}
								?>
								<input type="radio" id="room" name="join_type" value="自行安排住宿">
								<label for="room" style="width:35%;margin:0px auto;">自行安排住宿</label><br/>
								<input type="radio" id="nostay" name="join_type" value="不過夜">
								<label for="nostay" style="width:35%;margin:0px auto;">不過夜</label>
							</div>
						</div>
					</div>
					<div class="col-l pre-animation anim-box" id="col-3">
						<h2 class="game">Step-2 選擇參加形式</h2>
						<p>這次大露營，有提供露營、住宿、非住宿等形式，供大家選擇。</p>
						<p>露營：<br/>C區一般露營區 ＄1,200 /營位/夜<br/>需自備帳篷等露營用具<br/>B區空中帳棚區 ＄1,800 /營位/夜<br/>無須準備帳篷，適合家庭式使用。</p>
						<p>自行安排住宿、不過夜：每人每天酌收100元清潔費，住宿部分請自行訂房。</p>
						<p>登記並完成繳費後，我們將為您保留營位，請自行準備所有餐點，8月2日晚上我們將會提供烤乳豬一同慶祝，您可以規劃相關餐點搭配食用。</p>
						<p>空中營位<br/><br/><br/><img src="images/register/camp-high.jpg" width=350px></p>
					</div>
				</div>
				<!-- Step-3 -->
				<div class="row order-anim conversely">
					<div class="ico ico2 anim-box"><span><em><i>
						<span data-picture data-alt="Step-3">
							<span data-src="images/register/03.png" data-width="50" ></span>
							<span data-src="images/register/03.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/food.png"></span>
							<![endif]-->
							<noscript><img src="images/register/03.png" width="50" alt="Step-3" ></noscript>
						</span>
					</i></em></span></div>
					<div class="col-r pre-animation anim-box" id="col-4">
						<div class="box" style="width:100%;">
							<div class="form-reg">
								<h2 class="game">參加時間：</h2><br/>
								<input type="radio" id="1-3" ng-model="date1" name="join_date" value="8/1-8/3 三天全參加">
								<label for="1-3" style="margin:0px auto;">8/1-8/3 三天全參加</label><br/>
								<input type="radio" id="2-3" ng-model="date2" name="join_date" value="8/2-8/3 兩天">
								<label for="2-3" style="margin:0px auto;">8/2-8/3 兩天</label><br/>
								<input type="radio" id="only2" name="join_date" value="只參加一天 8/2">
								<label for="only2" style="margin:0px auto;">只參加一天 8/2</label><br/>
								<input type="radio" id="only3" name="join_date" value="只參加一天 8/3">
								<label for="only3" style="margin:0px auto;">只參加一天 8/3</label>
							</div>
						</div>
					</div>
					<div class="col-l pre-animation anim-box" id="col-3">
						<h2 class="game">Step-3 選擇你的參加時間</h2>
						<p>活動日期：8/1(五)-8/3(天)</p>
						<p>你可以選擇全程參與，或是來兩天一起與大家同樂。</p>
						<p>報到時間：<br/>8/1(五) 13:00-15:00<br/>8/2(六) 10:00-12:00</p>
					</div>
				</div>
				<!-- Step-4 -->
				<div class="row order-anim">
					<div class="ico ico1 anim-box"><span><em><i>
						<span data-picture data-alt="Step-3">
							<span data-src="images/register/04.png" data-width="50" ></span>
							<span data-src="images/register/04.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/hotel.png"></span>
							<![endif]-->
							<noscript><img src="images/register/04.png" width="50"  alt="Step-3" ></noscript>
						</span>
					</i></em></span></div>
					<div class="col-r pre-animation anim-box" id="col-2">
						<div class="box">
						<div class="req">
							<div class="form-reg">
								<h2 class="game">一起報名人數</h2><br/>
								<input type="radio" id="1" name="peoples" class="ps" value=1>
								<label for="1" style="display:inline-block;width:10%;padding: 5px 5px;">1</label>
								<input type="radio" id="2" name="peoples" class="ps" value=2>
								<label for="2" style="display:inline-block;width:10%;padding: 5px 5px;">2</label>
								<input type="radio" id="3" name="peoples" class="ps" value=3>
								<label for="3" style="display:inline-block;width:10%;padding: 5px 5px;">3</label>
								<input type="radio" id="4" name="peoples" class="ps" value=4>
								<label for="4" style="display:inline-block;width:10%;padding: 5px 5px;">4</label>
								<input type="radio" id="5" name="peoples" class="ps" value=5>
								<label for="5" style="display:inline-block;width:10%;padding: 5px 5px;">5</label>
								<input type="radio" id="6" name="peoples" class="ps" value=6>
								<label for="6" style="display:inline-block;width:10%;padding: 5px 5px;">6</label>
							</div>
							<div class="form" style="text-align:left;">
							<div class="3form" style="margin:7px 0;">
							
							</div>
							<div class="1p-form" style="margin:7px 0;text-align:left;">
								<h2 class="game" style="font-size:20px;">主要連絡人</h2><br/>
								<table>
								<tr><td>姓名：</td><td><input type="text" ng-model="onename" id="name_1"  name="name_1" /></td></tr>
								<tr><td>性別：</td><td>
								<div class="form-reg">
								<input type="radio" id="1.male" name="sex_1" value="男">
								<label for="1.male" style="display:inline-block;width:20%;padding: 5px 5px;">男</label>
								<input type="radio" id="1.female" name="sex_1" value="女">
								<label for="1.female" style="display:inline-block;width:20%;padding: 5px 5px;">女</label></div></td></tr>
								<tr><td>身分：</td><td>
								<div class="form-reg">
								<input type="radio" id="1.style1" name="style_1" value="團友">
								<label for="1.style1" style="display:block;padding: 5px 5px;margin-top:5px;">團友</label>第
								<input type="text" id="etc_1" name="etc_1" style="width:50px;"/>屆ETC
								<input type="radio" id="1.style2" name="style_1" value="團友家眷">
								<label for="1.style2" style="display:block;padding: 5px 5px;margin-top:5px;">團友家眷</label>
								<input type="radio" id="1.style3" name="style_1" value="各團團員">
								<label for="1.style3" style="display:block;padding: 5px 5px;margin-top:5px;">各團團員</label>
								<input type="radio" id="1.style4" name="style_1" value="家長">
								<label for="1.style4" style="display:block;padding: 5px 5px;margin-top:5px;">家長</label>
								<input type="radio" id="1.style5" name="style_1" value="服務員">
								<label for="1.style5" style="display:block;padding: 5px 5px;margin-top:5px;">服務員</label>
								<input type="radio" id="1.style6" name="style_1" value="其他">
								<label for="1.style6" style="display:block;padding: 5px 5px;margin-top:5px;">其他</label>
								</div></td></tr>
								<tr><td>身分證字號：</td><td><input type="text" id="idno_1" name="idno_1" /></td></tr>
								<tr><td>生日：</td><td><input type="text" id="bir_1" name="bir_1" /></td></tr>
								<tr><td>手機：</td><td><input type="text" id="tel_1" name="tel_1" /></td></tr>
								<tr><td>保險受益人：</td><td><input type="text" id="pro_1" name="pro_1" /></td></tr>
								<tr><td>電子信箱：</td><td><input type="text" id="email_1" name="email_1" /></td></tr>
								</table>
							</div>
							<div class="2p-form" style="margin:7px 0;text-align:left;">
							<h2 class="game" style="font-size:20px;">第二位</h2><br/>
								<table>
								<tr><td>姓名：</td><td><input type="text" ng-model="twoname" id="name_2" name="name_2" /></td></tr>
								<tr><td>性別：</td><td>
								<div class="form-reg">
								<input type="radio" id="2.male" name="sex_2" value="男">
								<label for="2.male" style="display:inline-block;width:20%;padding: 5px 5px;">男</label>
								<input type="radio" id="2.female" name="sex_2" value="女">
								<label for="2.female" style="display:inline-block;width:20%;padding: 5px 5px;">女</label></div></td></tr>
								<tr><td>身分：</td><td>
								<div class="form-reg">
								<input type="radio" id="2.style1" name="style_2" value="團友">
								<label for="2.style1" style="display:block;padding: 5px 5px;margin-top:5px;">團友</label>第
								<input type="text" id="etc_2" name="etc_2"  style="width:50px;"/>屆ETC
								<input type="radio" id="2.style2" name="style_2" value="團友家眷">
								<label for="2.style2" style="display:block;padding: 5px 5px;margin-top:5px;">團友家眷</label>
								<input type="radio" id="2.style3" name="style_2" value="各團團員">
								<label for="2.style3" style="display:block;padding: 5px 5px;margin-top:5px;">各團團員</label>
								<input type="radio" id="2.style4" name="style_2" value="家長">
								<label for="2.style4" style="display:block;padding: 5px 5px;margin-top:5px;">家長</label>
								<input type="radio" id="2.style5" name="style_2" value="服務員">
								<label for="2.style5" style="display:block;padding: 5px 5px;margin-top:5px;">服務員</label>
								<input type="radio" id="2.style6" name="style_2" value="其他">
								<label for="2.style6" style="display:block;padding: 5px 5px;margin-top:5px;">其他</label>
								</div></td></tr>
								<tr><td>身分證字號：</td><td><input type="text" id="idno_2" name="idno_2" /></td></tr>
								<tr><td>生日：</td><td><input type="text" id="bir_2" name="bir_2" /></td></tr>
								<tr><td>手機：</td><td><input type="text" id="tel_2" name="tel_2" /></td></tr>
								<tr><td>保險受益人：</td><td><input type="text" id="pro_2" name="pro_2" /></td></tr>
								</table>
							</div>
							<div class="3p-form" style="margin:7px 0;text-align:left;">
							<h2 class="game" style="font-size:20px;">第三位</h2><br/>
								<table>
								<tr><td>姓名：</td><td><input type="text" ng-model="threename" id="name_3" name="name_3" /></td></tr>
								<tr><td>性別：</td><td>
								<div class="form-reg">
								<input type="radio" id="3.male" name="sex_3"value="男">
								<label for="3.male" style="display:inline-block;width:20%;padding: 5px 5px;">男</label>
								<input type="radio" id="3.female" name="sex_3"value="女">
								<label for="3.female" style="display:inline-block;width:20%;padding: 5px 5px;">女</label></div></td></tr>
								<tr><td>身分：</td><td>
								<div class="form-reg">
								<input type="radio" id="3.style1" name="style_3" value="團友">
								<label for="3.style1" style="display:block;padding: 5px 5px;margin-top:5px;">團友</label>第
								<input type="text" id="etc_3" name="etc_3"  style="width:50px;"/>屆ETC
								<input type="radio" id="3.style2" name="style_3" value="團友家眷">
								<label for="3.style2" style="display:block;padding: 5px 5px;margin-top:5px;">團友家眷</label>
								<input type="radio" id="3.style3" name="style_3" value="各團團員">
								<label for="3.style3" style="display:block;padding: 5px 5px;margin-top:5px;">各團團員</label>
								<input type="radio" id="3.style4" name="style_3" value="家長">
								<label for="3.style4" style="display:block;padding: 5px 5px;margin-top:5px;">家長</label>
								<input type="radio" id="3.style5" name="style_3" value="服務員">
								<label for="3.style5" style="display:block;padding: 5px 5px;margin-top:5px;">服務員</label>
								<input type="radio" id="3.style6" name="style_3" value="其他">
								<label for="3.style6" style="display:block;padding: 5px 5px;margin-top:5px;">其他</label>
								</div></td></tr>
								<tr><td>身分證字號：</td><td><input type="text" id="idno_3" name="idno_3" /></td></tr>
								<tr><td>生日：</td><td><input type="text" id="bir_3" name="bir_3" /></td></tr>
								<tr><td>手機：</td><td><input type="text" id="tel_3" name="tel_3" /></td></tr>
								<tr><td>保險受益人：</td><td><input type="text" id="pro_3" name="pro_3" /></td></tr>
								</table>
							</div>
							<div class="4p-form" style="margin:7px 0;text-align:left;">
							<h2 class="game" style="font-size:20px;">第四位</h2><br/>
								<table>
								<tr><td>姓名：</td><td><input type="text" ng-model="fourname" id="name_4" name="name_4" /></td></tr>
								<tr><td>性別：</td><td>
								<div class="form-reg">
								<input type="radio" id="4.male" name="sex_4" value="男">
								<label for="4.male" style="display:inline-block;width:20%;padding: 5px 5px;">男</label>
								<input type="radio" id="4.female" name="sex_4" value="女">
								<label for="4.female" style="display:inline-block;width:20%;padding: 5px 5px;">女</label></div></td></tr>
								<tr><td>身分：</td><td>
								<div class="form-reg">
								<input type="radio" id="4.style1" name="style_4" value="團友">
								<label for="4.style1" style="display:block;padding: 5px 5px;margin-top:5px;">團友</label>,
								第<input type="text" id="etc_4" name="etc_4"  style="width:50px;"/>屆ETC
								<input type="radio" id="4.style2" name="style_4" value="團友家眷">
								<label for="4.style2" style="display:block;padding: 5px 5px;margin-top:5px;">團友家眷</label>
								<input type="radio" id="4.style3" name="style_4" value="各團團員">
								<label for="4.style3" style="display:block;padding: 5px 5px;margin-top:5px;">各團團員</label>
								<input type="radio" id="4.style4" name="style_4" value="家長">
								<label for="4.style4" style="display:block;padding: 5px 5px;margin-top:5px;">家長</label>
								<input type="radio" id="4.style5" name="style_4" value="服務員">
								<label for="4.style5" style="display:block;padding: 5px 5px;margin-top:5px;">服務員</label>
								<input type="radio" id="4.style6" name="style_4" value="其他">
								<label for="4.style6" style="display:block;padding: 5px 5px;margin-top:5px;">其他</label>
								</div></td></tr>
								<tr><td>身分證字號：</td><td><input type="text" id="idno_4" name="idno_4" /></td></tr>
								<tr><td>生日：</td><td><input type="text" id="bir_4" name="bir_4" /></td></tr>
								<tr><td>手機：</td><td><input type="text" id="tel_4" name="tel_4" /></td></tr>
								<tr><td>保險受益人：</td><td><input type="text" id="pro_4" name="pro_4" /></td></tr>
								</table>
							</div>
							<div class="5p-form" style="margin:7px 0;text-align:left;">
							<h2 class="game" style="font-size:20px;">第五位</h2><br/>
								<table>
								<tr><td>姓名：</td><td><input type="text" ng-model="fivename"id="name_5" name="name_5" /></td></tr>
								<tr><td>性別：</td><td>
								<div class="form-reg">
								<input type="radio" id="5.male" name="sex_5" value="男">
								<label for="5.male" style="display:inline-block;width:20%;padding: 5px 5px;">男</label>
								<input type="radio" id="5.female" name="sex_5" value="女">
								<label for="5.female" style="display:inline-block;width:20%;padding: 5px 5px;">女</label></div></td></tr>
								<tr><td>身分：</td><td>
								<div class="form-reg">
								<input type="radio" id="5.style1" name="style_5" value="團友">
								<label for="5.style1" style="display:block;padding: 5px 5px;margin-top:5px;">團友</label>
								第<input type="text" id="etc_5" name="etc_5"  style="width:50px;"/>屆ETC
								<input type="radio" id="5.style2" name="style_5" value="團友家眷">
								<label for="5.style2" style="display:block;padding: 5px 5px;margin-top:5px;">團友家眷</label>
								<input type="radio" id="5.style3" name="style_5" value="各團團員">
								<label for="5.style3" style="display:block;padding: 5px 5px;margin-top:5px;">各團團員</label>
								<input type="radio" id="5.style4" name="style_5" value="家長">
								<label for="5.style4" style="display:block;padding: 5px 5px;margin-top:5px;">家長</label>
								<input type="radio" id="5.style5" name="style_5" value="服務員">
								<label for="5.style5" style="display:block;padding: 5px 5px;margin-top:5px;">服務員</label>
								<input type="radio" id="5.style6" name="style_5" value="其他">
								<label for="5.style6" style="display:block;padding: 5px 5px;margin-top:5px;">其他</label>
								</div></td></tr>
								<tr><td>身分證字號：</td><td><input type="text" id="idno_5" name="idno_5" /></td></tr>
								<tr><td>生日：</td><td><input type="text" id="bir_5" name="bir_5" /></td></tr>
								<tr><td>手機：</td><td><input type="text" id="tel_5" name="tel_5" /></td></tr>
								<tr><td>保險受益人：</td><td><input type="text" id="pro_5" name="pro_5" /></td></tr>
								</table>
							</div>
							<div class="6p-form" style="margin:7px 0;text-align:left;">
							<h2 class="game" style="font-size:20px;">第六位</h2><br/>
								<table>
								<tr><td>姓名：</td><td><input type="text" ng-model="sixname" id="name_6" name="name_6"/></td></tr>
								<tr><td>性別：</td><td>
								<div class="form-reg">
								<input type="radio" id="6.male" name="sex_6" value="男">
								<label for="6.male" style="display:inline-block;width:20%;padding: 5px 5px;">男</label>
								<input type="radio" id="6.female" name="sex_6" value="女">
								<label for="6.female" style="display:inline-block;width:20%;padding: 5px 5px;">女</label></div></td></tr>
								<tr><td>身分：</td><td>
								<div class="form-reg">
								<input type="radio" id="6.style1" name="style_6" value="團友">
								<label for="6.style1" style="display:block;padding: 5px 5px;margin-top:5px;">團友</label>第
								<input type="text" id="etc_6" name="etc_6" style="width:50px;" />屆ETC
								<input type="radio" id="6.style2" name="style_6" value="團友家眷">
								<label for="6.style2" style="display:block;padding: 5px 5px;margin-top:5px;">團友家眷</label>
								<input type="radio" id="6.style3" name="style_6" value="各團團員">
								<label for="6.style3" style="display:block;padding: 5px 5px;margin-top:5px;">各團團員</label>
								<input type="radio" id="6.style4" name="style_6" value="家長">
								<label for="6.style4" style="display:block;padding: 5px 5px;margin-top:5px;">家長</label>
								<input type="radio" id="6.style5" name="style_6" value="服務員">
								<label for="6.style5" style="display:block;padding: 5px 5px;margin-top:5px;">服務員</label>
								<input type="radio" id="6.style6" name="style_6" value="其他">
								<label for="6.style6" style="display:block;padding: 5px 5px;margin-top:5px;">其他</label>
								</div></td></tr>
								<tr><td>身分證字號：</td><td><input type="text" id="idno_6" name="idno_6" /></td></tr>
								<tr><td>生日：</td><td><input type="text" id="bir_6" name="bir_6" /></td></tr>
								<tr><td>手機：</td><td><input type="text" id="tel_6" name="tel_6" /></td></tr>
								<tr><td>保險受益人：</td><td><input type="text" id="pro_6" name="pro_6" /></td></tr>
								</table>
							</div>
							<br/><br/>
							<p>其他報名備註事項(如有特殊需求，或是成員特殊疾病需備註，請於此註記，謝謝)<br/>
							<textarea name="remark" id="remark" style="margin: 2px; width: 290px; height: 83px;"></textarea></p>
							</div>
						</div>
						
						</div>
					</div>
					<div class="col-l pre-animation anim-box" id="col-1">
						<h2 class="game">Step-4 輸入參加人員資料</h2>
						<p>現在請輸入參加人員資料，依照你找到的同行人數選擇「一起報名人數」。</p>
						<p>「主要連絡人」這位伙伴在大露營之前，會是我們聯繫的管道喔。</p>
					</div>
				</div>
				<!-- Step-5 -->
				<div class="row order-anim conversely">
					<div class="ico ico2 anim-box"><span><em><i>
						<span data-picture data-alt="Step-2">
							<span data-src="images/register/05.png" data-width="50" ></span>
							<span data-src="images/register/05.png" data-media="(-webkit-min-device-pixel-ratio:1.5), (min-resolution:144dpi)" data-width="50" ></span>
							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/food.png"></span>
							<![endif]-->
							<noscript><img src="images/register/05.png" width="50" alt="Step-2" ></noscript>
						</span>
					</i></em></span></div>
					<div class="col-r pre-animation anim-box" id="col-4">
						<div class="box" style="width:100%;">
							<h2 class="game">要參加模組活動</h2>
							<div class="form-reg">
								<p class="mdescription">請先填完上一步驟的個人資料後，才可以填寫此欄喔!</p>
								<input type="checkbox" id="1m" name="mjoin[]" value="{{ onename }}">
								<label for="1m" style="margin:0px auto;" class="1moption">{{ onename }}</label><br/>
								<input type="checkbox" id="2m" name="mjoin[]" value="{{ twoname }}">
								<label for="2m" style="margin:0px auto;" class="2moption">{{ twoname }}</label><br/>
								<input type="checkbox" id="3m" name="mjoin[]" value="{{ threename }}">
								<label for="3m" style="margin:0px auto;" class="3moption">{{ threename }}</label><br/>
								<input type="checkbox" id="4m" name="mjoin[]" value="{{ fourname }}">
								<label for="4m" style="margin:0px auto;" class="4moption">{{ fourname }}</label><br/>
								<input type="checkbox" id="5m" name="mjoin[]" value="{{ fivename }}">
								<label for="5m" style="margin:0px auto;" class="5moption">{{ fivename }}</label><br/>
								<input type="checkbox" id="6m" name="mjoin[]" value="{{ sixname }}">
								<label for="6m" style="margin:0px auto;" class="6moption">{{ sixname }}</label>
							</div>
						</div>
					</div>
					<div class="col-l pre-animation anim-box" id="col-3">
						<h2 class="game">Step-5 選擇是否參加模組活動</h2>
						<p>想體驗國際級大露營一樣的模組活動嗎?有水上活動、工作坊Workshop、探索體驗等各種活動，大人小孩都能玩。</p>
						<p></p>
						<p>模組活動費用：500元/每人</p>
					</div>
				</div>
			</div>
		</section>
		<section class="expense-section">
			<div class="container">
				<p>
				感謝協助填寫本次活動的報名系統，請按下面「預覽」，進行資料確認<br/>此外本系統也會計算參加費用，並於下一頁顯示。
				</p>
			</div>
		</section>
		
		<section class="more-section">
			<div class="container">
				<button type="submit" class="btn" onsubmit=""><span>預覽</span></button>
			</form>
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