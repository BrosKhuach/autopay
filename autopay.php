<?php

$fp = new FaucetPay('fc50c1915d45b2729b965d535a00a813ef4451b4');
$method = $_GET['m'];

$fp->$method(
	$_GET, // An array of parameters without api_key
	true // Print test page
);

$response = $fp->send(
	array(
		"currency" => "TRX",
		"amount" => 0.00001,
		"to" => "lornsela86@gmail.com"
	)
);
print_r($response);

?>