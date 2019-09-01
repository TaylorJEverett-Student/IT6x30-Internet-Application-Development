<?php

$con = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");

$sql = "SELECT * FROM images WHERE IMAGES_ID =3";

$dbrs = $con->prepare($sql);
$dbrs->execute();
$dbrow = $dbrs->fetch();

//echo "Selected Image : <p>";
//echo "Image ID: " . $dbrow["IMAGES_ID"] . "<br>";
//echo "Image Name: " . $dbrow["IMAGES_caption"] . "<br>";
 
//echo "'data:image/jpeg;base64," . base64_encode( $dbrow["IMAGES_Img"] ."' ");
echo $dbrow["IMAGES_Img"];

?>

