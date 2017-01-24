<?php

use Minishlink\WebPush\WebPush;

// array of notifications
$notifications = array(
    array(
        'endpoint' => 'https://android.googleapis.com/gcm/send', // Chrome
        'payload' => "hello !",
        'userPublicKey' => "AAAAEzBWVWU:APA91bH8wdRRiOtqdSAfLjrXlb1jmuvr_UExaeI9QDdjdiop_nSPHXUX0cfM-khb1qcm8V9uV61BLhibMxjkgeOHLtKMp2Z7zG8PMLO4iBZVx2SQ8jAKVia20RSL4nPEdhHZMkKbDrCYkxRJG5vX5T8DQPzFEunLXg",
        'userAuthToken' => "HY34CMr8L72SMwcDxB4klQ==",
    )
);

$webPush = new WebPush();

// send multiple notifications with payload
foreach ($notifications as $notification) {
    $webPush->sendNotification(
        $notification['endpoint'],
        $notification['payload'], // optional (defaults null)
        $notification['userPublicKey'], // optional (defaults null)
        $notification['userAuthToken'] // optional (defaults null)
    );
}
$webPush->flush();

// send one notification and flush directly
$webPush->sendNotification(
    $notifications[0]['endpoint'],
    $notifications[0]['payload'], // optional (defaults null)
    $notifications[0]['userPublicKey'], // optional (defaults null)
    $notifications[0]['userAuthToken'], // optional (defaults null)
    true // optional (defaults false)
);