<?php
	include('CoinbaseRequest.php');

	class Address { 

		public function GenerateNewAddress (){
			$coinbase = new coinBaseRequest();
			$result = $coinbase->MakeRequest("account/generate_receive_address", "post", false);
			return $result;
		}

		public function GetAccountAddresses (){
			$coinbase = new coinBaseRequest();
			$results = $coinbase->MakeRequest("addresses", "get", false);
			return $result;
		}

	}
?>