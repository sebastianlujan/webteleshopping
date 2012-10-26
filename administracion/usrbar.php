<?php 
	@session_start();
	$_SESSION['user']['username'] = "Diego2737";
	$username = $_SESSION['user']['username'];
?>
<ul id="contenedor-usrbar">
<li class="topbar-item" style="margin-right:10"><?php echo($username);?></li>
<li class="topbar-item" id="fle"><i class="icon-chevron-down" style="margin-top:0;margin-left:5"></i></li>
</ul>