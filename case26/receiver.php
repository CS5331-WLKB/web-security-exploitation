<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Receiver</title>
</head>
<body>
	<script type="text/javascript" src="../global-libs/html-css-sanitizer-minified.js"></script>
	<script>
		window.onload = function() {
			var messageEle = document.getElementById('message');
			var messageEle2 = document.getElementById('message2');

			function receiveMessage(e) {
				if (e.origin !== "http://www.wsb.com")
					messageEle2.innerHTML = "The flag is jAGGZuEpvQ77Ekd " ;
				
				function urlX(url) { if(/^https?:\/\//.test(url)) { return url }}
      			function idX(id) { return id }
      			var sanitize_msg = html_sanitize(e.data, urlX, idX);
      			
				messageEle.innerHTML = "Message Received: " + e.data;
			}
			window.addEventListener('message', receiveMessage);
		};
	</script>
	
	<h1>Message box </h1>
	<div id="message"></div>
	<div id="message2"</div>
</body>
</html>
