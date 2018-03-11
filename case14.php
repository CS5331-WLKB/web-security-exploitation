<h1>Case 14</h1>

<?php 

	include_once 'global-libs/HTMLPurifier/HTMLPurifier.auto.php';
	$config = HTMLPurifier_Config::createDefault();
	$purifier = new HTMLPurifier($config);
	
	$bankMoney = 10000; 
	
	if(isset($_GET['payee'])  && isset($_GET['sum'])){
		$payee = $_GET['payee']; 
		$sum = $_GET['sum'];
		$clean_payee = $purifier->purify($payee);
		$clean_sum = $purifier->purify($sum);
		
		if (Is_numeric($sum)){
			$bankMoney = $bankMoney - $clean_sum; 
			echo "Paid <b>".$clean_payee. "</b> $".$sum."<br/>"; 
			
			if ($_GET['payee'] != 'alice' || $_GET['sum'] != '10'){
				echo "The flag is EfTj7BxYg2ywfeD<br/>";
			}
		}else{
			echo "error. Not a number. <br/><br/>"; 
		}
	}
	
	echo "My bank account has $".$bankMoney; 
?>

<br/><br/>
<?php 
if(!isset($_GET['payee'])  || !isset($_GET['sum'])){
?>
	To pay alice for a sum of $10.00, click <a href="?payee=alice&sum=10">here</a> 
<?php
}
?>