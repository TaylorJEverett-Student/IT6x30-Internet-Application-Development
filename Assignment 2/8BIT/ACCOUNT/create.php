<?PHP
session_start();

include 'head.php';

include "navBar.php";
	
if (isset($_SESSION['LoggedInA']))
{
	if($_SESSION['LoggedInA'] == false)
	{
		header ('location: adminlogin.php');
	}
}
else
{
	header ('location: adminlogin.php');
}
?>
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Create Account</h3>
                    </div>
             
                    <form method="post" action="create_verify.php">
					<input type="text" name="Email" placeholder="Email Address"><br><br>
					<input type="password" name="Password" placeholder="Password"><br><br>
					<br><br>
					<input type="submit" name="submit" value="CREATE">
					<a class="btn_regist" href="/adminpage.php">No</a>
					</form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>