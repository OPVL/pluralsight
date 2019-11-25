workbox.precaching.precacheAndRoute(self.__precacheManifest);

workbox.routing.registerRoute(
    /https:\/\/pluralsight-pwa-scratch\.firebaseio\.com\/.*\.json/,
    new workbox.strategies.NetworkFirst({
        cacheName: "api-cache",
        plugins: [
            new workbox.expiration.Plugin({
                maxEntries: 50,
                maxAgeSeconds: 10 * 86400, // 10 days
                purgeOnQuotaError: true
            })
        ]
    })
);