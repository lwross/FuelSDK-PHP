<?php

$request = new HttpRequest();
$request->setUrl('https://android.googleapis.com/gcm/send');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'postman-token' => 'f7555a09-3e7c-7f13-be40-8d3616dbbff1',
  'cache-control' => 'no-cache',
  'content-type' => 'application/json',
  'authorization' => 'key=AAAAEzBWVWU:APA91bH8wdRRiOtqdSAfLjrXlb1jmuvr_UExaeI9QDdjdiop_nSPHXUX0cfM-khb1qcm8V9uV61BLhibMxjkgeOHLtKMp2Z7zG8PMLO4iBZVx2SQ8jAKVia20RSL4nPEdhHZMkKbDrCYkxRJG5vX5T8DQPzFEunLXg'
));

$request->setBody('{"registration_ids":["d2ggGiTEChY:APA91bEhk6GPkX7OI13ZbBPSlb3TCMnXiBeylPspTJoaudPAwmxF8ngvE9LhyW7sC8g3S0gY4Vtf5YSWM0KV-WhayvYzkmF6rVYtkD9kDoR5CyQKygQfKxWp0W286HjcmiOaEjyclG-N"]}');

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
}