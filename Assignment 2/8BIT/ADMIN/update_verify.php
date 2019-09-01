<?php

    $dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
 							
    $ADMIN_ID = null;
    if ( !empty($_GET['id'])) {
        
        $ADMIN_ID = $_GET['id'];
    
    }
	
     
    if ( null==$ADMIN_ID ) {
        header("Location: /adminpage.php");
    }
     
    if ( !empty($_GET['id'])) {
        // keep track validation errors
        
        $ADMIN_EmailError = null;
        $ADMIN_Password = null;
         
        // keep track post values
        $ADMIN_Email = $_POST['ADMIN_Email'];
        $ADMIN_Password = $_POST['ADMIN_Password'];
		
        // validate input
        $valid = true;
                 
        if (empty($ADMIN_Email)) {
            $ADMIN_EmailError = 'Please enter Email Address';
            $valid = false;
        } else if ( !filter_var($ADMIN_Email,FILTER_VALIDATE_EMAIL) ) {
            $ADMIN_EmailError = 'Please enter a valid Email Address';
            $valid = false;
        }
         
        if (empty($ADMIN_Password)) {
            $ADMIN_Password = 'Please enter Password';
            $valid = false;
        }
         
        // update data
        if ($valid) {
			/*Keep or Change?*/
			$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
            /*UPDATE or ?/ set?*/
            $sql = "UPDATE ADMIN set ADMIN_Password = ?, ADMIN_Email = ? WHERE ADMIN_ID = ?";
            
			$dbrs = $dbConn->prepare($sql);
			$dbrs->execute(array($ADMIN_Password, $ADMIN_Email, $ADMIN_ID));
			/*Works but doesnt push to database?*/
			
            
            header("Location: /adminpage.php");
        }
		
    } else {
		$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
		
		$sql = "SELECT * FROM ADMIN ORDER BY ADMIN_ID";
		$dbrs = $dbConn->prepare($sql);
		$dbrs->execute();
		
        $ADMIN_Password = $dbrow['ADMIN_Password'];
        $ADMIN_Email = $dbrow['ADMIN_Email'];        
    }
?>