<?php
    
    $dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
	
	//NEW
	$ADMIN_ID = 0;
     
    if ( !empty($_GET['id'])) {
        $ADMIN_ID = $_POST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $ADMIN_ID = $_POST['id'];
        
        // delete data
		
		$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
		
        $sql = "DELETE FROM ADMIN WHERE ADMIN_ID = ?";
        $dbrs = $dbConn->prepare($sql);
		$dbrs->execute(array($ADMIN_ID));
        header("Location: /adminpage.php");
         
    }
?>