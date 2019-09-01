<?php 
session_start();

include 'head.php';

include "navBar.php";
	
if (isset($_SESSION['LoggedInA']))
{
	if($_SESSION['LoggedInA'] == false)
	{
		header ('location: ACCOUNTlogin.php');
	}
}
else
{
	header ('location: ACCOUNTlogin.php');
}
	if ( !empty($_GET['id'])) {
        
        $ACCOUNT_ID = $_GET['id'];
    
    }

	?>
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Update a Account</h3>
                    </div>
             
                    <form class="form-horizontal" action="update_verify.php?id=<?php echo $ACCOUNT_ID?>" method="post">
                      <div class="control-group <?php echo !empty($ACCOUNT_Password)?'error':'';?>">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input name="ACCOUNT_Password" type="text"  placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($ACCOUNT_Password)): ?>
                                <span class="help-inline"><?php echo $ACCOUNT_Password;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($ACCOUNT_EmailError)?'error':'';?>">
                        <label class="control-label">Email Address</label>
                        <div class="controls">
                            <input name="ACCOUNT_Email" type="text" placeholder="Email Address" value="<?php echo !empty($ACCOUNT_Email)?$ACCOUNT_Email:'';?>">
                            <?php if (!empty($ACCOUNT_EmailError)): ?>
                                <span class="help-inline"><?php echo $ACCOUNT_EmailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="/adminpage.php">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>