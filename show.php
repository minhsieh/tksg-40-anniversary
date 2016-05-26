<?php
$username='tksgjomb';
$password='08010803';
if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || ($_SERVER['PHP_AUTH_USER'] != $username) || ($_SERVER['PHP_AUTH_PW']!= $password)){
	header('HTTP/1.1 401 Unauthorized');
	header('WWW-Authenticate:Basic realm="tksgjomb"');
	exit('<h1>抱歉不允許存取</h1>');
}
?>

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

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">

			
			</head>

<body>

<?php 

$dbc = mysqli_connect('localhost','mintw_for40','for40','mintw_40')or die('無法連結到MySQL資料庫，請聯繫大麵。');

$query = "SELECT * FROM 40_jomb_join";

$data=mysqli_query($dbc,$query);
$id=1;

while ($row= mysqli_fetch_array($data))
{
echo '<h1 style="font-size:20px;font-weight:bold;">ID:'.$id.'</h1><br/>';

echo '<table class="table table-bordered"><tr><td>參加類型：</td><td>'.$row['join_type'].'</td></tr>';
echo 		'<tr><td>參加時間：</td><td>'.$row['join_date'].'</td></tr>';
echo 		'<tr><td>同行報名人數：</td><td>'.$row['peoples'].'</td></tr>';
echo 		'<tr><td>費用：</td><td>'.$row['fee'].'</td></tr>';
if($row['mjoin'] != null)
{
	echo '<tr><td>報名模組活動:</td><td>'.$row['mjoin'].'</td></tr>';
}
else{echo '<tr><td>報名模組活動:</td><td>無人報名參加</td></tr>';}


echo 		'<tr><td>姓名</td><td>性別</td><td>身分證字號</td><td>身分</td><td>ETC</td><td>生日</td><td>手機</td><td>保險受益人</td><td>電子信箱</td></tr>';
echo 		'<tr><td>'.$row['name_1'].'</td><td>'.$row['sex_1'].'</td><td>'.$row['idno_1'].'</td><td>'.$row['style_1'].'</td><td>'.$row['etc_1'].'</td><td>'.$row['bir_1'].'</td><td>'.$row['tel_1'].'</td><td>'.$row['pro_1'].'</td><td>'.$row['email_1'].'</td></tr>';

if($row['name_2'] != null)
{
echo 		'<tr><td>'.$row['name_2'].'</td><td>'.$row['sex_2'].'</td><td>'.$row['idno_2'].'</td><td>'.$row['style_2'].'</td><td>'.$row['etc_2'].'</td><td>'.$row['bir_2'].'</td><td>'.$row['tel_2'].'</td><td>'.$row['pro_2'].'</td></tr>';
}
if($row['name_3'] != null)
{
echo 		'<tr><td>'.$row['name_3'].'</td><td>'.$row['sex_3'].'</td><td>'.$row['idno_3'].'</td><td>'.$row['style_3'].'</td><td>'.$row['etc_3'].'</td><td>'.$row['bir_3'].'</td><td>'.$row['tel_3'].'</td><td>'.$row['pro_3'].'</td></tr>';
}
if($row['name_4'] != null)
{
echo 		'<tr><td>'.$row['name_4'].'</td><td>'.$row['sex_4'].'</td><td>'.$row['idno_4'].'</td><td>'.$row['style_4'].'</td><td>'.$row['etc_4'].'</td><td>'.$row['bir_4'].'</td><td>'.$row['tel_4'].'</td><td>'.$row['pro_4'].'</td></tr>';
}
if($row['name_5'] != null)
{
echo 		'<tr><td>'.$row['name_5'].'</td><td>'.$row['sex_5'].'</td><td>'.$row['idno_5'].'</td><td>'.$row['style_5'].'</td><td>'.$row['etc_5'].'</td><td>'.$row['bir_5'].'</td><td>'.$row['tel_5'].'</td><td>'.$row['pro_5'].'</td></tr>';
}
if($row['name_6'] != null)
{
echo 		'<tr><td>'.$row['name_6'].'</td><td>'.$row['sex_6'].'</td><td>'.$row['idno_6'].'</td><td>'.$row['style_6'].'</td><td>'.$row['etc_6'].'</td><td>'.$row['bir_6'].'</td><td>'.$row['tel_6'].'</td><td>'.$row['pro_6'].'</td></tr>';
}
echo '</table>';
$id++;

}
mysqli_close($dbc);

?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/holder.js"></script>
</body>
</html>