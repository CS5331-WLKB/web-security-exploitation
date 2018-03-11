<h1>Case 03</h1>
<script src="../global-libs/jquery-2.1.3.js"></script>
<script>
	function loadAnotherLang(lang)
	{
		var lang = document.getElementById("LANG").value;        
        $.post("<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>",
        {
          LANG: lang + ".php"
        },
        function(data){
            document.write(data); 
            document.close();
        });
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
	if(isset($_POST['LANG']))
	{
		$lang = $_POST['LANG'];
	}
	else
	{
		$lang = 'en.php'; 
	}
	include($lang); 
?>

<div id="demo"></div>