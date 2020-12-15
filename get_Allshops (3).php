<?php


error_reporting(-1);
ini_set('display_errors', 'On');

$shop = $_GET["shop"];
$med = $_GET["med"];
$con = mysqli_connect("localhost","sowhatin_med","medical@123$","sowhatin_medical");
$sql= "SELECT msname,cno from m_shop WHERE mid IN (Select mid from medicines where mname='$med') AND acode='$shop'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($row);

?>