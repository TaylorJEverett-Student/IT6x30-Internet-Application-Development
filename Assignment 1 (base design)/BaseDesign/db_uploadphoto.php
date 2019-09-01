<?php

$uploaded_photo = file_get_contents ($_FILES["FileToUpload"]["tmp_name"]);

?>

<?php

$prodCat = "Cable";

$dbConn = new PDO("mysql:host=localhost;dbname=classlabs", "root", "MySQL", $opt);

$sql = "UPDATE product SET ProductPhoto = ? WHERE ProductCategory = ?";
$dbrs = $dbConn->prepare($sql);
$dbrs->execute(array($uploaded_photo, $prodCat));

$numrow = $dbrs->rowCount();
echo "There are $numrow row(s) affected" . "\n<br>";

?>

