<?php
session_start();

?>
<html>
	<head>
		<title>Dreamer Plan</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-normal.css" />
		</noscript>
		<script src="js/kkcountdown.min.js" type="text/javascript"></script>
			<script type="text/javascript">
            $(document).ready(function(){

                $(".kkcountdown-1").kkcountdown({
                	dayText		: '天 ',
                	daysText 	: '天 ',
                    hoursText	: '时 ',
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
		<link rel="shortcut icon" href="images/favicon.ico" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<h1 id="logo">Dreamer Plan</h1>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php#intro">介绍</a></li>
							<li><a href="index.php#features">特色</a></li>
							<li><a href="index.php#work">故事</a></li>
							<li><a href="index.php#count">倒数计时</a></li>
							<li><a href="index.php#contact">加入/联系我们</a></li>
						</ul>
					</nav>

			</header>


<?php


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$time = date("Y-m-d H:i:s");



if(isset($_POST['originator'])) {
if($_POST['originator'] == $_SESSION['code']){

$dbc = mysqli_connect('localhost','mintw_for40','for40','mintw_china')or die('Error.');
$query = " INSERT INTO test(time,name,email,message)
VALUES ('$time','$name','$email','$message')";
$result=mysqli_query($dbc,$query)or die('Error.');
 mysqli_close($dbc);
?>
<!-- Send -->
			<section id="send" class="main style1 dark fullscreen">
				<div class="content container 75%">
					<header>
						<h2>Thank You. Dreamer.</h2>
					</header>
					<p>我们会在最快的时间联系您，并且提早发信资料。</p>
					<p>如果有任何疑问，请再次使用「联系我们」，会替您解惑。</p>
					<p></p>
					<p></p>
					<p></p>
        			<p>距离Dreamer Plan开放，还有：</p>
        			<section>
                       				<p><span style="font-size:50px;font-weight:bold;"><span data-time="1421683200" class="kkcountdown-1"></span></span></p>
        			</section>
					<footer>
						<a href="index.php" class="button style2 down">More</a>
					</footer>
				</div>
			</section>
<?php
include("phpmailer/class.phpmailer.php"); //匯入PHPMailer類別 

$mail= new PHPMailer(); //建立新物件 
$mail->IsSMTP(); //設定使用SMTP方式寄信 
$mail->SMTPAuth = true; //設定SMTP需要驗證 

$mail->CharSet = "utf-8"; //設定郵件編碼 

$mail->Username = "dreamer.plan@gmail.com"; //設定驗證帳號 
$mail->Password = "jo4gk6ak7"; //設定驗證密碼 

$mail->From = "dreamer.plan@gmail.com"; //設定寄件者信箱 
$mail->FromName = "「Scout PaPa去哪了」線上預約系統"; //設定寄件者姓名 

$mail->Subject = "感謝您預約參觀 「Scout PaPa去哪了」童軍展"; //設定郵件標題 
$mail->Body = "
fsdfsdfsdf
"; //設定郵件內容 
$mail->IsHTML(true); //設定郵件內容為HTML 
$mail->AddAddress( $email , $name);//設定收件者郵件及名稱 



}else{
?>
<!-- Send -->
			<section id="send" class="main style1 dark fullscreen">
				<div class="content container 75%">
					<header>
						<h2>Oops. Sorry</h2>
					</header>
					<p>抱歉，本表單已重複提交，如要聯繫我們，請到</p>
					<ul class="actions">
						<li><input type ="button"  onclick="javascript:location.href='index.php#contact'" value="聯繫我們"></li>
					</ul>
					
				</div>
			</section>

<?php
    }
   }
?>			
		
			
		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; DreamerPlan</li>
					</ul>
			
			</footer>

	</body>
</html>