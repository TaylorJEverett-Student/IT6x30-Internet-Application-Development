<?php
	
    $dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
 							
    $ARTICLE_ID = null;
    if ( !empty($_GET['id'])) {
        
        $ARTICLE_ID = $_GET['id'];
    
    }
	
     
    if ( null==$ARTICLE_ID ) {
        header("Location: /adminpage.php");
    }
     
    if ( !empty($_GET['id'])) {
        // keep track validation errors
        
        $ARTICLE_TitleError = null;
        $ARTICLE_CategoryError = null;
        $ARTICLE_DateError = null;
        $ARTICLE_MessageError = null;
	
        // keep track post values
        $ARTICLE_Title = $_POST['ARTICLE_Title'];
        $ARTICLE_Category = $_POST['ARTICLE_Category'];
        $ARTICLE_Date = $_POST['ARTICLE_Date'];
        $ARTICLE_Message = $_POST['ARTICLE_Message'];
		
        // validate input
        $valid = true;
                 
        if (empty($ARTICLE_Title)) {
            $ARTICLE_TitleError = 'Please enter Title';
            $valid = false;
        }    
        if (empty($ARTICLE_Category)) {
            $ARTICLE_CategoryError = 'Please enter Category';
            $valid = false;
        }
		if (empty($ARTICLE_Date)) {
            $ARTICLE_DateError = 'Please enter Date';
            $valid = false;
        }
		if (empty($ARTICLE_Message)) {
            $ARTICLE_MessageError = 'Please enter Message';
            $valid = false;
        }
         
        // update data
        if ($valid) {
			/*Keep or Change?*/
			$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
            /*UPDATE or ?/ set?*/
            $sql = "UPDATE NEWS set ARTICLE_Title = ?, ARTICLE_Category = ?, ARTICLE_Date = ?, ARTICLE_Message = ?
			WHERE ARTICLE_ID = ?";
            
			$dbrs = $dbConn->prepare($sql);
			$dbrs->execute(array($ARTICLE_Title, $ARTICLE_Category, $ARTICLE_Date, $ARTICLE_Message, $ARTICLE_ID));
			/*Works but doesnt push to database?*/
			
            
            header("Location: /adminpage.php");
        }
		
    } else {
		$dbConn = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
		
		$sql = "SELECT * FROM NEWS ORDER BY ARTICLE_ID";
		$dbrs = $dbConn->prepare($sql);
		$dbrs->execute();
		
        $ARTICLE_Title = $dbrow['ARTICLE_Title'];
        $ARTICLE_Category = $dbrow['ARTICLE_Category'];        
        $ARTICLE_Date = $dbrow['ARTICLE_Date'];        
        $ARTICLE_Message = $dbrow['ARTICLE_Message'];
		header("Location: /adminpage.php");
    }
?>