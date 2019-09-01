<?php

$uploaded_photo = file_get_contents ($_FILES["FileToUpload"]["tmp_name"]);


$con = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");

$sql = "INSERT INTO images (IMAGES_Img) VALUES (?)";

$dbrs = $con->prepare($sql);

$dbrs->execute(array($uploaded_photo));

$numrow = $dbrs->rowCount();

echo "File added to database successfully" , "\n<br>";

header('Location: /8BIT/adminpage.php?Image Sent to Database');

?>


