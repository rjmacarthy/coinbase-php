# Coinbase-PHP

A PHP implementation working with [Coinbase.com](http://www.coinbase.com/ "Coinbase.com")

# Usage

Enter your API details in Coinbase-PHP\classes\CoinbaseRequest.php

```
$apikey = "";
$apisecret = "";
```

Example:

To make a request for a new address:

```
<?php
	include('classes/Address.php');
	$address = new Address(); 
	$result = $address->GenerateNewAddress();
	var_dump($result);
?>
```






