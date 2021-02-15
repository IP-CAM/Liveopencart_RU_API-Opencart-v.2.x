<?php

$key = ''; // API KEY (The key specified on LiveOpenCart.ru in the author's settings)

include('liveopencart/api_msg.php');

$api_msg = new liveopencart\api_msg($key);
$data = $api_msg->getDecodedDataFromPost(); // We receive the request data

if ( $data ) {
	$answer = 'OK';
	
	// Perform all the necessary manipulations (we save the order information, generate keys, etc.)
	
	//$data->marketplace	//Trading platform identifier - LiveOpenCart
	//$data->order_id		//Order number
	//$data->order_status	//Order status (text)
	//$data->username		//Buyer name
	//$data->email			//Email buyer
	//$data->member_id		//Buyer ID on the trading platform
	//$data->date_added		//Data purchases
	//$data->extension_id	//Product ID in the shopping area
	//$data->extension		//Name add-on
	//$data->quantity		//amount
	//$data->total			//Income excluding commission
	//$data->domain 		//Domain where supplement will be installed
	//$data->test_domain 	//Test domain on the site development phase
	
} elseif ( $data === false ) {
	$answer = 'Wrong hash';
} else {
	$answer = 'Wrong request';
}

echo $api_msg->generateEncodedMsg($answer); // Return the answer


// An example of a possible saving API request statistics
//$log_file = 'api_client.txt';
//$f = fopen($log_file, 'a+');
//fwrite($f, '============== '.date('Y-m-d G:i:s').' =============='."\n");
//fwrite($f, print_r($_POST, true)."\n");
//fwrite($f, print_r($data, true)."\n");
//fwrite($f, $answer."\n");
//fclose($f);
