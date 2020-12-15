<?php


error_reporting(-1);
ini_set('display_errors', 'On');

$shop = $_GET["shop"];

$con = mysqli_connect("localhost","sowhatin_med","medical@123$","sowhatin_medical");
$sql= "SELECT msname,cno from mshop WHERE  acode='$shop'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($row);

?>