<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<?php 
		@$receiver_path = "https://".$_SERVER[HTTP_HOST]."/Assignment2/case16/receiver.php"; 
	?>
	<script type="text/javascript" src="../global-libs/html-css-sanitizer-minified.js"></script>
	<script>
		window.onload = function() {
			var receiver = document.getElementById('receiver').contentWindow;
			var btn = document.getElementById('send');
		
			function sendMessage(e) {
				e.preventDefault();
				var msg = document.getElementById('msg').value;
				
				function urlX(url) { if(/^https?:\/\//.test(url)) { return url }}
      			function idX(id) { return id }
      			var sanitize_msg = html_sanitize(msg, urlX, idX);
				var format_msg = "\"" + sanitize_msg + "\""; //format before sending

				receiver.postMessage(format_msg, '<?php echo $receiver_path ?>');
			}
			btn.addEventListener('click', sendMessage);
	};
	
	</script>

</head>
<body>
	<h1>Case 16</h1>
	<h1>Send Message utility</h1>
		<font color=red>
		[Note to student] If you are unable to view the content in the box below, please manually visit https://www.wsb.com/Assignment2/case16/controller.php 
		<br/>Accept the certificate (For this assignment only!!! Do not casually accept self-signed cert when in the cyber world!) <br/>
		Finally, come back to this site again (non-https)
		</font>
	<p>
		<input type="text" id="msg" /></br>
		<button id="send">Send Message</button>
	</p>
	
	<iframe id="receiver" src="<?php echo $receiver_path ?>" width="400" height="200">
	  <p>Your browser does not support iframes.</p>
	</iframe>
	
</body>
</html>
