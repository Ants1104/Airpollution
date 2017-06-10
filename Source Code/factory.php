<!DOCTYPE html>
<html>
<head>
<!--<meta -->
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<title> 工 廠 & 畜 牧 場 分 布 </title>
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

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" id="layout-header">
<header class="mdl-layout__header">
<div class="mdl-layout__header-row"><span class="mdl-layout-title">
<a href="http://play.oneforall.tw/factory.php">
<img src="http://play.oneforall.tw/logo2.png" class="round-logo" alt="logo"><img src="http://play.oneforall.tw/logo2_1.png" height="20" width="160" alt="logo"></a>
</span><div class="mdl-layout-spacer" align="center"></div><nav class="mdl-navigation mdl-layout--large-screen-only">
<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/river/"><font color="#000000" size="2"><strong>台 灣 河 川 水 質 監 測</strong></font></a> -->
<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/pm2.5/"><font color="#000000" size="2"><strong>台 灣 即 時 PM2.5</strong></font></a>-->
<a class="mdl-navigation__link" href="javascript:go1()"><font color="#000000" size="3"><strong>民 眾 即 時 舉 報 系 統</strong></font></a> 
<a class="mdl-navigation__link" href="https://play.oneforall.tw/airpollution.php"><font color="#000000" size="3"><strong>空 污 小 尖 兵</strong></font></a>
<a class="mdl-navigation__link" href="https://www.facebook.com/groups/315414952225849/?fref=ts"><font color="#000000" size="3"><strong>關 於 我 們</strong></font></a>

</nav><div>
</div></div>
</header>

<div class="mdl-layout__drawer"><span class="mdl-layout-title">
<a href="http://play.oneforall.tw/factory.php">
<img src="http://play.oneforall.tw/logo2.png" class="round-logo" alt="logo"><img src="http://play.oneforall.tw/logo4.png" height="20" width="120" alt="logo"></a>
</span><nav class="mdl-navigation">
<a class="mdl-navigation__link" href="javascript:go1()"><font color="#0068D0" size="3"><strong>民 眾 即 時 舉 報 系 統</strong></font></a> 
<a class="mdl-navigation__link" href="https://play.oneforall.tw/airpollution.php"><font color="#0068D0" size="3"><strong>空 污 小 尖 兵</strong></font></a>
<a class="mdl-navigation__link" href="https://www.facebook.com/groups/315414952225849/?fref=ts"><font color="#0068D0" size="3"><strong>關 於 我 們</strong></font></a>

</nav><div>
</div></div>
<div class="row"><br><br><br></div>
<iframe src="https://www.google.com/maps/d/embed?mid=1qL_0nir6xBfjCYjnRItri85VQ14" width="100%" height="100%"></iframe>

	
	

</body>
</html>