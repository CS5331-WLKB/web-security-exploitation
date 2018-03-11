<!-- Adapted from DVWA v1.0.6 --> 
<html>
	<body>
		
		<h1>Case 31</h1>
			
		<h4>Check Server</h4>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<input type="hidden" name="cmd_url" value="netstat -an" />
			<input type="submit" value="Go" />
		</form>
		
		<?php 
			if(isset($_POST['cmd_url'])){
				
				$cmd = $_POST['cmd_url']; 
				
									
				$output = shell_exec($cmd);
				 
				echo '<pre>'.$output.'</pre>'; 
			}
		?>
	</body>
</html>


	

