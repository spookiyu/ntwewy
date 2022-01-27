<?php
date_default_timezone_set("America/New_York");
if (!isset($metaExtra)) {
  $metaExtra = "";
}
?>

<!DOCTYPE html>

<html class="image-zoom">

    <head>
      <title><?php print $name ?> | Neo: The World Ends with You</title>
      <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="Social network profile of <?php print $name ?>">
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="theme-color" content="#ffffff">
      <link rel="stylesheet" type="text/css" href="/css/style.1.0.min.css">
      <noscript><link rel="stylesheet" type="text/css" href="/css/no-js.1.0.min.css"></noscript>
	    <?php print $metaExtra ?>
    </head>

    <body class="image-zoom">
  		<header class="image-zoom">
        <h1><img alt="NEO: The World Ends with You" src="/img/logo.webp"></h1>
 			</header>
      <main>
        <img id="zoomed-image" alt="Screenshot of <?php print $name ?> on NTWEWY's social network" src="/img/social-network/<?php print $filename ?>.jpg">
        <div id="social-network-description">
          <p class="social-network-name"><?php print $name ?></p>
          <?php print $description ?>
        </div>
        <button class="back-button" onclick="history.back()">Back</button>
      </main>
    <footer>
      <a href="https://linktr.ee/eriyu" target="_blank">@eriyu</a>
    </footer>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/script.1.0.js" type="text/javascript" charset="utf-8"></script>
    </body>

    </html>
