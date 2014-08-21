
<?php
	include('class/coinbaseRequest.php');
	if($_GET['buttonId']){
		$buttonId =	$_GET['buttonId'];
	}
	else{
		$buttonId = "0be348ad48b467f3512e51c88fab22a8";
	}
	$coinbase = new coinBaseRequest();
	$results = $coinbase->makeRequest("buttons/:". $buttonId ."/create_order", "post", false)
?>