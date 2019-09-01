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
                        <h3>Create ARTICLE</h3>
                    </div>
					
                    <form method="post" action="create_verify.php">
					<input type="text" name="Title" placeholder="Title"><br><br>
					<input type="text" name="Category" placeholder="Category"><br><br>
					<input type="date" name="Date"><br><br>
					<input type="text" name="Message" placeholder="Message"><br><br>
					<br><br>
					<input type="submit" name="submit" value="CREATE">
					<a class="btn_regist" href="/adminpage.php">No</a>
					</form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>