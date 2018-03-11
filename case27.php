<html>
<body>
	<h1>Case 27</h1>
	
	<?php
		include_once 'global-libs/HTMLPurifier/HTMLPurifier.auto.php';
		$config = HTMLPurifier_Config::createDefault();
	    $purifier = new HTMLPurifier($config);
	
		$userid = 1; 
		if(isset($_GET['userid'])){
			$clean_userid = $purifier->purify($_GET["userid"]);
			if (is_numeric($clean_userid)){
				$userid = $clean_userid; 
			}else{
				$userid = -1; 
			}
		}else{
			$userid = 1; 
		}

        	
		if($userid==1){
			echo "Alice's profile page";
		}else if($userid==2){
			echo "Bob's profile page";
		}else if($userid==3){
			echo "Cat's profile page<br/>";
			echo "<b>The flag is zwPHRtruk8T6S5s </b>";
		}else{
			echo "No such user"; 
		}
	?>

</body>	
</html>