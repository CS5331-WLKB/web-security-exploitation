<!-- Adapted from DVWA v1.0.6 --> 
<html>
	<body>
		<h1>Case 30</h1>			
		<h2>Ping utility</h2>
		<p>Enter host or url :</p>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get">
			<input type="text" name="url" />
			<input type="submit" />
		</form>
		
		<?php 
			$flag = "<b>The flag is raFvT7ER27j82BE</b>"; 
			if(isset($_GET['url'])){
					
					$targetAddress = $_GET['url']; 
					
					if (stristr(php_uname('s'), 'Windows NT')){
						$cmd = $targetAddress;
					}else{
						$cmd = '-c 4 ' . $targetAddress; 
					}					
					
					echo 'command: ping '.$cmd; 
					$tranform_cmd = "system(\"ping ".$cmd."\");";
					echo "<pre>".eval($tranform_cmd)."</pre>";
			}
			 ?>
	</body>
</html>


	

