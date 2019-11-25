importScripts("precache-manifest.b92bc6f53e8422a5e83bc50b7c1418a5.js", "https://storage.googleapis.com/workbox-cdn/releases/4.2.0/workbox-sw.js");

workbox.precaching.precacheAndRoute(self.__precacheManifest);

workbox.routing.registerRoute(
  /https:\/\/pluralsight\-pwa\-scratch\.firebaseio\.com\/.*\.json/,
  new workbox.strategies.CacheFirst({
    cacheName: "api-cache",
    plugins: [
      new workbox.expiration.Plugin({
        maxEntries: 50,
        purgeOnQuotaError: true,
        maxAgeSeconds: 10 * 86400 // 10 days
      })
    ]
  })
);

