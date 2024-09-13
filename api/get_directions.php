<?php
// API này sẽ gọi đến dịch vụ điều hướng 
$from_lat = $_GET['from_lat'];
$from_lng = $_GET['from_lng'];
$to_lat = $_GET['to_lat'];
$to_lng = $_GET['to_lng'];

$api_key = '5b3ce3597851110001cf624820117eb3130241f49f46711ebf6206c6'; // Thay bằng API key của bạn
$url = "https://api.openrouteservice.org/v2/directions/driving-car?api_key=$api_key&start=$from_lng,$from_lat&end=$to_lng,$to_lat";

$response = file_get_contents($url);
echo $response;
?>