<?php
session_start();

$con = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
	if(isset($_POST['submit']))
	{
		$errMsg = '';
		
		$ACCOUNT_Email = $_POST['Email'];
		$ACCOUNT_Password = $_POST['Password'];
		
		if($ACCOUNT_Email == ''){
			
			$errMsg = 'Enter your Email';
		}
		if($ACCOUNT_Password == ''){
		
			$errMsg = 'Enter password';
		}
		/*$dupe = mysql_query("SELECT * FROM ACCOUNT WHERE ACCOUNT_Email='$ACCOUNT_Email'") or die (mysql_error());
		$num_rows = mysql_num_rows($dupe);
			if ($num_rows > 0) {
			echo 'Error! Already on our database!';
			}
		else*/
			if($errMsg == '')
		{
			try
			{
				$insert = $con->prepare("INSERT INTO ACCOUNT (ACCOUNT_Email, ACCOUNT_Password)VALUES(:Email,:Password) ");
				$insert->execute(array('Email' => $ACCOUNT_Email, 'Password' => $ACCOUNT_Password));
		
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