<?php
$url = "https://data.nhi.gov.tw/resource/mask/maskdata.csv"; //政府開放資料庫
$lines=file($url, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$maskArr = array();

for($i=0; $i<count($lines)-1; $i++){
	$maskArr[$i] = explode(",", chop($lines[$i]));
}

echo json_encode($maskArr);

?>

