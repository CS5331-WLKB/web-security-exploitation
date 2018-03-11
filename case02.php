<HTML>
	
	<h1>Case 02</h1>
	<body>
		<?php 
			$cookie_name = 'Flag';
			$cookie_value = 'ken5xJ8Qc9MhjwD';
			setcookie($cookie_name, $cookie_value, time() + (86400 * 90), '/'); // 86400 = 1 day
		?>
		Bonjour 
		<SCRIPT>
			var pos = document.URL.indexOf("name=") + 5;
			if (pos != 4){
				document.write(unescape(document.URL.substring(pos, document.URL.length)));
			}
			
		</SCRIPT>
		<span id="container"></span>! Welcome to our system <br/><br/>
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get"> 
			Your name is: <input type="text" name="name" />
	
			<input type="submit" />
		</form>
	</body>
</HTML>