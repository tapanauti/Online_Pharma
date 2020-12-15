<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM medicines WHERE mname like '" . $_POST["keyword"] . "%' ORDER BY mname LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="Meds-list">
<?php
foreach($result as $medicines) {
?>
<li onClick="selectMeds('<?php echo $medicines["mname"]; ?>');"><?php echo $medicines["mname"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>