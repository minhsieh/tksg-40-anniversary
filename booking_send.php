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
		    <h2 style="font-size:35px;">「Scout PaPa去哪了」童軍展 團體線上預約</h2>
		    <h2 style="font-size:20px; font-weight:bold;color:red;">成功預約!</h2>
		    <p>1. 預約後三日內，將有專人與您聯繫</p>
			<p>2. 為維護參觀品質，為15人以上之團體敬請踴躍預約</p>
			<p>3. 為不同參觀團體之需求，請填寫「欲從展覽中獲得」，以便安排適合的導覽伙伴</p>
			<p>如有任何疑問，請洽詢展覽組組長 -陳紀錚</p>
			<p>0919-217-611 / scout40ticket@gmail.com</p>

			
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


					$join_time = date("Y-m-d H:i:s");
					$dbc = mysqli_connect('localhost','mintw_for40','for40','mintw_40')or die('無法連結到MySQL資料庫，請聯繫大麵。');

					$query = " INSERT INTO booking(join_time,name,date,start_time,end_time,peoples,contact_name,contact_phone,contact_tel,contact_email,imformation,remark)

					VALUES ('$join_time','$name','$date','$start_time','$end_time','$peoples','$contact_name','$contact_phone','$contact_tel','$contact_email','$imformation','$remark')";
					
 					$result=mysqli_query($dbc,$query)or die('無法寫入資料庫。');
 					mysqli_close($dbc);
				?>
<?php
include("phpmailer/class.phpmailer.php"); //匯入PHPMailer類別 

$mail= new PHPMailer(); //建立新物件 
$mail->IsSMTP(); //設定使用SMTP方式寄信 
$mail->SMTPAuth = true; //設定SMTP需要驗證 
$mail->Host = "mail.min0.tw"; //設定SMTP主機 
$mail->Port = 25; //設定SMTP埠位，預設為25埠。 
$mail->CharSet = "utf-8"; //設定郵件編碼 

$mail->Username = "40booking@min0.tw"; //設定驗證帳號 
$mail->Password = "40booking"; //設定驗證密碼 

$mail->From = "40booking@min0.tw"; //設定寄件者信箱 
$mail->FromName = "「Scout PaPa去哪了」線上預約系統"; //設定寄件者姓名 

$mail->Subject = "感謝您預約參觀 「Scout PaPa去哪了」童軍展"; //設定郵件標題 
$mail->Body = "

<p style=\"font-size:14px;font-weight:bold;\">您好， ".$name." 的 ".$contact_name."：</p><br>
<br>
<br>
<p>感謝您預約參觀淡江大學童軍團40週年團慶 「Scout PaPa去哪了」童軍展，以下為您的預約資料：</p>
<br>
<p>預約送出時間：".$join_time."</p>
<p>團體名稱：".$name."</p>
<p>參觀日期：".$date."</p>
<p>開始參觀時間：".$start_time."</p>
<p>結束參觀時間：".$end_time."</p>
<p>參觀人數：".$peoples."</p>
<p>聯絡人姓名：".$contact_name."</p>
<p>聯絡人電話：".$contact_phone."</p>
<p>行動電話：".$contact_tel."</p>
<p>電子信箱：".$contact_email."</p>
<p>從何得知本展覽：".$imformation."</p>
<p>欲從展覽中獲得(其他意見)：".$remark."</p>
<br>
<br>
<p>以上為系統自動發送，請勿直接回覆信件。</p>
<p>如對本次預約有任何疑問或指教，請聯繫展覽組組長 -陳紀錚 / 0919-217-611 / scout40ticket@gmail.com</p>
<br>
<p>「Scout PaPa去哪了」童軍展 感謝您</p>
"; //設定郵件內容 
$mail->IsHTML(true); //設定郵件內容為HTML 
$mail->AddAddress( $contact_email , $contact_name);//設定收件者郵件及名稱 

if(!$mail->Send()) { 

} else { 

} 
$mail2= new PHPMailer(); //建立新物件 
$mail2->IsSMTP(); //設定使用SMTP方式寄信 
$mail2->SMTPAuth = true; //設定SMTP需要驗證 
$mail2->Host = "mail.min0.tw"; //設定SMTP主機 
$mail2->Port = 25; //設定SMTP埠位，預設為25埠。 
$mail2->CharSet = "utf-8"; //設定郵件編碼 

$mail2->Username = "40booking@min0.tw"; //設定驗證帳號 
$mail2->Password = "40booking"; //設定驗證密碼 

$mail2->From = "40booking@min0.tw"; //設定寄件者信箱 
$mail2->FromName = "「Scout PaPa去哪了」線上預約系統"; //設定寄件者姓名 

$mail2->Subject = "「Scout PaPa去哪了」童軍展 ，有來自 ".$name." 的預約!"; //設定郵件標題 
$mail2->Body = "

您好，剛才有來自 ".$name." 的預約，預約資料如下：<br>
<br>
<br>
<p>送出時間：".$join_time."</p>
<p>團體名稱：".$name."</p>
<p>參觀日期：".$date."</p>
<p>開始參觀時間：".$start_time."</p>
<p>結束參觀時間：".$end_time."</p>
<p>參觀人數：".$peoples."</p>
<p>聯絡人姓名：".$contact_name."</p>
<p>聯絡人電話：".$contact_phone."</p>
<p>行動電話：".$contact_tel."</p>
<p>電子信箱：".$contact_email."</p>
<p>從何得知本展覽：".$imformation."</p>
<p>欲從展覽中獲得(其他意見)：".$remark."</p>
<br>
<br>
<p>以上為系統自動發送，請勿直接回覆信件。</p>
<br>
<p>「Scout PaPa去哪了」童軍展 感謝您</p>
"


; //設定郵件內容 
$mail2->IsHTML(true); //設定郵件內容為HTML 
$mail2->AddAddress("side112358@gmail.com", "謝旻諺");//設定收件者郵件及名稱 

if(!$mail2->Send()) { 

} else { 

} 

?>			






</div>
<p><ul class="actions">
				<li><a href="index.php" class="button" >回到首頁</a></li>
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