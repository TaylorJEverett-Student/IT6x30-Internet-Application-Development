<?php
    
    $dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
	
	//NEW
	$PRODUCT_ID = 0;
     
    if ( !empty($_GET['id'])) {
        $PRODUCT_ID = $_POST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $PRODUCT_ID = $_POST['id'];
        
        // delete data
		
		$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
		
        $sql = "DELETE FROM PRODUCT WHERE PRODUCT_ID = ?";
        $dbrs = $dbConn->prepare($sql);
		$dbrs->execute(array($PRODUCT_ID));
        header("Location: /adminpage.php");
         
    }
?>