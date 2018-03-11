<h1>Case 10</h1>

<script>
	function redirect()
	{
		window.location.replace("?redirect=case10-2.php");
	}
	
	setTimeout("redirect()",5000)
</script>

<?php 
	if(isset($_GET['redirect'])){
		$redirect_url = $_GET['redirect']; 
		header("Location: " . $redirect_url); 
	}
?>

<div id="demo">This page is obsolete. You will be redirected in 5 seconds. </div>