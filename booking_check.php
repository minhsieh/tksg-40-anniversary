<!DOCTYPE HTML>
<html ng-app>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>「Scout PaPa去哪了」童軍展 - 淡江大學童軍團40週年暨財團法人剛毅童軍文教基金會15週年</title>
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
			
			

</head>

<body>
	<div id="wrapper">
		<?php include("banner.php");?>

		<section class="intro-section">
			<div class="intro">
		    <h2 style="font-size:35px;">送出前請先確認資料是否正確</h2>

<?php

$name = $_POST['name'];
$date = $_POST['date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$peoples = $_POST['peoples'];
$contact_name   = $_POST['contact_name'];
$contact_phone  = $_POST['contact_phone'];
$contact_tel    = $_POST['contact_tel'];
$contact_email  = $_POST['contact_email'];
$imformation = $_POST['imformation'];
$remark = $_POST['remark'];

echo '<div class="box" style="width:40%;text-align:left;margin:0px auto;"><h1 style="font-size:20px;text-align:center;font-weight:bold;">預約展覽資料確認欄</h1><br/><br/>';
echo '<p>團體名稱：'.$name.'</p>';
echo '<p>參觀日期：'.$date.'</p>';
echo '<p>開始參觀時間：'.$start_time.'</p>';
echo '<p>結束參觀時間：'.$end_time.'</p>';
echo '<p>參觀人數：'.$peoples.'</p>';
echo '<p>聯絡人姓名：'.$contact_name.'</p>';
echo '<p>聯絡人電話：'.$contact_phone.'</p>';
echo '<p>行動電話：'.$contact_tel.'</p>';
echo '<p>電子信箱：'.$contact_email.'</p>';
echo '<p>從何得知本展覽：'.$imformation.'</p>';
echo '<p>欲從展覽中獲得(其他意見)：'.$remark.'</p>';
echo '</div>';

				function rewrite()
				{
   					 echo "window.history.back();";
				}

?>

<form method="post" action="booking_send.php" >
<input type="hidden" name="name" value="<?php echo $name ?>">
<input type="hidden" name="date" value="<?php echo $date ?>">
<input type="hidden" name="start_time" value="<?php echo $start_time ?>">
<input type="hidden" name="end_time" value="<?php echo $end_time ?>">
<input type="hidden" name="peoples" value="<?php echo $peoples ?>">
<input type="hidden" name="contact_name" value="<?php echo $contact_name ?>">
<input type="hidden" name="contact_phone" value="<?php echo $contact_phone ?>">
<input type="hidden" name="contact_tel" value="<?php echo $contact_tel ?>">
<input type="hidden" name="contact_email" value="<?php echo $contact_email ?>">
<input type="hidden" name="imformation" value="<?php echo $imformation ?>">
<input type="hidden" name="remark" value="<?php echo $remark ?>">
</div>
		</section>
		
		<section class="expense-section">
			<div class="container">
				<p>
				請確認以上預約資料是否正確
				</p>
			</div>
		</section>
		
		<section class="more-section">
			<div class="container">
				<p><ul class="actions">
				<li><button type="submit" class="btn"><span>送出</span></button> <button type="button" class="btn" onclick="<?php rewrite() ?>"><span>重填</span></button></li>
				</ul></p>
			</div>
		</form>
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
</p>
		</div>
	</footer>
	
</body>
</html>