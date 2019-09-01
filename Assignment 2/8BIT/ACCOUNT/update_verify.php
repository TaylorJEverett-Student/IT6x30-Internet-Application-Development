<?php

    $dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
 							
    $ACCOUNT_ID = null;
    if ( !empty($_GET['id'])) {
        
        $ACCOUNT_ID = $_GET['id'];
    
    }
	
     
    if ( null==$ACCOUNT_ID ) {
        header("Location: /adminpage.php");
    }
     
    if ( !empty($_GET['id'])) {
        // keep track validation errors
        
        $ACCOUNT_EmailError = null;
        $ACCOUNT_Password = null;
         
        // keep track post values
        $ACCOUNT_Email = $_POST['ACCOUNT_Email'];
        $ACCOUNT_Password = $_POST['ACCOUNT_Password'];
		
        // validate input
        $valid = true;
                 
        if (empty($ACCOUNT_Email)) {
            $ACCOUNT_EmailError = 'Please enter Email Address';
            $valid = false;
        } else if ( !filter_var($ACCOUNT_Email,FILTER_VALIDATE_EMAIL) ) {
            $ACCOUNT_EmailError = 'Please enter a valid Email Address';
            $valid = false;
        }
         
        if (empty($ACCOUNT_Password)) {
            $ACCOUNT_Password = 'Please enter Password';
            $valid = false;
        }
         
        // update data
        if ($valid) {
			/*Keep or Change?*/
			$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
            /*UPDATE or ?/ set?*/
            $sql = "UPDATE ACCOUNT set ACCOUNT_Password = ?, ACCOUNT_Email = ? WHERE ACCOUNT_ID = ?";
            
			$dbrs = $dbConn->prepare($sql);
			$dbrs->execute(array($ACCOUNT_Password, $ACCOUNT_Email, $ACCOUNT_ID));
			/*Works but doesnt push to database?*/
			
            
            header("Location: /adminpage.php");
        }
		
    } else {
		$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
		
		$sql = "SELECT * FROM ACCOUNT ORDER BY ACCOUNT_ID";
		$dbrs = $dbConn->prepare($sql);
		$dbrs->execute();
		
        $ACCOUNT_Password = $dbrow['ACCOUNT_Password'];
        $ACCOUNT_Email = $dbrow['ACCOUNT_Email'];        
    }
?>