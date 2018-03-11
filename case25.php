<h1>Case 25</h1>
<script src="global-libs/jquery-2.1.3.js"></script>

<script>
	function loadAnotherLang()
	{
		var lang = document.getElementById("LANG").value;        
        $.post("<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>",
        {
          LANG: lang
        },
        function(data){
            document.write(data); 
            document.close();
        });
	}
</script>


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
		$lang = 'en'; 
	}
	include('includes/'.$lang.'.php'); 
?>

<div id="demo"></div>