<?php
    
    $dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
	
	//NEW
	$ACCOUNT_ID = 0;
     
    if ( !empty($_GET['id'])) {
        $ACCOUNT_ID = $_POST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $ACCOUNT_ID = $_POST['id'];
        
        // delete data
		
		$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
		
        $sql = "DELETE FROM ACCOUNT WHERE ACCOUNT_ID = ?";
        $dbrs = $dbConn->prepare($sql);
		$dbrs->execute(array($ACCOUNT_ID));
        header("Location: /adminpage.php");
         
    }
?>