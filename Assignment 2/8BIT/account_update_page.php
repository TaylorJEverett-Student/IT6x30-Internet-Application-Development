<?php
	session_start();
	
	if (isset($_SESSION['LoggedIn']))
	{
		if($_SESSION['LoggedIn'] == false)
		{
			header ('location: login.php');
		}
	}
	else
	{
		header ('location: login.php');
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
                        <h3>Update LOGIN INFO</h3>
                    </div>
             
                    <form class="form-horizontal" action="update_acc_verify.php?id=<?php echo $ACCOUNT_ID?>" method="post">
                      <div class="control-group <?php echo !empty($ACCOUNT_Password)?'error':'';?>">
                        <label class="control-label">Password</label>
                        <div class="controls">
                            <input name="ACCOUNT_Password" type="text"  placeholder="******" value="<?php echo !empty($ACCOUNT_Password)?$ACCOUNT_Password:'';?>">
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