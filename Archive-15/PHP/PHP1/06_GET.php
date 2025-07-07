<!DOCTYPE html>
<html>
  <head><title>Demo GET-Parameter</title>
</head>
<body style="font-family:sans-serif;font-size:1.5em">
<h1>GET-Parameter</h1>
<?php
  echo "<p>Anzahl Parameter : " . count($_GET) . "</p>";
  echo '<p>Inhalt von $_GET :</p>';
  print_r($_GET);
  
  foreach ($_GET as $k => $v)
    echo "<p>$k : $v</p>";
?>
</body>
</html>
