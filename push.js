const webpush = require('web-push');

// VAPID keys should only be generated only once.
const vapidKeys = webpush.generateVAPIDKeys();

webpush.setGCMAPIKey('AAAAEzBWVWU:APA91bH8wdRRiOtqdSAfLjrXlb1jmuvr_UExaeI9QDdjdiop_nSPHXUX0cfM-khb1qcm8V9uV61BLhibMxjkgeOHLtKMp2Z7zG8PMLO4iBZVx2SQ8jAKVia20RSL4nPEdhHZMkKbDrCYkxRJG5vX5T8DQPzFEunLXg');
webpush.setVapidDetails(
  'mailto:lachlan.ross@salesforce.com',
  vapidKeys.publicKey,
  vapidKeys.privateKey
);

//console.log(vapidKeys);

// This is the same output of calling JSON.stringify on a PushSubscription
const pushSubscription = {
  endpoint: 'https://android.googleapis.com/gcm/send/fzEIfdnQrfU:APA91bH0lc8utkMIS23Bi1Ub2VtIJiC1gFyOrHlQtx0BbmNL5mB1wbeX3L3y7bBoinvZqNsMS4lsZfiAV6CvgjL-BnYxsn-4Fby2UtM-pTH0BhPPwNjUMZnt_iVSzR97U96hcBRLzSy5',
  keys: {
    auth: 'K1kWulifseUljBmEnK5Qjg==',
    p256dh: 'BJc5TsWIuOAq3OCd0am9apYU2hsSFrYsc6l-f6OxjjsFHQ8CuacD7uOaC98HC5YJJif40UGNg9xeLO3FdIeNDnk='
  }
};

//console.log(pushSubscription);

webpush.sendNotification(pushSubscription, JSON.stringify({
	  title: 'Hello World Title',
      body: 'Hello World Body',
      icon: '/images/icon-192x192.png',
      tag: 'personalised-push-demo-notification-tag'
    }));

//{"endpoint":"https:\/\/android.googleapis.com\/gcm\/send\/fzEIfdnQrfU:APA91bH0lc8utkMIS23Bi1Ub2VtIJiC1gFyOrHlQtx0BbmNL5mB1wbeX3L3y7bBoinvZqNsMS4lsZfiAV6CvgjL-BnYxsn-4Fby2UtM-pTH0BhPPwNjUMZnt_iVSzR97U96hcBRLzSy5","keys":{"p256dh":"BJc5TsWIuOAq3OCd0am9apYU2hsSFrYsc6l-f6OxjjsFHQ8CuacD7uOaC98HC5YJJif40UGNg9xeLO3FdIeNDnk=","auth":"K1kWulifseUljBmEnK5Qjg=="}}