const staticDevCoffee = "dev-coffee-site-v1";
const assets = [
  "/",
  "/index.php",
  "/static/head.php",
  "/static/header.php",
  "/assets/css/bootstrap.min.css",
  "/assets/css/animate.min.css",
  "/assets/css/font-awesome.min.css",
  "/assets/css/style.css",
  "/js/app.js",
];

self.addEventListener("install", (installEvent) => {
  installEvent.waitUntil(
    caches.open(staticDevCoffee).then((cache) => {
      cache.addAll(assets);
    })
  );
});
