<!DOCTYPE html>
<html>
<head>
<!--<meta -->
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<title> 空 污 小 尖 兵 </title>
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
<link rel="icon" type="image/png" href="http://play.oneforall.tw/logo2.png"><link rel="shortcut icon" href="http://play.oneforall.tw/logo1.jpg" type="image/x-icon"><link rel="stylesheet" src="./style.min.css"><link rel="stylesheet" href="//storage.googleapis.com/code.getmdl.io/1.0.6/material.amber-orange.min.css"><link rel="stylesheet" href="./material.amber-orange.min.css"><link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"><link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons"><script src="//storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js" async=""></script><link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Leaflet.awesome-markers/2.0.2/leaflet.awesome-markers.css">
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
<a href="http://play.oneforall.tw/airpollution.php">
<img src="http://play.oneforall.tw/logo2.png" class="round-logo" alt="logo"><img src="http://play.oneforall.tw/logo3.png" height="20" width="100" alt="logo"></a>
</span><div class="mdl-layout-spacer" align="center"></div><nav class="mdl-navigation mdl-layout--large-screen-only">
<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/river/"><font color="#000000" size="2"><strong>台 灣 河 川 水 質 監 測</strong></font></a> -->
<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/pm2.5/"><font color="#000000" size="2"><strong>台 灣 即 時 PM2.5</strong></font></a>-->
<a class="mdl-navigation__link" href="javascript:go1()"><font color="#000000" size="3"><strong>民 眾 即 時 舉 報 系 統</strong></font></a> 
<a class="mdl-navigation__link" href="https://play.oneforall.tw/factory.php"><font color="#000000" size="3"><strong>工 廠 & 畜 牧 場 分 布</strong></font></a>
<a class="mdl-navigation__link" href="https://www.facebook.com/groups/315414952225849/?fref=ts"><font color="#000000" size="3"><strong>關 於 我 們</strong></font></a>
</nav><div>
</div></div>
</header>

