<HTML>
	
	<h1>Case 05</h1>
	<body>
		<?php 
			$cookie_name = 'Flag';
			$cookie_value = 'zpxo92_fudiosnsi85h';
			setcookie($cookie_name, $cookie_value, time() + (86400 * 90), '/'); // 86400 = 1 day
		?>
		<h4>		
		Please rate this assignment on a scale from one ("terrible") to ten ("great").
		</h4>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="get"> 
			Score: <input type="text" name="score" />
	
			<input type="submit" value="ok"/>
		</form>


		<SCRIPT>
			eval('score = '+ decodeURIComponent(location.search).substring(1));
			if(score>=8){
				alert("Thanks for your praise!");
			}
			
		</SCRIPT>

		
	</body>
</HTML>
