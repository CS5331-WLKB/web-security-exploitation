<html>
<body>
	<h1>Case 01</h1>
	<?php
		include_once 'global-libs/HTMLPurifier/HTMLPurifier.auto.php';
		$config = HTMLPurifier_Config::createDefault();
	    $purifier = new HTMLPurifier($config);
	
		if (!empty($_POST)) {
			$clean_value = $purifier->purify($_POST["age"]);
			
			$input_error = FALSE; 
			if (is_numeric ( $clean_value)){
				if($clean_value >=0){
					$input_error = FALSE; 
				}else if($clean_value <=99){
					$input_error = FALSE; 
				}
				else{
					$input_error = TRUE; 
				}
			}
			else{
				$input_error = TRUE; 
			}
			
			if(!$input_error){
				echo "Your age is:"; 
				echo $clean_value;
				
				if($clean_value > 99 || $clean_value < 0){
					echo "<br/><b>The flag is 4sDSjkZ7gQ9WZGD</b>";
				}
				
			}else{
				echo "Input error"; 
			}
		}
	?>
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		Enter your age (0-99): <input type="text" name="age" maxlength="2" disabled=""/>
		
		<input type="submit" value="Submit" disabled=""/>
	</form>
	

</body>	
</html>