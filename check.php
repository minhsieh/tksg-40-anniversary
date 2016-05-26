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
			
			

</head>

<body>
	<div id="wrapper">
		<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo"><img src="images/40logo-color.png" width=30% style="margin-left:30px;"></div>
		<!-- 選單Menu -->
		<div id="top-bar">
			<div id="menu">
			<ul>
				<li><a href="#" accesskey="3" title="">TOP</a></li>
				<li><a href="index.html" accesskey="1" title="">首頁</a></li>
				<li><a href="jomb.html" accesskey="4" title="">團慶大露營</a></li>
				<li class="active"><a href="register.php" accesskey="2" title="">報名系統</a></li>
				<li><a href="donate.html" accesskey="3" title="">捐款芳名錄</a></li>
			</ul>
			</div>
		</div>

		
	</div>
	</div>
	<div id="banner">
		<div class="container">
			<!-- 頁首大標 -->
			<div class="title">
				<h2 style="font-size:20px;font-weight: bold;">淡江大學童軍團 40週年<br/>財團法人剛毅童軍文教基金會15週年</h2>
				<span class="byline"style="font-weight: bold;">40th Anniversary</span> </div>
				<h2 style="font-size:35px;font-weight: bold;">報名系統</h2>
				<br/>
			<div id="menu">
			<ul>
				<li><a href="index.html" accesskey="1" title="">回到頁首</a></li>
				<li><a href="jomb.html" accesskey="4" title="">團慶大露營</a></li>
				<li class="active"><a href="register.php" accesskey="2" title="">報名系統</a></li>
				<li><a href="donate.html" accesskey="3" title="">捐款芳名錄</a></li>
			</ul>
			</div>	
		</div>
	</div>

		<section class="intro-section">
			<div class="intro">
		    <h2 style="font-size:35px;">送出前請先確認資料是否正確</h2>

<?php

$join_type = $_POST['join_type'];
$join_date = $_POST['join_date'];
$peoples = $_POST['peoples'];
$mjoin = $_POST['mjoin'];
$remark = $_POST['remark'];
$fee = $_POST['fee'];

$name_1 = $_POST['name_1'];
$sex_1 = $_POST['sex_1'];
$style_1 = $_POST['style_1'];
$etc_1 = $_POST['etc_1'];
$idno_1= $_POST['idno_1'];
$bir_1 = $_POST['bir_1'];
$tel_1 = $_POST['tel_1'];
$pro_1 = $_POST['pro_1'];
$email_1 = $_POST['email_1'];

$name_2 = $_POST['name_2'];
$sex_2 = $_POST['sex_2'];
$style_2 = $_POST['style_2'];
$etc_2 = $_POST['etc_2'];
$idno_2= $_POST['idno_2'];
$bir_2 = $_POST['bir_2'];
$tel_2 = $_POST['tel_2'];
$pro_2 = $_POST['pro_2'];

$name_3 = $_POST['name_3'];
$sex_3 = $_POST['sex_3'];
$style_3 = $_POST['style_3'];
$etc_3 = $_POST['etc_3'];
$idno_3= $_POST['idno_3'];
$bir_3 = $_POST['bir_3'];
$tel_3 = $_POST['tel_3'];
$pro_3 = $_POST['pro_3'];

$name_4 = $_POST['name_4'];
$sex_4 = $_POST['sex_4'];
$style_4 = $_POST['style_4'];
$etc_4 = $_POST['etc_4'];
$idno_4= $_POST['idno_4'];
$bir_4 = $_POST['bir_4'];
$tel_4 = $_POST['tel_4'];
$pro_4 = $_POST['pro_4'];

$name_5 = $_POST['name_5'];
$sex_5 = $_POST['sex_5'];
$style_5 = $_POST['style_5'];
$etc_5 = $_POST['etc_5'];
$idno_5= $_POST['idno_5'];
$bir_5 = $_POST['bir_5'];
$tel_5 = $_POST['tel_5'];
$pro_5 = $_POST['pro_5'];

$name_6 = $_POST['name_6'];
$sex_6 = $_POST['sex_6'];
$style_6 = $_POST['style_6'];
$etc_6 = $_POST['etc_6'];
$idno_6= $_POST['idno_6'];
$bir_6 = $_POST['bir_6'];
$tel_6 = $_POST['tel_6'];
$pro_6 = $_POST['pro_6'];

