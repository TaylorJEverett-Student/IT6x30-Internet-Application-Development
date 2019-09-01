<?php
	//Error naming of update_verify.php?
	//Error does not show id?
    $dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
 						
    $PRODUCT_ID = null;
    if ( !empty($_GET['id'])) {
        
        $PRODUCT_ID = $_GET['id'];
    
    }
	
     
    if ( null==$PRODUCT_ID ) {
        header("Location: /adminpage.php");
    }
     
    if ( !empty($_GET['id'])) {
        // keep track validation errors
        
        $PRODUCT_TypeError = null;
        $PRODUCT_TitleError = null;
        $PRODUCT_PriceError = null;
        $PRODUCT_VersionError = null;
         
        // keep track post values
        $PRODUCT_Type = $_POST['PRODUCT_Type'];
        $PRODUCT_Title = $_POST['PRODUCT_Title'];
        $PRODUCT_Price = $_POST['PRODUCT_Price'];
        $PRODUCT_Version = $_POST['PRODUCT_Version'];
		
        // validate input
        $valid = true;
                 
        if (empty($PRODUCT_Type)) {
            $PRODUCT_TypeError = 'Please enter Type';
            $valid = false;
        }     
        if (empty($PRODUCT_Title)) {
            $PRODUCT_TitleError = 'Please enter Title';
            $valid = false;
        }
		if (empty($PRODUCT_Price)) {
            $PRODUCT_PriceError = 'Please enter Price';
            $valid = false;
        }
		if (empty($PRODUCT_Version)) {
            $PRODUCT_VersionError = 'Please enter Version';
            $valid = false;
        }
         
        // update data
        if ($valid) {
			/*Keep or Change?*/
			$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
            /*UPDATE or ?/ set?*/
            $sql = "UPDATE PRODUCT set PRODUCT_Type = ?, PRODUCT_Title = ?, PRODUCT_Price = ?, PRODUCT_Version = ? WHERE PRODUCT_ID = ?";
            
			$dbrs = $dbConn->prepare($sql);
			$dbrs->execute(array($PRODUCT_Type, $PRODUCT_Title, $PRODUCT_Price, $PRODUCT_Version, $PRODUCT_ID));
			/*Works but doesnt push to database?*/
			
            
            header("Location: /adminpage.php");
        }
		
    } else {
		$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
		
		$sql = "SELECT * FROM PRODUCT ORDER BY PRODUCT_ID";
		$dbrs = $dbConn->prepare($sql);
		$dbrs->execute();
		
        $PRODUCT_Type = $dbrow['PRODUCT_Type'];
        $PRODUCT_Title = $dbrow['PRODUCT_Title'];        
        $PRODUCT_Price = $dbrow['PRODUCT_Price'];        
        $PRODUCT_Version = $dbrow['PRODUCT_Version'];        
    }
?>