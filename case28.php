<html>
	<body>
		<h1>Case 28</h1>			
		
		<p>Online calculator:</p>
		<p>Example: </br>
			5 + 5 </br>
			1 - 101 </br>
			35 * 100000 </br>
			1 / 100000 </br>
			sin(5) 
		</p>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
			<input type="text" name="something" />
			<input type="submit" />
		</form>
		
		<?php 
			$flag = "The flag is QG3PwQjJmsNnQrx"; 
			if(isset($_GET['something'])){
				$targetAddress = "echo ".$_GET['something'].";"; 
				echo "<pre>".eval($targetAddress)."</pre>"; 
			}
		?>
	</body>
</html>


	

