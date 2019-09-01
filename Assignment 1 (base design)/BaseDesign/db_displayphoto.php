<?php

$dbConn = new PDO("mysql:host=localhost;dbname=classlabs", "root", "MySQL", $opt);

$sql = "SELECT * FROM product WHERE ProductID = 1";
$dbrs = $dbConn->prepare($sql);
$dbrs->execute();
$dbrow = $dbrs->fetch();

echo "Product image for : <p>";
echo "Product ID: " . $dbrow["ProductID"] . "<br>";
echo "Product Name: " . $dbrow["ProductName"] . "<br>";
echo "Product Category: " . $dbrow["ProductCategory"] . "<p>";

echo "<img src='data:image/jpeg;base64," . base64_encode( $dbrow["ProductPhoto"] ) . "'/>";

?>

