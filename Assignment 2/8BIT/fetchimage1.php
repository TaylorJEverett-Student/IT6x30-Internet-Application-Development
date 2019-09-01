<?php

$con = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");

$sql = "SELECT * FROM images WHERE IMAGES_ID =1";

$dbrs = $con->prepare($sql);
$dbrs->execute();
$dbrow = $dbrs->fetch();

echo $dbrow["IMAGES_Img"];

?>

