'use strict';

self.addEventListener('install', function (event) {
    event.waitUntil(self.skipWaiting());
});

self.addEventListener('push', function (event) {
    if (event.data) {
        var arr = event.data.json();
        console.log("push", arr);

        var actions1 = {};
        var actions2 = {};
        var url_btn1 = '';
        var url_btn2 = '';

        if (typeof arr.rest.actions[0] !== 'undefined') {
            actions1 = {
                action: 'btn1',
                title: arr.rest.actions[0].title
            };
            url_btn1 = arr.rest.actions[0].link;
        }
        
        if (typeof arr.rest.actions[1] !== 'undefined') {
            actions2 = {
                action: 'btn2',
                title: arr.rest.actions[1].title
            };
            url_btn2 = arr.rest.actions[1].link;
        }

        var options = {
            body: arr.rest.body,
            icon: arr.rest.icon,
            image: arr.rest.image,
            url: arr.rest.link,
            click_action: arr.rest.link,
            data: {
                url: arr.rest.link,
                url_btn1: url_btn1,
                url_btn2: url_btn2
            },
            //actions: [actions1, actions2],
            vibrate: [500, 110, 500, 110, 450, 110, 200, 110, 170, 40, 450, 110, 200, 110, 170, 40, 500],
            renotify: false,
            requireInteraction: true,
        };
        
        if(typeof actions1['action'] !== 'undefined' || typeof actions2['action'] !== 'undefined'){
            options['actions'] = [];

            if(typeof actions1['action'] !== 'undefined'){
                options['actions'].push(actions1);
            }

            if(typeof actions2['action'] !== 'undefined'){
                options['actions'].push(actions2);
            }
        }

        
        
        event.waitUntil(self.registration.showNotification(arr.title, options));
    }
});

self.addEventListener('notificationclick', function (event) {
    console.log("pushclick", event.notification);
    event.notification.close();
    var url = event.notification.data.url;
    var link1 = event.notification.data.url_btn1;
    var link2 = event.notification.data.url_btn2;

    if (event.action === 'btn1') {  
        event.waitUntil(clients.openWindow(link1));
    } else if (event.action === 'btn2') {  
        event.waitUntil(clients.openWindow(link2)); 
    } else {  
        event.waitUntil(clients.openWindow(url));
    } 
});

