<!DOCTYPE html>
<html>
<head>
<!--<meta -->
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<title> 民 眾 即 時 舉 報 系 統 </title>
<script src="./Chart.js"></script>
<script src="./Chart.min.js"></script>
<script src="./Chart.bundle.js"></script>
<script src="./Chart.bundle.min.js"></script>
<script src="./jquery-3.2.1.min.js"></script>
<script src="./utils.js"></script>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="./pie.js"></script>
<SCRIPT SRC="ssm.js" language="JavaScript1.2">
</SCRIPT>
<script>
function show(){ 
document.getElementById("block").style.visibility="visible"; 
document.getElementById("fm").style.visibility="visible"; 
} 
function back(){ 
document.getElementById("block").style.visibility="hidden"; 
document.getElementById("fm").style.visibility="hidden"; 
} 
</script> 
<style type="text/css"> 
#block{ 
position: absolute; 
top:0; 
left:0; 
height:100%; 
width:100%; 
background-color:gray; 
z-index:998; 
visibility: hidden; 
} 
#fm{ 
position: absolute; 
top:30%; 
left:40%; 
width:20%; 
height:20%; 
background-color:white; 
z-index:999; 
visibility: hidden; 
} 
#bu1{ 
margin-top:20%; 
margin-left:40%; 
} 
body{ 
margin:0px; 
} 
</style>
<script type="text/javascript">  
    var winheight,winsize,x,win2;  
    function go1()  
    {  
        winheight = 20;  
        winsize = 2;  
        x = 10;  
        win2 = window.open("requesterror.php","","scrollbars='yes'");  
        win2.moveTo(0.0);  
        win2.resizeTo(20,20);  
        go2();  
    }  
    function go2()  
    {  
        if (winheight>=screen.avaiHeight-3)   
        {  
            x=0;  
        }  
        win2.resizeBy(5,x);  
        winheight+=x;  
        winsize+=5;  
        if(winsize>=screen.width-5)  
        {  
            return;  
        }  
        setTimeout("go2()",20);  
    }  
    </script>   
