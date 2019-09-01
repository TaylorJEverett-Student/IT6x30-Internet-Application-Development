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

	$PRODUCT_ID = null;
    if ( !empty($_GET['id'])) {
        
        $PRODUCT_ID = $_GET['id'];
    
    }
	?>
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Update a PRODUCT</h3>
                    </div>
					<!--Error naming of update_verify.php?-->
                    <form class="form-horizontal" action="update_verify.php?id=<?php echo $PRODUCT_ID?>" method="post">
                      <div class="control-group <?php echo !empty($PRODUCT_TypeError)?'error':'';?>">
                        <label class="control-label">TYPE</label>
                        <div class="controls">
                            <input name="PRODUCT_Type" type="text"  placeholder="Type" value="<?php echo !empty($PRODUCT_Type)?$PRODUCT_Type:'';?>">
                            <?php if (!empty($PRODUCT_Type)): ?>
                                <span class="help-inline"><?php echo $PRODUCT_TypeError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($PRODUCT_TitleError)?'error':'';?>">
                        <label class="control-label">TITLE</label>
                        <div class="controls">
                            <input name="PRODUCT_Title" type="text" placeholder="Title" value="<?php echo !empty($ADMIN_Email)?$ADMIN_Email:'';?>">
                            <?php if (!empty($PRODUCT_Title)): ?>
                                <span class="help-inline"><?php echo $PRODUCT_EmailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
					  <div class="control-group <?php echo !empty($PRODUCT_PriceError)?'error':'';?>">
                        <label class="control-label">PRICE</label>
                        <div class="controls">
                            <input name="PRODUCT_Price" type="number" step="any" value="<?php echo !empty($PRODUCT_Price)?$PRODUCT_Price:'';?>">
                            <?php if (!empty($PRODUCT_Price)): ?>
                                <span class="help-inline"><?php echo $PRODUCT_PriceError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
					  <div class="control-group <?php echo !empty($PRODUCT_VersionError)?'error':'';?>">
                        <label class="control-label">Version</label>
                        <div class="controls">
                            <input name="PRODUCT_Version" type="text"  placeholder="Version" value="<?php echo !empty($PRODUCT_Version)?$PRODUCT_Version:'';?>">
                            <?php if (!empty($PRODUCT_Version)): ?>
                                <span class="help-inline"><?php echo $PRODUCT_VersionError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href="/8BIT/adminpage.php"">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>