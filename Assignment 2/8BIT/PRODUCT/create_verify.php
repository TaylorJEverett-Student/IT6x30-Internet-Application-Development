<?php
session_start();

$con = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
	if(isset($_POST['submit']))
	{
		$errMsg = '';
		
		$PRODUCT_Type = $_POST['Type'];
		$PRODUCT_Title = $_POST['Title'];
		$PRODUCT_Price = $_POST['Price'];
		$PRODUCT_Version = $_POST['Version'];
		
		if($PRODUCT_Type == ''){
			
			$errMsg = 'Enter your Type';
		}
		if($PRODUCT_Type == ''){
		
			$errMsg = 'Enter Title';
		}
		if($PRODUCT_Price == ''){
		
			$errMsg = 'Enter Price';
		}
		if($PRODUCT_Version == ''){
		
			$errMsg = 'Enter Version';
		}	
		/*$dupe = mysql_query("SELECT * FROM PRODUCT WHERE PRODUCT_Title='$PRODUCT_Title'") or die (mysql_error());
		$num_rows = mysql_num_rows($dupe);
			if ($num_rows > 0) {
			echo 'Error! Already on our database!';
			}
		else*/
		if($errMsg == '')
		{
			try
			{
				$insert = $con->prepare("INSERT INTO PRODUCT (PRODUCT_Type, PRODUCT_Title, PRODUCT_Price, PRODUCT_Version)VALUES(:Type,:Title,:Price,:Version) ");
				$insert->execute(array('Type' => $PRODUCT_Type, 'Title' => $PRODUCT_Title, 'Price' => $PRODUCT_Price, 'Version' => $PRODUCT_Version));
		
				header('Location: /adminpage.php');
			}
			catch(PDOException $e)
			{
				echo $e->getVersion();
			}		
		}	
		else
		{		
			header('Location: /adminpage.php');
		}
	}