<div class="mdl-layout__drawer"><span class="mdl-layout-title">
<a href="http://play.oneforall.tw/airpollution.php">
<img src="http://play.oneforall.tw/logo2.png" class="round-logo" alt="logo"><img src="http://play.oneforall.tw/logo3.png" height="20" width="100" alt="logo"></a>
</span><nav class="mdl-navigation">
<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/river/"><font color="#0068D0" size="2"><strong>台 灣 河 川 水 質 監 測</strong></font></a> -->
<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/pm2.5/"><font color="#0068D0" size="2"><strong>台 灣 即 時 PM2.5</strong></font></a>-->
<a class="mdl-navigation__link" href="javascript:go1()"><font color="#0068D0" size="3"><strong>民 眾 即 時 舉 報 系 統</strong></font></a>
<a class="mdl-navigation__link" href="https://play.oneforall.tw/factory.php"><font color="#0068D0" size="3"><strong>工 廠 & 畜 牧 場 分 布</strong></font></a>
<a class="mdl-navigation__link" href="https://www.facebook.com/groups/315414952225849/?fref=ts"><font color="#0068D0" size="3"><strong>關 於 我 們</strong></font></a>
</div>
<?php
		$arrContextOptions=array(
			"ssl"=>array(
				"verify_peer"=>false,
				"verify_peer_name"=>false,
			),
		);  

		$airbox032_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=28C2DDDD41C7&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$airbox032_result = json_decode($airbox032_response);
		$airbox032_t = $airbox032_result->t;
		$airbox032_h = $airbox032_result->h;
		$airbox032_pm25 = $airbox032_result->pm25;
		
		$SinLong_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF492C&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$SinLong_result = json_decode($SinLong_response);
		$SinLong_t = $SinLong_result->t;
		$SinLong_h = $SinLong_result->h;
		$SinLong_pm25 = $SinLong_result->pm25;
		
		$sanhowwu_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF47A0&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$sanhowwu_result = json_decode($sanhowwu_response);
		$sanhowwu_t = $sanhowwu_result->t;
		$sanhowwu_h = $sanhowwu_result->h;
		$sanhowwu_pm25 = $sanhowwu_result->pm25;
		
		$DL_tzuchi_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38B051FA&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$DL_tzuchi_result = json_decode($DL_tzuchi_response);
		$DL_tzuchi_t = $DL_tzuchi_result->t;
		$DL_tzuchi_h = $DL_tzuchi_result->h;
		$DL_tzuchi_pm25 = $DL_tzuchi_result->pm25;
		
		$sinnon_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF4872&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$sinnon_result = json_decode($sinnon_response);
		$sinnon_t = $sinnon_result->t;
		$sinnon_h = $sinnon_result->h;
		$sinnon_pm25 = $sinnon_result->pm25;
		
		$Burn_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA388FF65C&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$Burn_result = json_decode($Burn_response);
		$Burn_t = $Burn_result->t;
		$Burn_h = $Burn_result->h;
		$Burn_pm25 = $Burn_result->pm25;
		
		$GoodAir_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF47C0&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$GoodAir_result = json_decode($GoodAir_response);
		$GoodAir_t = $GoodAir_result->t;
		$GoodAir_h = $GoodAir_result->h;
		$GoodAir_pm25 = $GoodAir_result->pm25;

		
		$cst1_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=28C2DDDD47CB&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$cst1_result = json_decode($cst1_response);
		$cst1_t = $cst1_result->t;
		$cst1_h = $cst1_result->h;
		$cst1_pm25 = $cst1_result->pm25;
		
		$kt_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF47B0&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$kt_result = json_decode($kt_response);
		$kt_t = $kt_result->t;
		$kt_h = $kt_result->h;
		$kt_pm25 = $kt_result->pm25;
		
		$JiaBei_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA388FF65A&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$JiaBei_result = json_decode($JiaBei_response);
		$JiaBei_t = $JiaBei_result->t;
		$JiaBei_h = $JiaBei_result->h;
		$JiaBei_pm25 = $JiaBei_result->pm25;
		
		$ChiayiPark_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=28C2DDDD4343&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$ChiayiPark_result = json_decode($ChiayiPark_response);
		$ChiayiPark_t = $ChiayiPark_result->t;
		$ChiayiPark_h = $ChiayiPark_result->h;
		$ChiayiPark_pm25 = $ChiayiPark_result->pm25;
		
		$chiayiedu_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=28C2DDDD45E2&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$chiayiedu_result = json_decode($chiayiedu_response);
		$chiayiedu_t = $chiayiedu_result->t;
		$chiayiedu_h = $chiayiedu_result->h;
		$chiayiedu_pm25 = $chiayiedu_result->pm25;
		
		$Huang_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF47A8&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$Huang_result = json_decode($Huang_response);
		$Huang_t = $Huang_result->t;
		$Huang_h = $Huang_result->h;
		$Huang_pm25 = $Huang_result->pm25;
		
		$tofubook_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF47A8&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$tofubook_result = json_decode($tofubook_response);
		$tofubook_t = $tofubook_result->t;
		$tofubook_h = $tofubook_result->h;
		$tofubook_pm25 = $tofubook_result->pm25;
		
		$carrefour_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=28C2DDDD47AD&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$carrefour_result = json_decode($carrefour_response);
		$carrefour_t = $carrefour_result->t;
		$carrefour_h = $carrefour_result->h;
		$carrefour_pm25 = $carrefour_result->pm25;
		
		$mutomilonga_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38B05274&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$mutomilonga_result = json_decode($mutomilonga_response);
		$mutomilonga_t = $mutomilonga_result->t;
		$mutomilonga_h = $mutomilonga_result->h;
		$mutomilonga_pm25 = $mutomilonga_result->pm25;
		
		$Chiayi01_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA3895DFCA&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$Chiayi01_result = json_decode($Chiayi01_response);
		$Chiayi01_t = $Chiayi01_result->t;
		$Chiayi01_h = $Chiayi01_result->h;
		$Chiayi01_pm25 = $Chiayi01_result->pm25;
		
		$NCYU_wu_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38B0535E&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$NCYU_wu_result = json_decode($NCYU_wu_response);
		$NCYU_wu_t = $NCYU_wu_result->t;
		$NCYU_wu_h = $NCYU_wu_result->h;
		$NCYU_wu_pm25 = $NCYU_wu_result->pm25;
		
		$NCYU_Forestry_CCEH_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38B0535A&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$NCYU_Forestry_CCEH_result = json_decode($NCYU_Forestry_CCEH_response);
		$NCYU_Forestry_CCEH_t = $NCYU_Forestry_CCEH_result->t;
		$NCYU_Forestry_CCEH_h = $NCYU_Forestry_CCEH_result->h;
		$NCYU_Forestry_CCEH_pm25 = $NCYU_Forestry_CCEH_result->pm25;
