<h1>Case 18</h1>
<script src="../global-libs/jquery-2.1.3.js"></script>
<script>
	function loadAnotherLang()
	{
		var lang = document.getElementById("LANG").value;
		window.location.replace("?LANG=" + lang);
	}
</script>

<?php 
	if(isset($_GET['LANG'])){
		$redirect_url = $_GET['LANG']; 
		header("Location: " . $redirect_url); 
	}
?>

<select id="LANG" onchange="loadAnotherLang()">
  <option value="en.php">English</option>
  <option value="fr.php">French</option>
  <option value="jp.php">Japanese</option>
  <option value="cn.php">Chinese</option>
</select>

<div id="demo"></div>