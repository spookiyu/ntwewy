<?php
date_default_timezone_set("America/New_York");
if (!isset($metaExtra)) {
  $metaExtra = "";
}
?>

<!DOCTYPE html>

<html>

    <head>
      <title><?php print $pageTitle ?> | Neo: The World Ends with You</title>
      <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="<?php print $pageDesc ?>">
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

    <body>
    	<div id="container">
    		<header>
          <h1><img alt="NEO: The World Ends with You" src="/img/logo.webp"></h1>
          <nav>
            <ul>
              <li><a href="/index.php">Home</a></li>
              <li><a href="/social-network.php">Social Network</a></li>
            </ul>
          </nav>
   			</header>
        <main>
