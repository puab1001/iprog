<!DOCTYPE html>
<html>
  <head><title>Loaded Extensions</title>
</head>
<body style="font-family:sans-serif;font-size:1.5em">
<h1>Loaded Extensions</h1>
<?php
  error_reporting(E_ALL);

  $exts = get_loaded_extensions();
  foreach ($exts as $e) {
     echo " <b>Extension: $e </b><br>";
     $funcs = get_extension_funcs ($e);
     foreach ($funcs as $f)
       echo " &nbsp;Funktion: $f <br>";
  }
?>
</body>
</html>
