<?php 
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

$ACCOUNT_ID = null;
    if ( !empty($_GET['id'])) {
        
        $ACCOUNT_ID = $_GET['id'];
    
    }
?>
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Delete a ACCOUNT WITH <?php echo $_GET['id'] ;?></h3>
						
                    </div>
                     
                    <form class="form-horizontal" action="delete_verify.php" method="post">
                      <input type="hidden" name="id" value="<?php echo $_GET['id'] ;?>"/>
                      <p class="alert alert-error">Are you sure to delete ?</p>
                      <div class="form-actions">
                          <button type="submit" class="btn_regist">Yes</button>
                          <a class="btn_regist" href="/adminpage.php">No</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>