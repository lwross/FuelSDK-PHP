<?php

require('ET_Client.php');

use Minishlink\WebPush\WebPush;

try {	
		$myclient = new ET_Client();

		$DataExtensionNameForTesting = "PHPSDKTestDE";

			
		// Add a row to a DataExtension 
		$request_body = file_get_contents('php://input');
		$request_data = json_decode($request_body);
		//var_dump($request_data);
		$subscriptionId = $request_data->id;
		$firstName = $request_data->firstName;
		$lastName = $request_data->lastName;
		$email = $request_data->email;
		//print_r($subscriptionId);
		//die();

		$authKey = $request_data->subscription->keys->auth;
		$p256dhKey = $request_data->subscription->keys->p256dh;
		$subscription = $request_data->subscription;

		print_r("Add a row to a DataExtension  \n");
		$postDRRow = new ET_DataExtension_Row();
		$postDRRow->authStub = $myclient;
		$postDRRow->props = array("Key" => "PHPSDKTEST", 
								  "SubscriptionID" => $subscriptionId, 
								  "SubscriberKey" => $email,
								  "FirstName" => $firstName,
								  "LastName" => $lastName,
								  "EmailAddress" => $email,
								  "AuthKey" => $authKey,
								  "p256dhKey" => $p256dhKey,
								  "Subscription" => json_encode($subscription));
		$postDRRow->Name = $DataExtensionNameForTesting;	
		$postResult = $postDRRow->post();
		print_r('Post Status: '.($postResult->status ? 'true' : 'false')."\n");
		print 'Code: '.$postResult->code."\n";
		print 'Message: '.$postResult->message."\n";	
		print 'Result Count: '.count($postResult->results)."\n";
		print 'Results: '."\n";
		print_r($postResult->results);
		print "\n---------------\n";
		
	}

	catch (Exception $e) {
    	echo 'Caught exception: ',  $e->getMessage(), "\n";
	}

?>


