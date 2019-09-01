<?php
session_start();

$con = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
	if(isset($_POST['submit']))
	{
		$errMsg = '';
		
		$ARTICLE_Title = $_POST['Title'];
		$ARTICLE_Category = $_POST['Category'];
		$ARTICLE_Date = $_POST['Date'];
		$ARTICLE_Message = $_POST['Message'];
		
		if($ARTICLE_Title == ''){
			
			$errMsg = 'Enter your Title';
		}
		if($ARTICLE_Category == ''){
		
			$errMsg = 'Enter Category';
		}	
		if($ARTICLE_Date == ''){
		
			$errMsg = 'Enter Date';
		}
		if($ARTICLE_Message == ''){
		
			$errMsg = 'Enter Message';
		}	
		/*$dupe = mysql_query("SELECT * FROM NEWS WHERE ARTICLE_Title='$ARTICLE_Title'") or die (mysql_error());
		$num_rows = mysql_num_rows($dupe);
			if ($num_rows > 0) {
			echo 'Error! Already on our database!';
			}
		else*/
		if($errMsg == '')
		{
			try
			{
				$insert = $con->prepare("INSERT INTO NEWS (ARTICLE_Title, ARTICLE_Category, ARTICLE_Date, ARTICLE_Message)VALUES(:Title,:Category,:Date,:Message) ");
				$insert->execute(array('Title' => $ARTICLE_Title, 'Category' => $ARTICLE_Category, 'Date' => $ARTICLE_Date, 'Message' => $ARTICLE_Message));
		
				header('Location: /adminpage.php');
			}
			catch(PDOException $e) 
			{
				echo $e->getMessage();
			}		
		}	
		else
		{		
			header('Location: /adminpage.php');
		}
	}