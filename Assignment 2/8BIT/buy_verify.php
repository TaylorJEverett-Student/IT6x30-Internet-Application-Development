<?php
session_start();


$con = new PDO("mysql:host=localhost;dbname=21600681", "21600681", "21600681");
try{
	
		if(isset($_POST['submit'])){
			$ORDERS_CreiditCard = $_POST['cardNum'];
			$ORDERS_NameOnCard = $_POST['cardName'];
			$ORDERS_ExpiryDate = $_POST['cardExp'];
			$ORDERS_SecurityNumber = $_POST['cardSec'];
	
			$insert = $con->prepare("INSERT INTO ORDERS (ORDERS_CreiditCard, ORDERS_NameOnCard, ORDERS_ExpiryDate, ORDERS_SecurityNumber)
			VALUES(:cardNum,:cardName,:cardExp,:cardSec) ");
			$insert->execute(array('cardNum' => $ORDERS_CreiditCard, 'cardName' => $ORDERS_NameOnCard, 'cardExp' => $ORDERS_ExpiryDate, 'cardSec' => $ORDERS_SecurityNumber));
			header("Location: /8BIT/account.php?Purchased");
		}
	}

catch(PDOException $e){
	echo "error".$e->getMessage();
}

?>