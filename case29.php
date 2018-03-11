<html>
	<body>
		<?php 
			$cookie_name = 'Flag';
			$cookie_value = '42Ym92UA3uV8LVZ';
			setcookie($cookie_name, $cookie_value, time() + (86400 * 90), '/'); // 86400 = 1 day
		?>
		
		<h1>Case 29</h1>

		<form tag="form" method="get" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
			Address:
			<input type="text" name="secret2" value=""/>			
			<input type="hidden" name="secret" value="<?php echo (isset($_GET['secret']) ? $_GET['secret'] : ''); ?>" />
			
			<br/>
			<br/>

			<input type="submit" value="Submit" />
			<br/>
		</form>

	</body>
</html>