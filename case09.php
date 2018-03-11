<html>
<head></head>
<body>
<h1>Case 09</h1>
	
<?php
$csrfToken = 'wkjdb-iouer-234k3-wklu3k';
if(isset($_POST['data']) and isset($_POST['csrf_token']) and
  $_POST['csrf_token'] == $csrfToken){
  echo "Successful post.<br/>";
  echo "Data: ".$_POST['data']; 
}
?>
<form action='' method='post'>
  <input type='text' name='data' value=''/>
  <input type='hidden' name='csrf_token' value='<?php echo $csrfToken; ?>'/>
  <input type='submit' name='submit' value='submit'/>
</form>
</body>
</html