<?php

session_start();

include 'head.php';

include "navBar.php";


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


	?>



<body>

<hr class="hide">
	<div class="cont_account" id="kakaoContent">
		<div id="cMain">
			<div id="mArticle">
				<?php include_once 'bgcover.php'; ?>
				<div class="detail_black">
					<div class="wrap_tit">
						<h2 class="tit_detail" id="kakaoBody"><span class="img_black"></span>ACCOUNT</h2>
					</div>
					<h3 class="tit_group"><span class="img_black ico_account"></span>ACCOUNT INFO</h3>
					<div class="group_detail group_account">
						<dl class="list_regist">
							<dt>LOGIN INFO</dt>
							
							<form method="post" action="account_update_page.php">
							<dd> <?php echo $_SESSION['Email'];	?> </dd>
							<dd><input type="submit" name="change_email" value="CHANGE INFO"></dd>
							
						</dl>
						<dl class="list_regist">
							<dt>GAME ACCESS</dt>
							<dd>
																				<span>TRY FOR FREE (7 DAYS) (EXPIRATION DATE : <span  class="txt_time">1521772600</span>)</span>
																				<a href="buyform.php" class="btn_regist">BUY NOW</a>
																									
																
							</dd>
						</dl>
						<dl class="list_regist">
							<dt>GREEN CASH</dt>
							<dd><span class="txt_num">0</span> Cash</dd>
						</dl>
						
						
					</div>
					<a class="anchor" id="screenshotupload"></a>
					<h3 class="tit_group"><span class="img_black ico_newsletter"></span>SCREENSHOT UPLOAD</h3>
					<div class="group_detail group_newsletter">
					<dl class="list_regist">
						
						<dt>UPLOAD</dt>
						<form onmouseover="" style="cursor: pointer;" action="uploadfile.php" method="post" enctype="multipart/form-data">
						<input type="file" name="FileToUpload" style="background-color:#4e8064;cursor: pointer;">
						<input type="submit" value="Upload Image" name="submit" style="background-color:#4e8064;cursor: pointer;">
						</form>
					</dl>
					</div>
					
					
					<a class="anchor" id="history"></a>
					<h3 class="tit_group"><span class="img_black ico_history"></span>PURCHASE HISTORY</h3>
					<div class="group_detail group_history">
						<strong class="screen_out">Purchase Tab Menu</strong>
						<ul class="list_tab">
							<li class="on">
								<a class="link_tab" data-target="cashHistory" href="javascript:;">Game Purchase</a>
							</li>
							
						</ul>
						<!--PHP JS SQL FUNTION NEEDED GET PAYMENT HISTORY FROM DB-->
						<ul id="cashHistory" class="list_item" style="display:block;">
															<div class="none_data">
									<span class="img_black"></span>No purchase history
								</div>
													</ul>
						
					</div>
				</div>
			</div><!--// mArticle -->
			
		</div><!-- // cMain -->
	</div><!-- // kakaoContent -->
	
<div class="bot">	
	<center>
           <b>&copy;8-Bit Game 2018. All rights reserved.</b>

</div>
<div style="background-color: #fff; border: 1px solid #ccc; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.2); position: absolute; left: 0px; top: -10000px; transition: visibility 0s linear 0.3s, opacity 0.3s linear; opacity: 0; visibility: hidden; z-index: 2000000000;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: #fff; opacity: 0.05;  filter: alpha(opacity=5)"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0; height: 0; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0; height: 0; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="bframe.htm" style="width: 100%; height: 100%;" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" name="3obl0eddig8" frameborder="0"></iframe></div></div></body></html><!--21600681-->