echo '<div class="box" style="width:40%;text-align:left;margin:0px auto;"><h1 style="font-size:20px;text-align:center;font-weight:bold;">報名資料確認欄</h1><br/><br/>';
echo '<p>參加類型：'.$join_type.'</p>';
echo '<p>參加時間：'.$join_date.'</p>';
echo '<p>同行報名人數：'.$peoples.'</p>';
echo '<h1 style="font-size:15px;text-align:center;font-weight:bold;color:#ff8720;">主要聯絡人</h1>';
echo '<p>姓名：'.$name_1.'<br/>';
echo '性別：'.$sex_1.'<br/>';
echo '身分：'.$style_1.'<br/>';
if($etc_1 != null){
	echo 'ETC：'.$etc_1.'屆<br/>';
}
echo '身分證字號：'.$idno_1.'<br/>';
echo '生日：'.$bir_1.'<br/>';
echo '手機：'.$tel_1.'<br/>';
echo '保險受益人：'.$pro_1.'<br/>';
echo '電子信箱：'.$email_1.' (註:此電子信箱將會寄送相關通知)</p>';
if($name_2 != null)
{
echo '<h1 style="font-size:15px;text-align:center;font-weight:bold;color:#ff8720;">第二位</h1>';
echo '<p>姓名：'.$name_2.'<br/>';
echo '性別：'.$sex_2.'<br/>';
echo '身分：'.$style_2.'<br/>';
if($etc_2 != null){
	echo 'ETC：'.$etc_2.'屆<br/>';
}
echo '身分證字號：'.$idno_2.'<br/>';
echo '生日：'.$bir_2.'<br/>';
echo '手機：'.$tel_2.'<br/>';
echo '保險受益人：'.$pro_2.'</p>';
}

if($name_3 != null)
{
echo '<h1 style="font-size:15px;text-align:center;font-weight:bold;color:#ff8720;">第三位</h1>';
echo '<p>姓名：'.$name_3.'<br/>';
echo '性別：'.$sex_3.'<br/>';
echo '身分：'.$style_3.'<br/>';
if($etc_3 != null){
	echo 'ETC：'.$etc_3.'屆<br/>';
}
echo '身分證字號：'.$idno_3.'<br/>';
echo '生日：'.$bir_3.'<br/>';
echo '手機：'.$tel_3.'<br/>';
echo '保險受益人：'.$pro_3.'</p>';
}

if($name_4 != null)
{
echo '<h1 style="font-size:15px;text-align:center;font-weight:bold;color:#ff8720;">第四位</h1>';
echo '<p>姓名：'.$name_4.'<br/>';
echo '性別：'.$sex_4.'<br/>';
echo '身分：'.$style_4.'<br/>';
if($etc_4 != null){
	echo 'ETC：'.$etc_4.'屆<br/>';
}
echo '身分證字號：'.$idno_4.'<br/>';
echo '生日：'.$bir_4.'<br/>';
echo '手機：'.$tel_4.'<br/>';
echo '保險受益人：'.$pro_4.'</p>';
}

if($name_5 != null)
{
echo '<h1 style="font-size:15px;text-align:center;font-weight:bold;color:#ff8720;">第五位</h1>';
echo '<p>姓名：'.$name_5.'<br/>';
echo '性別：'.$sex_5.'<br/>';
echo '身分：'.$style_5.'<br/>';
if($etc_5 != null){
	echo 'ETC：'.$etc_5.'屆<br/>';
}
echo '身分證字號：'.$idno_5.'<br/>';
echo '生日：'.$bir_5.'<br/>';
echo '手機：'.$tel_5.'<br/>';
echo '保險受益人：'.$pro_5.'</p>';
}

