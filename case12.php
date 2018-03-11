<h1>Case 12 </h1>
<br/>

<?php
if (!empty($_GET)) {
	$cookie_name = 'Flag';
	$cookie_value = 'ccCL2uX5L4kGU52';
	setcookie($cookie_name, $cookie_value, time() + (86400 * 90), '/'); // 86400 = 1 day
	
	echo "Your search term is:"; 
	echo $_GET["searchterm"];
}
?>

<script>
	var tagsToReplace = {
	    '&': '&amp;',
	    '<': '&lt;',
	    '>': '&gt;'
	};
	
	function replaceTag(tag) {
	    return tagsToReplace[tag] || tag;
	}
	
	function safe_tags_replace(str) {
	    return str.replace(/[&<>]/g, replaceTag);
	}
	
	function santise(){
		var input = document.getElementById('searchterm').value;
		input = safe_tags_replace(input); 
		document.getElementById('searchterm').value = input;
		document.getElementById("form_valid").submit();
	}
	
</script>

<form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>  method="get" id="form_valid">
 <input type="text" name="searchterm" id="searchterm" value="">
 <input type="submit" value="search" onClick="santise()">
</form>