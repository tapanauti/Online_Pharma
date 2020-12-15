<?php

$con = mysqli_connect("localhost","sowhatin_med","medical@123$","sowhatin_medical");
$sql= "SELECT mname from medicines";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($row);

?>