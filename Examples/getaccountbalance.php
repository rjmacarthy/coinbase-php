<?php
	include('../classes/Account.php');
	$account = new Account(); 
	$result = $account->GetAccountBalanceById(1);
?>