?>

    <div id="map"></div>
    <script>
      function initMap() {
		  /*var _9E65F90C3F64 = {lat: 23.535, lng: 120.438};*/
		  //var extra = {lat: 23.57027, lng: 120.47871};
		  var ChiayiPark = {lat: 23.482, lng: 120.463};
		var JiaBei = {lat: 23.495, lng: 120.455};
		var GoodAir = {lat: 23.547, lng: 120.462};
		var Burn = {lat: 23.553, lng: 120.468};
		var tofubook = {lat: 23.483, lng: 120.443};
		var carrefour = {lat: 23.471, lng: 120.431};
		//var southnpm = {lat: 23.473313, lng: 120.292134};
		//var taibao = {lat: 23.478807, lng: 120.331934};
		var NCYU_Forestry_CCEH = {lat: 23.467, lng: 120.485};
		var NCYU_wu = {lat: 23.468, lng: 120.485};
		var Chiayi01 = {lat: 23.447, lng: 120.477};
		var chiayiedu = {lat: 23.468, lng: 120.453};
		var airbox032 = {lat: 23.459, lng: 120.299};
		var SinLong = {lat: 23.558, lng: 120.299};
		var sanhowwu = {lat: 23.531, lng: 120.345};
		var sinnon = {lat: 23.554, lng: 120.474};
		var DL_tzuchi = {lat: 23.594, lng: 120.457};
		//var FT1_CCUME_Factory101 = {lat: 23.562, lng: 120.48};
		var cst1 = {lat: 23.487, lng: 120.427};
		var kt = {lat: 23.464, lng: 120.418};
		var Huang = {lat: 23.474, lng: 120.44};
		var mutomilonga = {lat: 23.475, lng: 120.448};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: chiayiedu,
		  mapTypeId: 'terrain'
        });
        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		/*var extra_contentString = 'extra';*/
		var ChiayiPark_contentString = '<strong><h1>ChiayiPark</h1></strong>嘉義市東區<br>'+'溫度: '+'<?php echo $ChiayiPark_t[count($ChiayiPark_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $ChiayiPark_h[count($ChiayiPark_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $ChiayiPark_pm25[count($ChiayiPark_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"ChiayiPark\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"ChiayiPark\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var JiaBei_contentString = '<strong><h1>JiaBei</h1></strong>嘉義市東區<br>'+'溫度: '+'<?php echo $JiaBei_t[count($JiaBei_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $JiaBei_h[count($JiaBei_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $JiaBei_pm25[count($JiaBei_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"JiaBei\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"JiaBei\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var GoodAir_contentString = '<strong><h1>GoodAir</h1></strong>嘉義縣民雄鄉<br>'+'溫度: '+'<?php echo $GoodAir_t[count($GoodAir_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $GoodAir_h[count($GoodAir_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $GoodAir_pm25[count($GoodAir_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"GoodAir\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"GoodAir\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var Burn_contentString = '<strong><h1>Burn</h1></strong>嘉義縣民雄鄉<br>'+'溫度: '+'<?php echo $Burn_t[count($Burn_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $Burn_h[count($Burn_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $Burn_pm25[count($Burn_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"Burn\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"Burn\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var sinnon_contentString = '<strong><h1>興農二街（室內）</h1></strong>嘉義縣民雄鄉<br>'+'溫度: '+'<?php echo $sinnon_t[count($sinnon_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $sinnon_h[count($sinnon_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $sinnon_pm25[count($sinnon_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"sinnon\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"sinnon\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var tofubook_contentString = '<strong><h1>tofubook</h1></strong>嘉義市西區<br>'+'溫度: '+'<?php echo $tofubook_t[count($tofubook_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $tofubook_h[count($tofubook_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $tofubook_pm25[count($tofubook_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"tofubook\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"tofubook\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var mutomilonga_contentString = '<strong><h1>mutomilonga</h1></strong>嘉義市西區<br>'+'溫度: '+'<?php echo $mutomilonga_t[count($mutomilonga_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $mutomilonga_h[count($mutomilonga_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $mutomilonga_pm25[count($mutomilonga_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"mutomilonga\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"mutomilonga\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var carrefour_contentString = '<strong><h1>carrefour</h1></strong>嘉義市西區<br>'+'溫度: '+'<?php echo $carrefour_t[count($carrefour_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $carrefour_h[count($carrefour_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $carrefour_pm25[count($carrefour_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"carrefour\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"carrefour\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var Huang_contentString = '<strong><h1>Huang</h1></strong>嘉義市西區<br>'+'溫度: '+'溫度: '+'<?php echo $Huang_t[count($Huang_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $Huang_h[count($Huang_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $Huang_pm25[count($Huang_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"Huang\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"Huang\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var NCYU_wu_contentString = '<strong><h1>NCYU_wu</h1></strong>嘉義市東區<br>'+'溫度: '+'<?php echo $NCYU_wu_t[count($NCYU_wu_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $NCYU_wu_h[count($NCYU_wu_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $NCYU_wu_pm25[count($NCYU_wu_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"NCYU_wu\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"NCYU_wu\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var NCYU_Forestry_CCEH_contentString = '<strong><h1>NCYU Forestry CCEH</h1></strong>嘉義市東區<br>'+'溫度: '+'<?php echo $NCYU_Forestry_CCEH_t[count($NCYU_Forestry_CCEH_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $NCYU_Forestry_CCEH_h[count($NCYU_Forestry_CCEH_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $NCYU_Forestry_CCEH_pm25[count($NCYU_Forestry_CCEH_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"NCYU_Forestry_CCEH\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"NCYU_Forestry_CCEH\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var Chiayi01_contentString = '<strong><h1>Chiayi01</h1></strong>嘉義縣中埔鄉<br>'+'溫度: '+'<?php echo $Chiayi01_t[count($Chiayi01_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $Chiayi01_h[count($Chiayi01_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $Chiayi01_pm25[count($Chiayi01_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"Chiayi01\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"Chiayi01\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var chiayiedu_contentString = '<strong><h1>chiayiedu</h1></strong>嘉義市東區<br>'+'溫度: '+'<?php echo $chiayiedu_t[count($chiayiedu_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $chiayiedu_h[count($chiayiedu_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $chiayiedu_pm25[count($chiayiedu_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"chiayiedu\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"chiayiedu\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var airbox032_contentString = '<strong><h1>airbox032</h1></strong>嘉義縣太保市<br>'+'溫度: '+'<?php echo $airbox032_t[count($airbox032_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $airbox032_h[count($airbox032_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $airbox032_pm25[count($airbox032_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"airbox032\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"airbox032\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var SinLong_contentString = '<strong><h1>Sin Long</h1></strong>嘉義縣六腳鄉<br>'+'溫度: '+'<?php echo $SinLong_t[count($SinLong_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $SinLong_h[count($SinLong_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $SinLong_pm25[count($SinLong_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"SinLong\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"SinLong\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var sanhowwu_contentString = '<strong><h1>三好屋股份有限公司</h1></strong>嘉義縣新港鄉<br>'+'溫度: '+'<?php echo $sanhowwu_t[count($sanhowwu_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $sanhowwu_h[count($sanhowwu_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $sanhowwu_pm25[count($sanhowwu_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"sanhowwu\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"sanhowwu\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var DL_tzuchi_contentString = '<strong><h1>DL-tzuchi</h1></strong>嘉義縣大林鎮<br>'+'溫度: '+'<?php echo $DL_tzuchi_t[count($DL_tzuchi_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $DL_tzuchi_h[count($DL_tzuchi_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $DL_tzuchi_pm25[count($DL_tzuchi_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"DL_tzuchi\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"DL_tzuchi\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var cst1_contentString = '<strong><h1>cst1</h1></strong>嘉義市西區<br>'+'溫度: '+'<?php echo $cst1_t[count($cst1_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $cst1_h[count($cst1_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $cst1_pm25[count($cst1_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"cst1\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"cst1\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';
		var kt_contentString = '<strong><h1>kt</h1></strong>嘉義市西區<br>'+'溫度: '+'<?php echo $kt_t[count($kt_t)-1] ?>'+'°C '+'濕度: '+'<?php echo $kt_h[count($kt_h)-1] ?>'+'%<br>'+'PM2.5 數值:'+'<?php echo $kt_pm25[count($kt_pm25)-1]?>'+'μg/m³'+'<br><form name=\"form\" action=\"./requesterror.php\" method=\"POST\"><input type=\"hidden\" name=\"place1\" value=\"kt\"><button type=\"submit\" class=\"btn btn-default\">即時舉報   </button></form><form name=\"form\" action=\"./linepic.php\" method=\"POST\"><input type=\"hidden\" name=\"pm25\" value=\"kt\"><button type=\"submit\" class=\"btn btn-default\">PM2.5線性圖</button></form>';

		var Burn_infowindow = new google.maps.InfoWindow({
			content: Burn_contentString
		  });
		  /*var southnpm_infowindow = new google.maps.InfoWindow({
			content: southnpm_contentString
		  });*/
		  var GoodAir_infowindow = new google.maps.InfoWindow({
			content: GoodAir_contentString
		  });
		  var sinnon_infowindow = new google.maps.InfoWindow({
			content: sinnon_contentString
		  });
		  /*var taibao_infowindow = new google.maps.InfoWindow({
			content: taibao_contentString
		  });*/
		  var NCYU_Forestry_CCEH_infowindow = new google.maps.InfoWindow({
			content: NCYU_Forestry_CCEH_contentString
		  });
		  var NCYU_wu_infowindow = new google.maps.InfoWindow({
			content: NCYU_wu_contentString
		  });
		  var Chiayi01_infowindow = new google.maps.InfoWindow({
			content: Chiayi01_contentString
		  });
		  var chiayiedu_infowindow = new google.maps.InfoWindow({
			content: chiayiedu_contentString
		  });
		  var airbox032_infowindow = new google.maps.InfoWindow({
			content: airbox032_contentString
		  });
		  var SinLong_infowindow = new google.maps.InfoWindow({
			content: SinLong_contentString
		  });
		  var sanhowwu_infowindow = new google.maps.InfoWindow({
			content: sanhowwu_contentString
		  });
		  var DL_tzuchi_infowindow = new google.maps.InfoWindow({
			content: DL_tzuchi_contentString
		  });
		  /*var FT1_CCUME_Factory101_infowindow = new google.maps.InfoWindow({
			content: FT1_CCUME_Factory101_contentString
		  });*/
		  var cst1_infowindow = new google.maps.InfoWindow({
			content: cst1_contentString
		  });
		  var kt_infowindow = new google.maps.InfoWindow({
			content: kt_contentString
		  });
		  var carrefour_infowindow = new google.maps.InfoWindow({
			content: carrefour_contentString
		  });
		  var Huang_infowindow = new google.maps.InfoWindow({
			content: Huang_contentString
		  });
		  var mutomilonga_infowindow = new google.maps.InfoWindow({
			content: mutomilonga_contentString
		  });
		  var tofubook_infowindow = new google.maps.InfoWindow({
			content: tofubook_contentString
		  });
		  var JiaBei_infowindow = new google.maps.InfoWindow({
			content: JiaBei_contentString
		  });
		  var ChiayiPark_infowindow = new google.maps.InfoWindow({
			content: ChiayiPark_contentString
		  });
		  /*var marker = new google.maps.Marker({
			position: southnpm,
			map: map,
			icon:'http://play.oneforall.tw/mark_red.png',
			title: 'southnpm (Ayers Rock)'
		  });*/
		  /*var marker1 = new google.maps.Marker({
			position: taibao,
			map: map,
			icon:'./mark_red.png',
			title: 'Taibao City'
		  });*/
		  var marker2 = new google.maps.Marker({
			position: NCYU_Forestry_CCEH,
			map: map,
			icon:'./mark_red.png',
			title: 'NCYU Forestry CCEH'
		  });
		  var marker3 = new google.maps.Marker({
			position: NCYU_wu,
			map: map,
			icon:'./mark_red.png',
			title: 'NCYU_wu'
		  });
		  var marker4 = new google.maps.Marker({
			position: Chiayi01,
			map: map,
			icon:'./mark_red.png',
			title: 'Chiayi01'
		  });
		  var marker5 = new google.maps.Marker({
			position: chiayiedu,
			map: map,
			icon:'./mark_red.png',
			title: 'chiayiedu'
		  });
		  var marker6 = new google.maps.Marker({
			position: airbox032,
			map: map,
			icon:'./mark_red.png',
			title: 'airbox032'
		  });
		  var marker7 = new google.maps.Marker({
			position: SinLong,
			map: map,
			icon:'./mark_red.png',
			title: 'SinLong'
		  });
		  var marker8 = new google.maps.Marker({
			position: sanhowwu,
			map: map,
			icon:'./mark_red.png',
			title: '三好屋股份有限公司'
		  });
		  var marker9 = new google.maps.Marker({
			position: DL_tzuchi,
			map: map,
			icon:'./mark_red.png',
			title: 'DL_tzuchi'
		  });
		  /*var marker10 = new google.maps.Marker({
			position: FT1_CCUME_Factory101,
			map: map,
			title: 'FT1_CCUME_Factory101'
		  });*/
		  
		  var marker11 = new google.maps.Marker({
			position: cst1,
			map: map,
			icon:'./mark_red.png',
			title: 'cst1'
		  });
		  var marker12 = new google.maps.Marker({
			position: kt,
			map: map,
			icon:'./mark_red.png',
			title: 'kt'
		  });
		  var marker13 = new google.maps.Marker({
			position: carrefour,
			map: map,
			icon:'./mark_red.png',
			title: 'carrefour'
		  });
		  var marker14 = new google.maps.Marker({
			position: Huang,
			map: map,
			icon:'./mark_red.png',
			title: 'Huang'
		  });
		  var marker15 = new google.maps.Marker({
			position: mutomilonga,
			map: map,
			icon:'./mark_red.png',
			title: 'mutomilonga'
		  });
		  var marker16 = new google.maps.Marker({
			position: sinnon,
			map: map,
			icon:'./mark_red.png',
			title: 'sinnon'
		  });
		  var marker17 = new google.maps.Marker({
			position: Burn,
			map: map,
			icon:'./mark_red.png',
			title: 'Burn'
		  });
		  var marker18 = new google.maps.Marker({
			position: GoodAir,
			map: map,
			icon:'./mark_red.png',
			title: 'GoodAir'
		  });
		  var marker20 = new google.maps.Marker({
			position: tofubook,
			map: map,
			icon:'./mark_red.png',
			title: 'tofubook'
		  });
		  var marker21 = new google.maps.Marker({
			position: JiaBei,
			map: map,
			icon:'./mark_red.png',
			title: 'JiaBei'
		  });
		  var marker22 = new google.maps.Marker({
			position: ChiayiPark,
			map: map,
			icon:'./mark_red.png',
			title: 'ChiayiPark'
		  });
		  /*var marker23 = new google.maps.Marker({
			position: extra,
			map: map,
			title: 'extra'
		  });*/
		  /*var marker20 = new google.maps.Marker({
			position: _9E65F90C3F64,
			map: map,
			title: '_9E65F90C3F64'
		  });*/
		  //marker1.setMap(Map);
		  marker2.setMap(Map);
		  marker3.setMap(Map);
		  marker4.setMap(Map);
		  marker5.setMap(Map);
		  marker6.setMap(Map);
		  marker7.setMap(Map);
		  marker8.setMap(Map);
		  marker9.setMap(Map);
		  //marker10.setMap(Map);
		  marker11.setMap(Map);
		  marker12.setMap(Map);
		  marker13.setMap(Map);
		  marker14.setMap(Map);
		  marker15.setMap(Map);
		  marker16.setMap(Map);
		  marker17.setMap(Map);
		  marker18.setMap(Map);
		  marker20.setMap(Map);
		  marker21.setMap(Map);
		  marker22.setMap(Map);
		  //marker23.setMap(Map);
		  //marker20.setMap(Map);
		  /*marker.addListener('click', function() {
			southnpm_infowindow.open(map, marker);
		  });*/
		  /*marker1.addListener('click', function() {
			taibao_infowindow.open(map, marker1);
		  });*/
		  marker2.addListener('click', function() {
			NCYU_Forestry_CCEH_infowindow.open(map, marker2);
		  });
		  marker3.addListener('click', function() {
			NCYU_wu_infowindow.open(map, marker3);
		  });
		  marker4.addListener('click', function() {
			Chiayi01_infowindow.open(map, marker4);
		  });
		  marker5.addListener('click', function() {
			chiayiedu_infowindow.open(map, marker5);
		  });
		  marker6.addListener('click', function() {
			airbox032_infowindow.open(map, marker6);
		  });
		  marker7.addListener('click', function() {
			SinLong_infowindow.open(map, marker7);
		  });
		  marker8.addListener('click', function() {
			sanhowwu_infowindow.open(map, marker8);
		  });
		  marker9.addListener('click', function() {
			DL_tzuchi_infowindow.open(map, marker9);
		  });
		  /*marker10.addListener('click', function() {
			FT1_CCUME_Factory101_infowindow.open(map, marker10);
		  });*/
		  marker11.addListener('click', function() {
			cst1_infowindow.open(map, marker11);
		  });
		  marker12.addListener('click', function() {
			kt_infowindow.open(map, marker12);
		  });
		  marker13.addListener('click', function() {
			carrefour_infowindow.open(map, marker13);
		  });
		  marker14.addListener('click', function() {
			Huang_infowindow.open(map, marker14);
		  });
		  marker15.addListener('click', function() {
			mutomilonga_infowindow.open(map, marker15);
		  });
		  marker16.addListener('click', function() {
			sinnon_infowindow.open(map, marker16);
		  });
		  marker17.addListener('click', function() {
			Burn_infowindow.open(map, marker17);
		  });
		  marker18.addListener('click', function() {
			GoodAir_infowindow.open(map, marker18);
		  });
		  marker20.addListener('click', function() {
			tofubook_infowindow.open(map, marker20);
		  });
		  marker21.addListener('click', function() {
			JiaBei_infowindow.open(map, marker21);
		  });
		  marker22.addListener('click', function() {
			ChiayiPark_infowindow.open(map, marker22);
		  });
		  /*marker23.addListener('click', function() {
			extra_infowindow.open(map, marker23);
		  });*/
		  /*marker20.addListener('click', function() {
			_9E65F90C3F64_infowindow.open(map, marker20);
		  });*/
      }
    </script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7XGkUMP5KR3rg4YTIEUU9u-sZoiBWWqc&callback=initMap"> </script>

<!--	<iframe 
    src="https://www.google.com/maps/d/embed?mid=1qL_0nir6xBfjCYjnRItri85VQ14" width="100%" height="100%">
    </iframe> -->
</body>
</html>