if($name_6 != null)
{
echo '<h1 style="font-size:15px;text-align:center;font-weight:bold;color:#ff8720;">第六位</h1>';
echo '<p>姓名：'.$name_6.'<br/>';
echo '性別：'.$sex_6.'<br/>';
echo '身分：'.$style_6.'<br/>';
if($etc_6 != null){
	echo 'ETC：'.$etc_6.'屆<br/>';
}
echo '身分證字號：'.$idno_6.'<br/>';
echo '生日：'.$bir_6.'<br/>';
echo '手機：'.$tel_6.'<br/>';
echo '保險受益人：'.$pro_6.'</p>';
}
if($mjoin != null)
{
	echo '<p>報名模組活動:<br/>';
	for($i=0;$i<Count($mjoin);$i++) { 
      echo $mjoin[$i].'<br/>'; 
    }
    echo '</p>'; 
}
else{echo '<p>模組活動：沒有人報名模組活動</p>';}

echo '<p>備註：'.$remark.'<br/></p>';

if($join_type=="露營 -普通營位"){
	if($join_date=="8/1-8/3 三天全參加"){
		
		$people_fee=count($mjoin) * 500;
		$fee=$people_fee+2400;
	}
	if($join_date=="8/2-8/3 兩天"){
		
		$people_fee=count($mjoin) * 500;
		$fee=$people_fee+1200;
	}
	if($join_date=="只參加一天 8/2"){
		
		$people_fee=count($mjoin) * 500;
		$fee=$people_fee+1200;
	}
	if($join_date=="只參加一天 8/3"){
		
		$people_fee=count($mjoin) * 500;
		$fee=$people_fee+1200;
	}
}
if($join_type=="露營 -空中營位"){
	if($join_date=="8/1-8/3 三天全參加"){
		
		$people_fee=count($mjoin) * 500;
		$fee=$people_fee+3600;
	}
	if($join_date=="8/2-8/3 兩天"){
		
		$people_fee=count($mjoin) * 500;
		$fee=$people_fee+1800;
	}
	if($join_date=="只參加一天 8/2"){
		
		$people_fee=count($mjoin) * 500;
		$fee=$people_fee+1800;
	}
	if($join_date=="只參加一天 8/3"){
		
		$people_fee=count($mjoin) * 500;
		$fee=$people_fee+1800;
	}
}
if($join_type=="自行安排住宿"){
	if($join_date=="8/1-8/3 三天全參加"){
		$m_fee=count($mjoin) * 500;
		$people_fee=$peoples *300;
		$fee=$m_fee+$people_fee;
	}
	if($join_date=="8/2-8/3 兩天"){
		$m_fee=count($mjoin) * 500;
		$people_fee=$peoples *200;
		$fee=$m_fee+$people_fee;
	}
	if($join_date=="只參加一天 8/2"){
		$m_fee=count($mjoin) * 500;
		$people_fee=$peoples *100;
		$fee=$m_fee+$people_fee;
	}
	if($join_date=="只參加一天 8/3"){
		$m_fee=count($mjoin) * 500;
		$people_fee=$peoples *100;
		$fee=$m_fee+$people_fee;
	}
}
if($join_type=="不過夜"){
	if($join_date=="8/1-8/3 三天全參加"){
		$m_fee=count($mjoin) * 500;
		$people_fee=$peoples *300;
		$fee=$m_fee+$people_fee;
	}
	if($join_date=="8/2-8/3 兩天"){
		$m_fee=count($mjoin) * 500;
		$people_fee=$peoples *200;
		$fee=$m_fee+$people_fee;
	}
	if($join_date=="只參加一天 8/2"){
		$m_fee=count($mjoin) * 500;
		$people_fee=$peoples *100;
		$fee=$m_fee+$people_fee;
	}
	if($join_date=="只參加一天 8/3"){
		$m_fee=count($mjoin) * 500;
		$people_fee=$peoples *100;
		$fee=$m_fee+$people_fee;
	}
}

echo '<p>總計費用：'.$fee.'元整<br/></p>';
echo '</dvi>';

				function rewrite()
				{
   					 echo "window.history.back();";
				}

?>

