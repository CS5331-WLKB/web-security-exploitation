<!-- Adapted from DVWA v1.0.6 --> 
<html>
	<body>
		
		<h1>Case 08</h1>			
		<h4>Ping Utilities</h4>
		
		<p>Enter IP or URL:</p>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			<input type="text" maxlength="20" name="ip_url" />
			<input type="submit" />
		</form>
		
		<?php 
			if(isset($_POST['ip_url'])){
				
				$sub = array(
					'&&' => '', 
					';' =>"",
				);
				
				
				$targetAddress = $_POST['ip_url']; 
				$targetAddress = str_replace(array_keys($sub), $sub, $targetAddress);
				
				
				if (stristr(php_uname('s'), 'Windows NT')){
					$cmd = shell_exec('ping ' . $targetAddress );
				}else{
					$cmd = shell_exec('ping -c 4 ' . $targetAddress); 
				}					
				
				echo '<pre>'.$cmd.'</pre>'; 
			}
		?>
	</body>
</html>


	

