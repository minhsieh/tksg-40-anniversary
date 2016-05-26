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
		    <h2 style="font-size:35px;">40週年團慶大露營報名系統</h2>
		    <p>感謝您完成本次團慶大露營的報名，請於一周內匯款至團內郵局帳號，資料如下：</p>
		   
			<p>本團郵局帳號資料</p>
			<p>帳戶名：淡江大學童軍團</p>
			<p>帳號：700--2441285-0356709</p>
			 <p>匯款完成後請與財務組聯繫確認：tksgfinance@gmail.com</p>

			
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
echo '身分證字號：'.$idno_6.'<br/>';
echo '生日：'.$bir_6.'<br/>';
echo '手機：'.$tel_6.'<br/>';
echo '保險受益人：'.$pro_6.'</p>';
}

if($mjoin != null)
{
	echo '<p>報名模組活動:<br/>'.$mjoin;
    echo '</p>'; 
}
else{echo '<p>模組活動：沒有人報名模組活動</p>';}

echo '<p>備註：'.$remark.'<br/></p>';
echo '<p>總計費用：'.$fee.'<br/></p>';
echo '</dvi>';
					$join_time = date("Y-m-d H:i:s");
					$dbc = mysqli_connect('localhost','mintw_for40','for40','mintw_40')or die('無法連結到MySQL資料庫，請聯繫大麵。');

					$query = " INSERT INTO 40_jomb_join(join_time ,join_type ,join_date ,peoples ,name_1 , sex_1 ,idno_1 ,bir_1 ,tel_1 , pro_1 ,email ,name_2 ,sex_2 ,
					 idno_2 ,bir_2 ,tel_2 ,pro_2 ,name_3 ,sex_3 ,idno_3 ,bir_3 ,tel_3 , pro_3 ,name_4 ,sex_4 , idno_4 ,bir_4 ,tel_4 ,pro_4 , name_5 ,sex_5 ,idno_5 ,
					 bir_5 ,tel_5 ,pro_5 ,name_6 ,sex_6 ,idno_6 ,bir_6 ,tel_6 ,pro_6 ,mjoin,fee ,remark ,style_1,etc_1,style_2,etc_2,style_3,etc_3,style_4,etc_4,
					 style_5,etc_5,style_6,etc_6)
					VALUES ('$join_time','$join_type','$join_date','$peoples','$name_1','$sex_1','$idno_1','$bir_1','$tel_1','$pro_1','$email_1','$name_2','$sex_2',
					'$idno_2','$bir_2','$tel_2','$pro_2','$name_3','$sex_3','$idno_3','$bir_3','$tel_3','$pro_3','$name_4','$sex_4','$idno_4','$bir_4','$tel_4','$pro_4','$name_5','$sex_5','$idno_5',
					'$bir_5','$tel_5','$pro_5','$name_6','$sex_6','$idno_6','$bir_6','$tel_6','$pro_6','$mjoin','$fee','$remark','$style_1','$etc_1','$style_2','$etc_2'
					,'$style_3','$etc_3','$style_4','$etc_4','$style_5','$etc_5','$style_6','$etc_6')";
					
 					$result=mysqli_query($dbc,$query)or die('無法寫入資料庫。');
 					mysqli_close($dbc);
				?>

</div>
<p><ul class="actions">
				<li><a href="index.html" class="button" >回到首頁</a></li>
				<li><a class="button"  onClick="javascript:print();" style="margin-top:5px;">列印此頁</a></li>
				</ul></p>
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