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

	$ARTICLE_ID = null;
    if ( !empty($_GET['id'])) {
        
        $ARTICLE_ID = $_GET['id'];
    
    }

	
										
										
	?>
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Update a ARTICLE <?php echo $ARTICLE_ID?></h3>
                    </div>
             
                    <form class="form-horizontal" action="update_verify.php?id=<?php echo $ARTICLE_ID?>" method="post">
                      <div class="control-group <?php echo !empty($ARTICLE_TitleError)?'error':'';?>">
                        <label class="control-label">TILE</label>
                        <div class="controls">
                            <input name="ARTICLE_Title" type="text"  placeholder="Title" value="<?php echo $dbrow['ARTICLE_Title']; ?>">
                            
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($ARTICLE_CategoryError)?'error':'';?>">
                        <label class="control-label">CATEGORY</label>
                        <div class="controls">
                            <input name="ARTICLE_Category" type="text" placeholder="Category" value="<?php echo !empty($ADMIN_Email)?$ADMIN_Email:'';?>">
                            <?php if (!empty($ARTICLE_Category)): ?>
                                <span class="help-inline"><?php echo $ADMIN_EmailError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
					  <div class="control-group <?php echo !empty($ARTICLE_DateError)?'error':'';?>">
                        <label class="control-label">DATE</label>
                        <div class="controls">
                            <input name="ARTICLE_Date" type="date" value="<?php echo !empty($ARTICLE_Date)?$ARTICLE_Date:'';?>">
                            <?php if (!empty($ARTICLE_Date)): ?>
                                <span class="help-inline"><?php echo $ARTICLE_DateError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
					  <div class="control-group <?php echo !empty($ARTICLE_MessageError)?'error':'';?>">
                        <label class="control-label">MESSAGE</label>
                        <div class="controls">
                            <input name="ARTICLE_Message" type="text"  placeholder="Message" value="<?php echo !empty($ARTICLE_Message)?$ARTICLE_Message:'';?>">
                            <?php if (!empty($ARTICLE_Message)): ?>
                                <span class="help-inline"><?php echo $ARTICLE_MessageError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Update</button>
                          <a class="btn" href=" /adminpage.php"">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>