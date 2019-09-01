<?php

if (isset($_SESSION['LoggedIn']))
{
	$isLoggedIn = $_SESSION['LoggedIn'];
}
elseif (isset($_SESSION['LoggedInA']))
{
	$isLoggedInA = $_SESSION['LoggedInA'];
}
else
{
	$isLoggedIn = false;
	$isLoggedInA = false;
}

?>

<div class="inner_head">
				
<ul class="gnb_comm">
			

<li>
<a href="index.php" class="link_gnb">HOME<span class="img_8bit ico_arr"></span></a>
</li>

<li>
<a href="news.php" class="link_gnb">NEWS<span class="img_8bit ico_arr"></span></a>
</li>


<div id="login"style="float:right;margin-right:10px">

<li>
<?php
if ($isLoggedIn) 
	{ 
		echo '<a href="account.php" class="link_gnb">Account<span class="img_8bit ico_arr"></span></a>';
	}
elseif ($isLoggedInA)
	{ 
		echo '<a href="adminpage.php" class="link_gnb">ADMIN PANEL<span class="img_8bit ico_arr"></span></a>';
	}
else
	{ 
		echo '<a href="register.php" class="link_gnb">Register<span class="img_8bit ico_arr"></span></a>';
	}
?>
</li>


<li>		
<?php
if ($isLoggedIn or $isLoggedInA) 
	{ 
		echo '<a href="logout.php" class="link_gnb">LOGOUT<span class="img_8bit ico_arr"></span></a>';
	}
	else
	{ 
		echo '<a href="login.php" class="link_gnb">LOGIN<span class="img_8bit ico_arr"></span></a>';
	}
?>
</li>

<li><a href="buyform.php" class="">
<span class="btn_regist" style="margin-top:12%;">BUY NOW</span></a></li>
</div>
</div>	

</ul>
</div>
