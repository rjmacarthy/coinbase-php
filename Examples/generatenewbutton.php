<?php
	include('../classes/Button.php');
	$button = new Button();

	$button->name = "Buy Button";
    $button->type = "buy_now";
    $button->subscription = false;
    $button->price_string = "1";
    $button->price_currency_iso = "USD";
    $button->callback_url = "http://www.google.com";
    $button->description = "Buy button!";
    $button->type = "buy_now";
    $button->style = "custom_small";
    $button->include_email= false;

    $result = $button->GenerateNewButton();
?>