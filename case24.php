<?php
	session_name("case24"); 
	session_start();
	include_once 'global-libs/HTMLPurifier/HTMLPurifier.auto.php';
	$config = HTMLPurifier_Config::createDefault();
	$purifier = new HTMLPurifier($config);
	
	include_once 'includes/db_connect.php';
	define("TABLE", "table24");
	
	if(isset($_GET['id'])){
		$id= $_GET['id']; 
		
		$query = "Select first_name, last_name FROM ".TABLE." WHERE id = '".$id."'";  
		$result = $conn->query($query);
		
		include_once 'includes/show_error.php';

		
	}
	
	
	if ( isset($_GET['delete'])) {
		if($_GET['delete'] == 'true'){
			$sql2 = "DELETE FROM ".TABLE. " WHERE id > 3";
			$result2 = $conn->query($sql2);
			
			$sql3= "ALTER TABLE ".TABLE." AUTO_INCREMENT = 1;";
			$result3 = $conn->query($sql3);
			header("Location: " . $_SERVER["PHP_SELF"]);
		}
		
	}
?>



		<h1>Case 24</h1>
		
		<h3>Search for user information via user id</h3> 
		<form action="" method="get">
		User id: 	<input type="search" name="id"  required = "required" /> <br/><br/>
		<input type="submit" />
		
		</form>
		
		<?php
			if (isset($result) and empty($clean_sqlerror)){
				if ($result->num_rows > 0) {
		    	while($row = $result->fetch_assoc()) {
		        	echo $row["first_name"]. ". " . $row["last_name"]. "<br/>" ;
					echo "<br/><br/><br/>\n\n";
		    		}
				} 
			}
			
		?>
		
		
