<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Receiver</title>
</head>
<body>
	<?php 
			$cookie_name = 'Flag';
			$cookie_value = 'WA9Xy9dr2fpBd6w';
			setcookie($cookie_name, $cookie_value, time() + (86400 * 90), '/'); // 86400 = 1 day
	?>
	
	<script type="text/javascript" src="../global-libs/html-css-sanitizer-minified.js"></script>
	<script>
		window.onload = function() {
			var messageEle = document.getElementById('message');
			function receiveMessage(e) {
				if (e.origin !== "http://www.wsb.com")
					return;
					
				function urlX(url) { if(/^https?:\/\//.test(url)) { return url }}
      			function idX(id) { return id }
      			var sanitize_msg = html_sanitize(e.data, urlX, idX);
      			
				messageEle.innerHTML = "Message Received: " + eval(sanitize_msg);
			}
			window.addEventListener('message', receiveMessage);
		};
	</script>
	
	<h1>Message box </h1>
	<div id="message"></div>
</body>
</html>
