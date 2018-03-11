<html>
<body>
	<h1>Case 11 </h1>

	<?php
		include_once 'global-libs/HTMLPurifier/HTMLPurifier.auto.php';
		$config = HTMLPurifier_Config::createDefault();
	    $purifier = new HTMLPurifier($config);
	
		if (!empty($_POST)) {
			$clean_qty = $purifier->purify($_POST["qty"]);
			$clean_price = $purifier->purify($_POST["Price"]);
			
			$process_error = FALSE;
			if(is_numeric ( $clean_qty) && is_numeric ( $clean_price)){
				if($clean_qty <= 0 || $clean_qty > 10){
					$process_error = TRUE;
				}
				
				if($clean_price < 0){
					$process_error = TRUE;
				}
			}else{
				$process_error = TRUE; 
			}

			if ($process_error == TRUE){
				echo "Your purchase did not go through. Invalid parameter is received"; 
			}else{
				$bank = 10 - ($clean_price*$clean_qty); 
				if($bank >= 0){
					echo "You have completed your purchase. You are left with: ".$bank; 
					echo "<br/>";
					echo "You have purchase ".$clean_qty."  <b>Toy Car</b> at the cost of $".$clean_price. " each.";
					echo "<br/>";
					echo "<br/>";
					echo "<b>flag=mbyXZMR3Km6BzuH</b>";
				}else{
					echo "Your purchase did not go through. You are broke!"; 
				}
			}
		}
	?>
	<br/><br/>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		You bank balance before today is $10.00<br/><br/>
		Please confirm your purchase:<br/>

		Toy Car $2999.00 each<br/>
		<br/>Qty (max 10): <input type="number" name="qty" min="0" max="10" step="1" value="1"/><br/>

		
		<input name='Price' type='HIDDEN' value='2999'><br>
		<input type="submit" value="Submit"/>
	</form>
	

</body>	
</html>