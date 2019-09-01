
<?php

$uploaded_photo = file_get_contents ($_FILES["FileToUpdate"]["tmp_name"]);


$con = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");

$sql = "UPDATE images SET IMAGES_Img = ?  WHERE IMAGES_ID = 2";

$dbrs = $con->prepare($sql);

$dbrs->execute(array($uploaded_photo));

$numrow = $dbrs->rowCount();

header('Location: /8BIT/updateimage.php');
?>
