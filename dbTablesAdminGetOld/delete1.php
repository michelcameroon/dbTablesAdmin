<?php

$id  = $_POST['id'];
$tableName = $_POST['tableName'];

//echo "id $id<br >";

include_once("connect.php");
include_once ("config.php");


$sql = "DELETE FROM " . $tableName . " WHERE id = $id";

$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id, PDO::PARAM_INT);

$stmt->execute();

header('Location:index.php');


?>


