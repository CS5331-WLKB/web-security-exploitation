<?php
	include_once 'includes/db_connect.php';
	define("TABLE1", "table4");
	$sql = "SELECT id,title, content FROM ".TABLE1;
	$result = $conn->query($sql);
	
	$error_message = "";
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
		if ( !empty($_POST['title']) and !empty($_POST['content']) ) {
			$title_value = $_POST['title'];
			$content_value = $_POST['content'];
			
			$query = $conn->prepare("INSERT INTO ".TABLE1."(title, content) VALUES (?, ?)");
			$query->bind_param("ss", $title_value, $content_value);
			$query->execute();
			header("Location: " . $_SERVER['REQUEST_URI']);
		}else{
			$error_message = "Please ensure both field is filled";
		}
	}
	
	if ( isset($_GET['delete'])) {
		if($_GET['delete'] == 'true'){
			$sql2 = "DELETE FROM ".TABLE1. " WHERE id > 1";
			$result2 = $conn->query($sql2);
			
			$sql3= "ALTER TABLE ".TABLE1." AUTO_INCREMENT = 1;";
			$result3 = $conn->query($sql3);
			header("Location: " . $_SERVER["PHP_SELF"]);
		}
		
	}
	$conn->close();
	
	$cookie_name = 'Flag';
	$cookie_value = '8YWbK6pFJZtTKx4';
	setcookie($cookie_name, $cookie_value, time() + (86400 * 90), '/'); // 86400 = 1 day
		
	
?>

<html>
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
	
	function sanitise(){
		var input = document.getElementById('title').value;
		input = safe_tags_replace(input); 
		document.getElementById('title').value = input;
		
		var input2 = document.getElementById('content').value;
		input2 = safe_tags_replace(input2); 
		document.getElementById('content').value = input2;
		
		document.getElementById("form_valid").submit();
	}
	
	</script>
	
	<body>
		<h1>Case 04</h1>
		<font color=red>[Note] To reset this page, visit "[url]?delete=true" </font><br/><br/>

		<h3>Guest Book</h3>
		<?php
			if ($result->num_rows > 0) {
		    	while($row = $result->fetch_assoc()) {
		        	echo $row["id"]. ". " . $row["title"]. "<br/>" . $row["content"]."\n";
					echo "<br/><br/><br/>\n\n";
		    	}
			} 
		?>
		
	
		<br/><br/><br/>
		<?php
			if(!empty($error_message)){
				echo "<font color='red'>".$error_message."</font>";
			}
		?>
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="form_valid" > 
			Enter your comments: 
			<table>
				<tr>
					<td width="20%">Title: </td>
					<td><input type="type" id="title" name="title" maxlength="10"/><br/><br/></td>
				</tr>
				
				<tr>
					<td>Message: </td>
					<td><textarea name="content" id="content" cols="50" rows="10"></textarea><br/><br/></td>
				</tr>
			</table>

			<input type="submit" onClick="sanitise()"/>
		</form>
		
		<br/>		
	</body>
</html>