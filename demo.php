<?php

$client = new http\Client;
$request = new http\Client\Request;

$body = new http\Message\Body;
$body->append('{"registration_ids":["d2ggGiTEChY:APA91bEhk6GPkX7OI13ZbBPSlb3TCMnXiBeylPspTJoaudPAwmxF8ngvE9LhyW7sC8g3S0gY4Vtf5YSWM0KV-WhayvYzkmF6rVYtkD9kDoR5CyQKygQfKxWp0W286HjcmiOaEjyclG-N"]}');

$request->setRequestUrl('https://android.googleapis.com/gcm/send');
$request->setRequestMethod('POST');
$request->setBody($body);

$request->setHeaders(array(
  'postman-token' => '5da42373-c49d-39b8-f77f-91c384255425',
  'cache-control' => 'no-cache',
  'content-type' => 'application/json',
  'authorization' => 'key=AAAAEzBWVWU:APA91bH8wdRRiOtqdSAfLjrXlb1jmuvr_UExaeI9QDdjdiop_nSPHXUX0cfM-khb1qcm8V9uV61BLhibMxjkgeOHLtKMp2Z7zG8PMLO4iBZVx2SQ8jAKVia20RSL4nPEdhHZMkKbDrCYkxRJG5vX5T8DQPzFEunLXg'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();