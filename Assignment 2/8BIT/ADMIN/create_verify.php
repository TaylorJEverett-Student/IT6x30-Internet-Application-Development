<?php
session_start();

$con = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
	if(isset($_POST['submit']))
	{
		$errMsg = '';
		
		$ADMIN_Email = $_POST['Email'];
		$ADMIN_Password = $_POST['Password'];
		
		if($ADMIN_Email == ''){
			
			$errMsg = 'Enter your Email';
		}
		if($ADMIN_Password == ''){
		
			$errMsg = 'Enter password';
		}
		/*$dupe = mysql_query("SELECT * FROM ADMIN WHERE ADMIN_Email='$ADMIN_Email'") or die (mysql_error());
		$num_rows = mysql_num_rows($dupe);
			if ($num_rows > 0) {
			echo 'Error! Already on our database!';
			}
		else*/
		if($errMsg == '')
		{
			try
			{
				$insert = $con->prepare("INSERT INTO ADMIN (ADMIN_Email, ADMIN_Password)VALUES(:Email,:Password) ");
				$insert->execute(array('Email' => $ADMIN_Email, 'Password' => $ADMIN_Password));
		
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