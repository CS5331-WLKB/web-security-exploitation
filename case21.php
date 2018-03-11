<h1>Case 21</h1>
	
<script>
	function loadAnotherLang(lang)
	{
		var lang = document.getElementById("LANG").value;
		window.location.replace("?LANG=" + lang + ".php");
	}
</script>

Select your language:
<select id="LANG" onchange="loadAnotherLang()">
  <option value="en">English</option>
  <option value="fr">French</option>
  <option value="jp">Japanese</option>
  <option value="cn">Chinese</option>
</select>


<?php 
	if(isset($_GET['LANG']))
	{
		$lang = $_GET['LANG'];
	}
	else
	{
		$lang = 'en.php'; 
	}
	include('includes/'.$lang); 
?>

<div id="demo"></div>