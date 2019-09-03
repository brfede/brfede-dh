<?php
  $nombre = "Federico";
  $sorteo = rand(0, 1);
  $media = [
    "google",
    "facebook",
    "twitter"
  ]
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?= $nombre; ?></h2>
    <h3>¿Es usted un ganador? 
      <?php if($sorteo){echo "SI";} else {echo "NO";} ?>
  </h3>

    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <?php for($i = 0; $i < count($media); $i++):?>
          <li><a href="https://<?= $media[$i]; ?>.com" target="_blank"><?= ucfirst($media[$i]); ?></a></li>
      <?php endfor; ?>
    </ul>
  </body>
</html>