<form method="post" action="send.php" >
<input type="hidden" name="join_time" value="<?php echo $join_time ?>">
<input type="hidden" name="join_type" value="<?php echo $join_type ?>">
<input type="hidden" name="join_date" value="<?php echo $join_date ?>">
<input type="hidden" name="peoples" value="<?php echo $peoples ?>">
<input type="hidden" name="name_1" value="<?php echo $name_1 ?>">
<input type="hidden" name="sex_1" value="<?php echo $sex_1 ?>">
<input type="hidden" name="style_1" value="<?php echo $style_1 ?>">
<input type="hidden" name="etc_1" value="<?php echo $etc_1 ?>">
<input type="hidden" name="idno_1" value="<?php echo $idno_1 ?>">
<input type="hidden" name="bir_1" value="<?php echo $bir_1 ?>">
<input type="hidden" name="tel_1" value="<?php echo $tel_1 ?>">
<input type="hidden" name="pro_1" value="<?php echo $pro_1 ?>">
<input type="hidden" name="email" value="<?php echo $email ?>">
<input type="hidden" name="name_2" value="<?php echo $name_2 ?>">
<input type="hidden" name="sex_2" value="<?php echo $sex_2 ?>">
<input type="hidden" name="style_2" value="<?php echo $style_2 ?>">
<input type="hidden" name="etc_2" value="<?php echo $etc_2 ?>">
<input type="hidden" name="idno_2" value="<?php echo $idno_2 ?>">
<input type="hidden" name="bir_2" value="<?php echo $bir_2 ?>">
<input type="hidden" name="tel_2" value="<?php echo $tel_2 ?>">
<input type="hidden" name="pro_2" value="<?php echo $pro_2 ?>">
<input type="hidden" name="name_3" value="<?php echo $name_3 ?>">
<input type="hidden" name="sex_3" value="<?php echo $sex_3 ?>">
<input type="hidden" name="style_3" value="<?php echo $style_3 ?>">
<input type="hidden" name="etc_3" value="<?php echo $etc_3 ?>">
<input type="hidden" name="idno_3" value="<?php echo $idno_3 ?>">
<input type="hidden" name="bir_3" value="<?php echo $bir_3 ?>">
<input type="hidden" name="tel_3" value="<?php echo $tel_3 ?>">
<input type="hidden" name="pro_3" value="<?php echo $pro_3 ?>">
<input type="hidden" name="name_4" value="<?php echo $name_4 ?>">
<input type="hidden" name="sex_4" value="<?php echo $sex_4 ?>">
<input type="hidden" name="style_4" value="<?php echo $style_4 ?>">
<input type="hidden" name="etc_4" value="<?php echo $etc_4 ?>">
<input type="hidden" name="idno_4" value="<?php echo $idno_4 ?>">
<input type="hidden" name="bir_4" value="<?php echo $bir_4 ?>">
<input type="hidden" name="tel_4" value="<?php echo $tel_4 ?>">
<input type="hidden" name="pro_4" value="<?php echo $pro_4 ?>">
<input type="hidden" name="name_5" value="<?php echo $name_5 ?>">
<input type="hidden" name="sex_5" value="<?php echo $sex_5 ?>">
<input type="hidden" name="style_5" value="<?php echo $style_5 ?>">
<input type="hidden" name="etc_5" value="<?php echo $etc_5 ?>">
<input type="hidden" name="idno_5" value="<?php echo $idno_5 ?>">
<input type="hidden" name="bir_5" value="<?php echo $bir_5 ?>">
<input type="hidden" name="tel_5" value="<?php echo $tel_5 ?>">
<input type="hidden" name="pro_5" value="<?php echo $pro_5 ?>">
<input type="hidden" name="name_6" value="<?php echo $name_6 ?>">
<input type="hidden" name="sex_6" value="<?php echo $sex_6 ?>">
<input type="hidden" name="style_6" value="<?php echo $style_6 ?>">
<input type="hidden" name="etc_6" value="<?php echo $etc_6 ?>">
<input type="hidden" name="idno_6" value="<?php echo $idno_6 ?>">
<input type="hidden" name="bir_6" value="<?php echo $bir_6 ?>">
<input type="hidden" name="tel_6" value="<?php echo $tel_6 ?>">
<input type="hidden" name="pro_6" value="<?php echo $pro_6 ?>">
<input type="hidden" name="mjoin" value="<?php for($i=0;$i<Count($mjoin);$i++) {echo $mjoin[$i];} ?>">
<input type="hidden" name="fee" value="<?php echo $fee ?>">
<input type="hidden" name="remark " value="<?php echo $remark  ?>">



			</div>
		</section>
		
		<section class="expense-section">
			<div class="container">
				<p>
				請確認以上報名資料是否正確
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