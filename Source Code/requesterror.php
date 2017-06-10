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
<body background="http://play.oneforall.tw/bg.jpg">


<div class="row">
	<div class="col-md-4">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" id="layout-header">
	<header class="mdl-layout__header">
	<div class="mdl-layout__header-row"><span class="mdl-layout-title">

	<img src="http://play.oneforall.tw/logo2.png" class="round-logo" alt="logo"><img src="http://play.oneforall.tw/logo10.png" height="20" width="160" alt="logo">
	</span><div class="mdl-layout-spacer" align="center"></div><nav class="mdl-navigation mdl-layout--large-screen-only">
	<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/river/"><font color="#000000">台 灣 河 川 水 質 監 測</font></a>--> 
<!--	<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/pm2.5/"><font color="#000000">台 灣 即 時 PM2.5</font></a> -->
	<!-- <a class="mdl-navigation__link" href="https://play.oneforall.tw/requesterror.php"><font color="#000000" size="3"><strong>即 時 回 報 系 統</strong></font></a> -->
	<a class="mdl-navigation__link" href="https://www.facebook.com/groups/315414952225849/?fref=ts"><font color="#000000" size="3"><strong>關 於 我 們</strong></font></a>
	</nav><div>
	</div></div>
	</div>
</div>
</div>
</header>
	<?php
	$place=$_POST['place1'];
	echo '<br><br><br><br><br><br><br>';
	
	echo "<div class=\"row\">";
	echo "<div class=\"col-md-4 text-left\"></div>";
		echo "<div class=\"col-md-4 text-left\">";
		if($place!=null){
			echo "<h3>測站 $place 回報</h3>";}
			echo "<form name=\"form\" action=\"./requesterror_finish.php\" method=\"POST\">";
			  echo "<div class=\"form-group\">";
				echo "<label for=\"exampleInputPassword1\">姓名：</label>";
				echo "<input type=\"text\" class=\"form-control\" placeholder=\"你的名字\" name=\"name\">";
			  echo "</div>";
			  echo "<div class=\"form-group\">";
				echo "<label for=\"exampleInputPassword1\">電子信箱：</label>";
				echo "<input type=\"email\" class=\"form-control\" placeholder=\"請輸入電子信箱\" name=\"email\" aria-describedby=\"helpBlock\">";
				echo "<span id=\"helpBlock\" class=\"help-block\">請謹慎填寫!此欄位將作為寄發填單內容備份信之用途!</span>";
			  echo "</div>";
			  
			  echo "<div class=\"form-group\">";
				echo "<label for=\"exampleInputPassword1\">電話 : </label>";
				echo "<input type=\"text\" class=\"form-control\" placeholder=\"連絡電話\" name=\"telephone\">";
			  echo "</div>";
			  echo "<div class=\"form-group\">";
				  echo "<label for=\"exampleInputPassword1\">災害類型 : </label>";
				  echo '<select class="form-control" name="kind"><option value=\'自然災害\'>自然災害</option><option value=\'人為災害\'>人為災害</option></select>';
			  echo "</div>";
			  echo "<div class=\"form-group\">";
				echo "<label for=\"exampleInputPassword1\">測站名稱 : (非必填)</label>";
				echo "<input type=\"text\" class=\"form-control\" placeholder=\"測站名稱\" value=\"$place\" name=\"station\">";
			  echo "</div>";
			  echo "<div class=\"form-group\">";
				  echo "<label for=\"exampleInputPassword1\">事發地點 嘉義(哪一個鄉鎮?) : </label>";
				  echo '<select multiple class="form-control" name="country"><option value=\'朴子市\'>朴子市</option><option value=\'布袋鎮\'>布袋鎮</option><option value=\'大林鎮\'>大林鎮</option><option value=\'民雄鄉\'>民雄鄉</option><option value=\'溪口鄉\'>溪口鄉</option><option value=\'新港鄉\'>新港鄉</option><option value=\'六腳鄉\'>六腳鄉</option><option value=\'東石鄉\'>東石鄉</option><option value=\'義竹鄉\'>義竹鄉</option><option value=\'鹿草鄉\'>鹿草鄉</option><option value=\'太保市\'>太保市</option><option value=\'水上鄉\'>水上鄉</option><option value=\'中埔鄉\'>中埔鄉</option><option value=\'竹崎鄉\'>竹崎鄉</option><option value=\'梅山鄉\'>梅山鄉</option><option value=\'番路鄉\'>番路鄉</option><option value=\'大埔鄉\'>大埔鄉</option><option value=\'阿里山鄉\'>阿里山鄉</option></select>';
			  echo "</div>";
			  echo "<div class=\"form-group\">";
				echo "<label for=\"exampleInputPassword1\">事發地點 街名 : </label>";
				echo "<input type=\"text\" class=\"form-control\" placeholder=\"事發地點(請詳述地址、街道路名)\" name=\"place\">";
			  echo "</div>";
			  echo "<div class=\"form-group\">";
				echo "<label for=\"exampleInputPassword1\">狀況說明 : </label>";
				echo "<textarea class=\"form-control\" name=\"content\" rows=\"5\"></textarea>";
			  echo "</div>";
			  
			  
			  
			  
			  echo "<button type=\"submit\" class=\"btn btn-default\">送出回報</button>";
			echo "</form>";
		echo "</div>";
		echo "<div class=\"col-md-4 text-left\"> </div>";
		echo "</div>";
		echo '<br><br><br><br>';
	?>


</body>
</html>