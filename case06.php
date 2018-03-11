<?php session_start(); ?>
<html>
	<h1>Case 06</h1>
	<?php
		if($_SERVER["HTTPS"] != "on")
		{
		    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
		    exit();
		}
		
		$cookie_name = 'Flag';
		$cookie_value = 'S9vjABu3urWyZGU';
		setcookie($cookie_name, $cookie_value, time() + (86400 * 90), '/'); // 86400 = 1 day
		
	?>
	
	
	<body>
		Hello World! <br/> <br/>
		<script src="https://<?php echo $_SERVER["HTTP_HOST"] ?>/Assignment2/global-libs/jquery-2.1.3.js"></script>
		<img src="http://<?php echo $_SERVER["HTTP_HOST"] ?>/Assignment2/res/images/image.png"/>
	</body>
</html>