<SCRIPT SRC="ssmItems.js" language="JavaScript1.2"></SCRIPT>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
<link href="./default.css" rel="stylesheet">
<link rel="icon" type="image/png" href="http://play.oneforall.tw/logo1.jpg"><link rel="shortcut icon" href="http://play.oneforall.tw/logo1.jpg" type="image/x-icon"><link rel="stylesheet" src="./style.min.css"><link rel="stylesheet" href="//storage.googleapis.com/code.getmdl.io/1.0.6/material.amber-orange.min.css"><link rel="stylesheet" href="//s3-ap-northeast-1.amazonaws.com/static.twstat.com/bower_components/semantic/dist/semantic.min.css"><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"><link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons"><script src="//storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js" async=""></script><link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css">
<link rel="stylesheet" href="./style.min.css" />
<style>
/* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
</style>
</head>
<body>


<div class="row">
	<div class="col-md-4">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" id="layout-header">
	<header class="mdl-layout__header">
	<div class="mdl-layout__header-row"><span class="mdl-layout-title">

	<img src="http://play.oneforall.tw/logo1.jpg" class="round-logo" alt="logo"><font color="#000000" size="5"><strong>民 眾 即 時 舉 報 系 統</strong></font>
	</span><div class="mdl-layout-spacer" align="center"></div><nav class="mdl-navigation mdl-layout--large-screen-only">
	<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/river/"><font color="#000000" size="3">台 灣 河 川 水 質 監 測</font></a> -->
	<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/pm2.5/"><font color="#000000" size="3">台 灣 即 時 PM2.5</font></a> -->
	<!--a class="mdl-navigation__link" href="https://play.oneforall.tw/requesterror.php"><font color="#000000" size="3"><strong>即 時 回 報 系 統</strong></font></a> -->
	<a class="mdl-navigation__link" href="https://www.facebook.com/groups/315414952225849/?fref=ts"><font color="#000000" size="3"><strong>關 於 我 們</strong></font></a>
	</nav><div>
	</div></div>
	</div>
</div>
</div>
</header>
<body>
<div class="row">
  <div class="text-center">
	  <?php
//資料庫設定
	//資料庫位置
	$db_server = "localhost:3306";
	//資料庫名稱
	$db_name = "oneforal_account";
	//資料庫管理者帳號
	$db_user = "oneforal_admin";
	//資料庫管理者密碼
	$db_passwd = "gept0111007599";
	//對資料庫連線
	$link = @mysql_connect("localhost:3306","oneforal_admin","gept0111007599");
	if(!$link)
			echo("無法對資料庫連線");
	//資料庫連線採UTF8
	mysql_query("SET NAMES utf8");
	//選擇資料庫
	$selectdb = @mysql_select_db("oneforal_account",$link);
	#if($selectdb){
	 #       echo("使用資料庫");
	#}
	#else{
	#	echo("無法使用資料庫");
	#}
	  
echo '<br><br><br><br><br><br>';	  
echo "<div class=\"row\">";
echo "<div class=\"col-md-4 text-center\"></div>";
echo "<div class=\"col-md-4 text-left\">";
	echo "<h1>";
				$time = date("現在時間: Y年m月d日 H:i:s");
				$telephone = $_POST['telephone'];
				$email = $_POST['email'];
				$station = $_POST['station'];
				$name = $_POST['name'];
				$country = $_POST['country'];
				$place = $_POST['place'];
				$content = $_POST['content'];
				$kind = $_POST['kind'];
				$sql = "SELECT * FROM member_table where username = '$name'";
				$result = mysql_query($sql);
				$row = @mysql_fetch_row($result);
							$sql = "insert into requesterror_table (name, email, telephone,content, country, place, kind, station, time) values ('$name', '$email', '$telephone', '$content', '$country', '$place', '$kind', '$station', '$time')";
							if(mysql_query($sql))
							{
								
								echo '填單完成!<br>';
								
								require 'PHPMailerAutoload.php';

								$mail = new PHPMailer;

								$mail->SMTPDebug = 3;                               // Enable verbose debug output

								$mail->isMail();                                      // Set mailer to use SMTP
								$mail->Host = 'cp30.g-dns.com:2096;cp30.g-dns.com:2096';  // Specify main and backup SMTP servers
								$mail->SMTPAuth = true;                               // Enable SMTP authentication
								$mail->Username = 'oneforal@cp30.g-dns.com';                 // SMTP username
								$mail->Password = 'gept0111007599';                           // SMTP password
								$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
								$mail->Port = 587;                                    // TCP port to connect to

								$mail->setFrom('_mainaccount@oneforall.tw', 'OneForAll');
								$mail->addAddress($email, $id);     // Add a recipient
								//$mail->addAddress('u10411136@ms104.nttu.edu.tw','Mr.Lin');               // Name is optional 一次寄給多人
								$mail->addReplyTo('10411136@gm.nttu.edu.tw', 'admin'); // 回覆給?
								//$mail->addCC('cc@example.com'); //副本
								//$mail->addBCC('bcc@example.com');  //副本

								//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
								//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
								$mail->isHTML(true);                                  // Set email format to HTML

								$mail->Subject = '即 時 回 報 系 統';
								$mail->Body    = "謝謝您使用本服務! 以下是您的填單內容:<br> 您的名字:  $name<br> 電子信箱:  $email <br>連絡電話:  $telephone <br>災害類型:  $kind <br>測站名稱:  $station  <br>事發地點:嘉義縣$country $place<br>狀況說明: $content<br>舉報時間: $time<br>";
								$mail->AltBody = 'Thank you very much!';
								
								if(!$mail->send()) {
									echo 'Message could not be sent.';
									echo 'Mailer Error: ' . $mail->ErrorInfo;
								} else {
									echo "謝謝您使用本服務! 以下是您的填單內容:<br> 您的名字:  $name<br> 電子信箱:  $email <br>連絡電話:  $telephone <br>災害類型:  $kind <br>測站名稱:  $station  <br>事發地點:嘉義縣$country $place<br>狀況說明: $content<br>舉報時間: $time<br>";
									echo "<br><br>已將您的回報系統內容寄到您的電子信箱:$email<br>請前往收信並留存!謝謝!";
								}
							}
							else
							{
									echo '填表失敗!<br>';
									echo '<meta http-equiv=REFRESH CONTENT=5;url=requesterror.php>';
							}
	
		echo "</h1>";
		echo "</div>";
		echo "<div class=\"col-md-4 text-center\"></div>";
		echo "<div class=\"col-md-4 text-center\"></div>";
		?>
  </div>
	
	

</body>
</html>