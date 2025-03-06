<?php
date_default_timezone_set("Asia/Shanghai");
$latitude = $_GET['lat'];
$longitude = $_GET['long'];
$time = date("Y-m-d H:i:s");

$data = "时间: $time, 纬度: $latitude, 经度: $longitude\n";

file_put_contents('location.txt', $data, FILE_APPEND);
echo "位置上传成功";
?>
