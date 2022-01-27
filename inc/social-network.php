<?php
$pageTitle = $name;
$pageDesc = "Social network profile of ".$name.".";
?>

<?php require($INC_DIR. "header.php"); ?>

        <img id="zoomed-image" alt="Screenshot of <?php print $name ?> on NTWEWY's social network" src="/img/social-network/<?php print $filename ?>.jpg">
        <div id="social-network-description">
          <p class="social-network-name"><?php print $name ?></p>
          <?php print $description ?>
        </div>
        <button class="back-button" onclick="history.back()">Back</button>

<?php require($INC_DIR. "footer.php"); ?>
