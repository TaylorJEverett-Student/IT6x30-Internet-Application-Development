<?php
session_start();

include 'head.php';

include "navBar.php";

/* Notes 21600681
	No check for duplicates
*/
?>
	

<hr class="hide">
	<div class="cont_login" id="kakaoContent">
		<div id="cMain">
			<div id="mArticle">
			<!--Cover Image Needed add in common.css-->
			<?php include_once 'bgcover.php'; ?>
				
				
				<div class="detail_black">
					<h2 class="tit_detail" id="kakaoBody">CREATE YOUR ACCOUNT</h2>
					<p class="desc_login" style="color:#FFF">Join us on your next great happy adventure.</p>
					<center>
					<?php
					if (isset($_GET['status']))
					{
						if ($_GET['status'] == -1)
						{
							echo "<center><h3>Success you may now access Account</h3></center>";
						}
					}
					?>
					<form method="post" action="reg_verify.php">
					<input type="text" name="Email" placeholder="ex@Email.com"><br><br>
					<input type="password" name="Password" placeholder="**********"><br><br>
					<br><br>
					<input type="submit" name="submit" value="SIGN UP">
					</form>
					</center>

				</div>
						
				</div>
			
		<!-- // cMain -->
	</div>
	<!-- // kakaoContent -->
	<hr class="hide">
	
	

<?php
	include_once 'foot.php';
?>