<html>
<body>
	<?php
		$cookie_name = 'Flag';
		$cookie_value = 'xAAy5Uvs9Stw7KZ';
		setcookie($cookie_name, $cookie_value, time() + (86400 * 90), '/'); // 86400 = 1 day
	?>
	
	
	<h1>Case 15</h1>
	<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>  method="get">
	 Enter video link:<br/><br/>
	 <input type="text" name="videourl" value="">
	 <input type="submit" name="Display" value="Display ">
	</form>
	
	
	
	<?php if (isset($_GET['videourl'])) { ?>	    
	<video>
		<source src="<?=$_GET['videourl']?>">
	</video>
  	<?php } ?>
</body>
</html>