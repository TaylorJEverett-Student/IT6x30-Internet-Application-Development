<?php
    
    $dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
	
	//NEW
	$ARTICLE_ID = 0;
     
    if ( !empty($_GET['id'])) {
        $ARTICLE_ID = $_POST['id'];
    }
     
    if ( !empty($_POST)) {
        // keep track post values
        $ARTICLE_ID = $_POST['id'];
        
        // delete data
		
		$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
		
        $sql = "DELETE FROM NEWS WHERE ARTICLE_ID = ?";
        $dbrs = $dbConn->prepare($sql);
		$dbrs->execute(array($ARTICLE_ID));
        header("Location: /adminpage.php");
         
    }
?>