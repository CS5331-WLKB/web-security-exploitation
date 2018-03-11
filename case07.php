<html>
  <head>
    <link rel="stylesheet" href="res/css/case07.css" />
    <script>
      function startTimer(seconds) {
        seconds = parseInt(seconds) || 3;
        setTimeout(function() { 
          window.confirm("Times up!");
          window.history.back();
        }, seconds * 1000);
      }
    </script>
  </head>
 
  <body id="level4">
  	<h1>Case 07</h1>
  	<br/><br/>
  	<?php 
  		$cookie_name = 'Flag';
		$cookie_value = 'LetcGDnPxMUwb4b';
		setcookie($cookie_name, $cookie_value, time() + (86400 * 90), '/'); // 86400 = 1 day
	?>

  	<?php if (isset($_GET['timer'])) { ?>
		<img src="res/images/loading.gif" onload="startTimer('<?=$_GET['timer']?>');" />
		<br>
		<div id="message">Your alarm will ring in <?=$_GET['timer']?> seconds.</div>
	<?php } else { ?>
		<p><b>Web Count Down Timer application</b></p>
		<form action="" method="GET">
		    <input id="timer" name="timer" value="3">
			<input id="button" type="submit" value="Count down"> </form>
		</form>
  	<?php } ?>
  </body>
</html>