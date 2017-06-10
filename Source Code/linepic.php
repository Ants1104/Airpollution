<!DOCTYPE html>
<html>
<head>
<!--<meta -->
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<title> 台 灣 即 時 PM2.5 </title>
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
	      canvas{
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
</style>
</head>
<body>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header" id="layout-header">
<header class="mdl-layout__header">
<div class="mdl-layout__header-row"><span class="mdl-layout-title">
<a href="http://play.oneforall.tw/airpollution.php">
<img src="http://play.oneforall.tw/logo2.png" class="round-logo" alt="logo"><img src="http://play.oneforall.tw/logo20.png" height="20" width="160" alt="logo"><!--<img src="http://play.oneforall.tw/logo3.png" height="20" width="100" alt="logo">--></a>
</span><div class="mdl-layout-spacer" align="center"></div><nav class="mdl-navigation mdl-layout--large-screen-only">
<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/river/"><font color="#000000" size="2"><strong>台 灣 河 川 水 質 監 測</strong></font></a> -->
<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/pm2.5/"><font color="#000000" size="2"><strong>台 灣 即 時 PM2.5</strong></font></a>-->
<a class="mdl-navigation__link" href="javascript:go1()"><font color="#000000" size="3"><strong>民 眾 即 時 舉 報 系 統</strong></font></a> 
<a class="mdl-navigation__link" href="https://play.oneforall.tw/airpollution.php"><font color="#000000" size="3"><strong>空 污 小 尖 兵</strong></font></a>
<a class="mdl-navigation__link" href="https://play.oneforall.tw/factory.php"><font color="#000000" size="3"><strong>工 廠 & 畜 牧 場 分 布</strong></font></a>
<a class="mdl-navigation__link" href="https://www.facebook.com/groups/315414952225849/?fref=ts"><font color="#000000" size="3"><strong>關 於 我 們</strong></font></a>
</nav><div>
</div></div>
</header>

<div class="mdl-layout__drawer"><span class="mdl-layout-title">
<a href="http://play.oneforall.tw/airpollution.php">
<img src="http://play.oneforall.tw/logo2.png" class="round-logo" alt="logo"><img src="http://play.oneforall.tw/logo20.png" height="20" width="160" alt="logo"></a>
</span><nav class="mdl-navigation">
<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/river/"><font color="#0068D0" size="2"><strong>台 灣 河 川 水 質 監 測</strong></font></a> -->
<!--<a class="mdl-navigation__link" href="https://www.taiwanstat.com/realtime/pm2.5/"><font color="#0068D0" size="2"><strong>台 灣 即 時 PM2.5</strong></font></a>-->
<a class="mdl-navigation__link" href="javascript:go1()"><font color="#0068D0" size="3"><strong>民 眾 即 時 舉 報 系 統</strong></font></a>
<a class="mdl-navigation__link" href="https://play.oneforall.tw/airpollution.php"><font color="#0068D0" size="3"><strong>空 污 小 尖 兵</strong></font></a>
<a class="mdl-navigation__link" href="https://play.oneforall.tw/factory.php"><font color="#0068D0" size="3"><strong>工 廠 & 畜 牧 場 分 布</strong></font></a>
<a class="mdl-navigation__link" href="https://www.facebook.com/groups/315414952225849/?fref=ts"><font color="#0068D0" size="3"><strong>關 於 我 們</strong></font></a>
</div>
</div>
<br><br><br><br><br><br><br>
<?php 
		$arrContextOptions=array(
			"ssl"=>array(
				"verify_peer"=>false,
				"verify_peer_name"=>false,
			),
		);  
$pm25 = $_POST['pm25'];

if($pm25=="ChiayiPark")
{
		$ChiayiPark_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=28C2DDDD4343&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$ChiayiPark_result = json_decode($ChiayiPark_response);
		$ChiayiPark_labels = $ChiayiPark_result->labels;
		$ChiayiPark_t = $ChiayiPark_result->t;
		$ChiayiPark_h = $ChiayiPark_result->h;
		$ChiayiPark_pm25 = $ChiayiPark_result->pm25;
	$craw_time =$ChiayiPark_labels;
	$craw_pm25 = $ChiayiPark_pm25;
	$craw_t = $ChiayiPark_t;
	$craw_h = $ChiayiPark_h;
}
else if($pm25=="NCYU_Forestry_CCEH")
{
		$NCYU_Forestry_CCEH_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38B0535A&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$NCYU_Forestry_CCEH_result = json_decode($NCYU_Forestry_CCEH_response);
		$NCYU_Forestry_CCEH_labels = $NCYU_Forestry_CCEH_result->labels;
		$NCYU_Forestry_CCEH_t = $NCYU_Forestry_CCEH_result->t;
		$NCYU_Forestry_CCEH_h = $NCYU_Forestry_CCEH_result->h;
		$NCYU_Forestry_CCEH_pm25 = $NCYU_Forestry_CCEH_result->pm25;
	$craw_time =$NCYU_Forestry_CCEH_labels;
	$craw_pm25 = $NCYU_Forestry_CCEH_pm25;
	$craw_t = $NCYU_Forestry_CCEH_t;
	$craw_h = $NCYU_Forestry_CCEH_h;
}
else if($pm25=="NCYU_wu")
{		
		$NCYU_wu_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38B0535E&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$NCYU_wu_result = json_decode($NCYU_wu_response);
		$NCYU_wu_labels = $NCYU_wu_result->labels;
		$NCYU_wu_t = $NCYU_wu_result->t;
		$NCYU_wu_h = $NCYU_wu_result->h;
		$NCYU_wu_pm25 = $NCYU_wu_result->pm25;
	$craw_time =$NCYU_wu_labels;
	$craw_pm25 = $NCYU_wu_pm25;
	$craw_t = $NCYU_wu_t;
	$craw_h = $NCYU_wu_h;
}
else if($pm25=="Chiayi01")
{
		$Chiayi01_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA3895DFCA&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$Chiayi01_result = json_decode($Chiayi01_response);
		$Chiayi01_labels = $Chiayi01_result->labels;
		$Chiayi01_t = $Chiayi01_result->t;
		$Chiayi01_h = $Chiayi01_result->h;
		$Chiayi01_pm25 = $Chiayi01_result->pm25;
	$craw_time =$Chiayi01_labels;
	$craw_pm25 = $Chiayi01_pm25;
	$craw_t = $Chiayi01_t;
	$craw_h = $Chiayi01_h;
}
else if($pm25=="mutomilonga")
{
		
		$mutomilonga_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38B05274&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$mutomilonga_result = json_decode($mutomilonga_response);
		$mutomilonga_labels = $mutomilonga_result->labels;
		$mutomilonga_t = $mutomilonga_result->t;
		$mutomilonga_h = $mutomilonga_result->h;
		$mutomilonga_pm25 = $mutomilonga_result->pm25;
	$craw_time =$mutomilonga_labels;
	$craw_pm25 = $mutomilonga_pm25;
	$craw_t = $mutomilonga_t;
	$craw_h = $mutomilonga_h;

}
else if($pm25=="carrefour")
{
		$carrefour_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=28C2DDDD47AD&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$carrefour_result = json_decode($carrefour_response);
		$carrefour_labels = $carrefour_result->labels;
		$carrefour_t = $carrefour_result->t;
		$carrefour_h = $carrefour_result->h;
		$carrefour_pm25 = $carrefour_result->pm25;
	$craw_time =$carrefour_labels;
	$craw_pm25 = $carrefour_pm25;
	$craw_t = $carrefour_t;
	$craw_h = $carrefour_h;


}
else if($pm25=="tofubook")
{
			$tofubook_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF47A8&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$tofubook_result = json_decode($tofubook_response);
		$tofubook_labels = $tofubook_result->labels;
		$tofubook_t = $tofubook_result->t;
		$tofubook_h = $tofubook_result->h;
		$tofubook_pm25 = $tofubook_result->pm25;
	$craw_time =$tofubook_labels;
	$craw_pm25 = $tofubook_pm25;
	$craw_t = $tofubook_t;
	$craw_h = $tofubook_h;
}
else if($pm25=="Huang")
{
			$Huang_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF47A8&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$Huang_result = json_decode($Huang_response);
		$Huang_labels = $Huang_result->labels;
		$Huang_t = $Huang_result->t;
		$Huang_h = $Huang_result->h;
		$Huang_pm25 = $Huang_result->pm25;
	$craw_time =$Huang_labels;
	$craw_pm25 = $Huang_pm25;
	$craw_t = $Huang_t;
	$craw_h = $Huang_h;

}
else if($pm25=="chiayiedu")
{		$chiayiedu_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=28C2DDDD45E2&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$chiayiedu_result = json_decode($chiayiedu_response);
		$chiayiedu_labels = $chiayiedu_result->labels;
		$chiayiedu_t = $chiayiedu_result->t;
		$chiayiedu_h = $chiayiedu_result->h;
		$chiayiedu_pm25 = $chiayiedu_result->pm25;
	$craw_time =$chiayiedu_labels;
	$craw_pm25 = $Cchiayiedu_pm25;
	$craw_t = $chiayiedu_t;
	$craw_h = $chiayiedu_h;
}
else if($pm25=="JiaBei")
{		$JiaBei_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA388FF65A&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$JiaBei_result = json_decode($JiaBei_response);
		$JiaBei_labels = $JiaBei_result->labels;
		$JiaBei_t = $JiaBei_result->t;
		$JiaBei_h = $JiaBei_result->h;
		$JiaBei_pm25 = $JiaBei_result->pm25;
	$craw_time =$JiaBei_labels;
	$craw_pm25 = $JiaBei_pm25;
	$craw_t = $JiaBei_t;
	$craw_h = $JiaBei_h;
}
else if($pm25=="kt")
{		$kt_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF47B0&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$kt_result = json_decode($kt_response);
		$kt_labels = $kt_result->labels;
		$kt_t = $kt_result->t;
		$kt_h = $kt_result->h;
		$kt_pm25 = $kt_result->pm25;
	$craw_time =$kt_labels;
	$craw_pm25 = $kt_pm25;
	$craw_t = $kt_t;
	$craw_h = $kt_h;
}
else if($pm25=="cst1")
{			$cst1_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=28C2DDDD47CB&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$cst1_result = json_decode($cst1_response);
		$cst1_labels = $cst1_result->labels;
		$cst1_t = $cst1_result->t;
		$cst1_h = $cst1_result->h;
		$cst1_pm25 = $cst1_result->pm25;
	$craw_time =$cst1_labels;
	$craw_pm25 = $cst1_pm25;
	$craw_t = $cst1_t;
	$craw_h = $cst1_h;

}
else if($pm25=="GoodAir")
{		$GoodAir_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF47C0&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$GoodAir_result = json_decode($GoodAir_response);
		$GoodAir_labels = $GoodAir_result->labels;
		$GoodAir_t = $GoodAir_result->t;
		$GoodAir_h = $GoodAir_result->h;
		$GoodAir_pm25 = $GoodAir_result->pm25;
	$craw_time =$GoodAir_labels;
	$craw_pm25 = $GoodAir_pm25;
	$craw_t = $GoodAir_t;
	$craw_h = $GoodAir_h;
}
else if($pm25=="Burn")
{		$Burn_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA388FF65C&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$Burn_result = json_decode($Burn_response);
		$Burn_labels = $Burn_result->labels;
		$Burn_t = $Burn_result->t;
		$Burn_h = $Burn_result->h;
		$Burn_pm25 = $Burn_result->pm25;
	$craw_time =$Burn_labels;
	$craw_pm25 = $Burn_pm25;
	$craw_t = $Burn_t;
	$craw_h = $Burn_h;
}
else if($pm25=="sinnon")
{		$sinnon_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF4872&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$sinnon_result = json_decode($sinnon_response);
		$sinnon_labels = $sinnon_result->labels;
		$sinnon_t = $sinnon_result->t;
		$sinnon_h = $sinnon_result->h;
		$sinnon_pm25 = $sinnon_result->pm25;
	$craw_time =$sinnon_labels;
	$craw_pm25 = $sinnon_pm25;
	$craw_t = $sinnon_t;
	$craw_h = $sinnon_h;
}
else if($pm25=="DL_tzuchi")
{
		$DL_tzuchi_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38B051FA&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$DL_tzuchi_result = json_decode($DL_tzuchi_response);
		$DL_tzuchi_labels = $DL_tzuchi_result->labels;
		$DL_tzuchi_t = $DL_tzuchi_result->t;
		$DL_tzuchi_h = $DL_tzuchi_result->h;
		$DL_tzuchi_pm25 = $DL_tzuchi_result->pm25;
	$craw_time =$DL_tzuchi_labels;
	$craw_pm25 = $DL_tzuchi_pm25;
	$craw_t = $DL_tzuchi_t;
	$craw_h = $DL_tzuchi_h;
}
else if($pm25=="sanhowwu")
{
		$sanhowwu_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF47A0&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$sanhowwu_result = json_decode($sanhowwu_response);
		$sanhowwu_labels = $sanhowwu_result->labels;
		$sanhowwu_t = $sanhowwu_result->t;
		$sanhowwu_h = $sanhowwu_result->h;
		$sanhowwu_pm25 = $sanhowwu_result->pm25;
	$craw_time =$sanhowwu_labels;
	$craw_pm25 = $sanhowwu_pm25;
	$craw_t = $sanhowwu_t;
	$craw_h = $sanhowwu_h;
}
else if($pm25=="SinLong")
{
		$SinLong_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=74DA38AF492C&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
		$SinLong_result = json_decode($SinLong_response);
		$SinLong_labels = $SinLong_result->labels;
		$SinLong_t = $SinLong_result->t;
		$SinLong_h = $SinLong_result->h;
		$SinLong_pm25 = $SinLong_result->pm25;
	$craw_time =$SinLong_labels;
	$craw_pm25 = $SinLong_pm25;
	$craw_t = $SinLong_t;
	$craw_h = $SinLong_h;
}
else if($pm25=="airbox032")
{
	$airbox032_response = file_get_contents("https://airbox.edimaxcloud.com/query_history?id=28C2DDDD41C7&token=EA81A1FA-8EDB-4CA0-B07B-A881C74B0401", false, stream_context_create($arrContextOptions));
	$airbox032_result = json_decode($airbox032_response);
		$airbox032_labels = $airbox032_result->labels;
		$airbox032_t = $airbox032_result->t;
		$airbox032_h = $airbox032_result->h;
		$airbox032_pm25 = $airbox032_result->pm25;
	$craw_time =$airbox032_labels;
	$craw_pm25 = $airbox032_pm25;
	$craw_t = $airbox032_t;
	$craw_h = $airbox032_h;
}
?>
<?php

echo date("現在時間: Y年m月d日 H:i:s");

?>

<div class="text-center">
	<div style="width:50%;">
        <canvas id="canvas"></canvas>
    </div>

</div>
	<script>
		   var label = ['<?php echo $craw_time[count($craw_time)-25]?>'];
	   label.push('<?php echo $craw_time[count($craw_time)-24]?>');
	   label.push('<?php echo $craw_time[count($craw_time)-23]?>');
	   label.push('<?php echo $craw_time[count($craw_time)-22]?>');
	   label.push('<?php echo $craw_time[count($craw_time)-21]?>');
	   label.push('<?php echo $craw_time[count($craw_time)-20]?>');
	   label.push('<?php echo $craw_time[count($craw_time)-19]?>');
	   label.push('<?php echo $craw_time[count($craw_time)-18]?>');
	   label.push('<?php echo $craw_time[count($craw_time)-17]?>');
	   label.push('<?php echo $craw_time[count($craw_time)-16]?>');
	   label.push('<?php echo $craw_time[count($craw_time)-15]?>');
	   label.push('<?php echo $craw_time[count($craw_time)-14]?>');
	   label.push('<?php echo $craw_time[count($craw_time)-13]?>');
	label.push('<?php echo $craw_time[count($craw_time)-12]?>');
	label.push('<?php echo $craw_time[count($craw_time)-11]?>');
	label.push('<?php echo $craw_time[count($craw_time)-10]?>');
	label.push('<?php echo $craw_time[count($craw_time)-9]?>');
	label.push('<?php echo $craw_time[count($craw_time)-8]?>');
	label.push('<?php echo $craw_time[count($craw_time)-7]?>');
	label.push('<?php echo $craw_time[count($craw_time)-6]?>');
	label.push('<?php echo $craw_time[count($craw_time)-5]?>');
	label.push('<?php echo $craw_time[count($craw_time)-4]?>');
	label.push('<?php echo $craw_time[count($craw_time)-3]?>');
	label.push('<?php echo $craw_time[count($craw_time)-2]?>');
	label.push('<?php echo $craw_time[count($craw_time)-1]?>');
	   
	   var place = '測站: '+'<?php echo $pm25?>';
	   var data1 = [<?php echo $craw_pm25[count($craw_pm25)-25]?>];
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-24]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-23]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-22]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-21]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-20]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-19]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-18]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-17]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-16]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-15]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-14]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-13]?>);
		data1.push(<?php echo $craw_pm25[count($craw_pm25)-12]?>);
		data1.push(<?php echo $craw_pm25[count($craw_pm25)-11]?>);
		data1.push(<?php echo $craw_pm25[count($craw_pm25)-10]?>);
		data1.push(<?php echo $craw_pm25[count($craw_pm25)-9]?>);
		data1.push(<?php echo $craw_pm25[count($craw_pm25)-8]?>);
		data1.push(<?php echo $craw_pm25[count($craw_pm25)-7]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-6]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-5]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-4]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-3]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-2]?>);
	    data1.push(<?php echo $craw_pm25[count($craw_pm25)-1]?>);
		
		
		var data2 = [<?php echo $craw_t[count($craw_t)-25]?>];
	    data2.push(<?php echo $craw_t[count($craw_t)-24]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-23]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-22]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-21]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-20]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-19]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-18]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-17]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-16]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-15]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-14]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-13]?>);
		data2.push(<?php echo $craw_t[count($craw_t)-12]?>);
		data2.push(<?php echo $craw_t[count($craw_t)-11]?>);
		data2.push(<?php echo $craw_t[count($craw_t)-10]?>);
		data2.push(<?php echo $craw_t[count($craw_t)-9]?>);
		data2.push(<?php echo $craw_t[count($craw_t)-8]?>);
		data2.push(<?php echo $craw_t[count($craw_t)-7]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-6]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-5]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-4]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-3]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-2]?>);
	    data2.push(<?php echo $craw_t[count($craw_t)-1]?>);
		
		var data3 = [<?php echo $craw_h[count($craw_h)-25]?>];
	    data3.push(<?php echo $craw_h[count($craw_h)-24]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-23]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-22]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-21]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-20]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-19]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-18]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-17]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-16]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-15]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-14]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-13]?>);
		data3.push(<?php echo $craw_h[count($craw_h)-12]?>);
		data3.push(<?php echo $craw_h[count($craw_h)-11]?>);
		data3.push(<?php echo $craw_h[count($craw_h)-10]?>);
		data3.push(<?php echo $craw_h[count($craw_h)-9]?>);
		data3.push(<?php echo $craw_h[count($craw_h)-8]?>);
		data3.push(<?php echo $craw_h[count($craw_h)-7]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-6]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-5]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-4]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-3]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-2]?>);
	    data3.push(<?php echo $craw_h[count($craw_h)-1]?>);

        var chartData = {
            labels: label,
            datasets: [{
                type: 'line',
                label: 'PM2.5數值(μg/m³)',
                borderColor: window.chartColors.yellow,
                borderWidth: 2,
                fill: false,
                data: data1
            }, {
                type: 'line',
                label: '溫度(°C)',
                borderColor: window.chartColors.red,
                data: data2,
				fill: false,
                borderWidth: 2
            }, {
                type: 'line',
                label: '濕度(%)',
				fill: false,
                borderColor: window.chartColors.blue,
                data: data3
            }]
        };
        window.onload = function() {
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myMixedChart = new Chart(ctx, {
                type: 'line',
                data: chartData,
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: place
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: true
                    }
                }
            });
        };
    </script>
	
<?php echo "資料來源: <br>空氣盒子-城市PM2.5、溫濕度環境感測器 https://airbox.edimaxcloud.com/"?>
</body>
</html>