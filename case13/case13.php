<h1>Case 13</h1>
<script src="../global-libs/jquery-2.1.3.js"></script>
<script>
	function loadAnotherLang()
	{
		var lang = document.getElementById("LANG").value;
		window.location.replace("?LANG=" + lang);
	}
</script>


<select id="LANG" onchange="loadAnotherLang()">
  <option value="En">English</option>
  <option value="Fr">French</option>
  <option value="Jp">Japanese</option>
  <option value="Cn">Chinese</option>
</select>


<?php 
	if(isset($_GET['LANG']))
	{
		$lang = $_GET['LANG'];
	}
	else
	{
		$lang = 'En'; 
	}
	include($lang. '.php' ); 
?>

<div id="demo"></div>