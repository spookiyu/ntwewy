<?php
$INC_DIR = $_SERVER["DOCUMENT_ROOT"]. "/inc/";
$pageTitle = "Social Network";
$pageDesc = "";
?>

<?php require($INC_DIR. "header.php"); ?>

<p class="intro">images of every character in neo's social network description. no the sort buttons do not work yet.</p>
<ul class="sort">
  <li><button id="alphabetize-social-network" class="inactive" onclick="alphabetizeSocialNetwork()">Alphabetize</button></li>
  <li><button id="categorize-social-network" onclick="categorizeSocialNetwork()">Categorize</button></li>
</ul>
<ul id="social-network">
  <li><a href="/social-network/rindo-kanade.php">Rindo Kanade</a></li>
  <li><a href="/social-network/.php">Furesawa "Fret" Tosai</a></li>
  <li><a href="/social-network/.php">Nagi Usui</a></li>
  <li><a href="/social-network/.php"></a></li>
  <li><a href="/social-network/.php"></a></li>
  <li><a href="/social-network/.php"></a></li>
</ul>

<?php require($INC_DIR. "footer.php"); ?>
