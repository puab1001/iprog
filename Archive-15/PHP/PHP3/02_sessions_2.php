<?php
ini_set("session.use_trans_sid", true);
ini_set("session.use_only_cookies", false);
session_start();
echo "<!-- Session ID = ".session_id()."-->";
if (empty($_SESSION['zaehler'])) {
  $_SESSION['zaehler'] = 1;
} else {
  $_SESSION['zaehler']++;
}

?>
<!DOCTYPE html>
<html>
  <head><title>Sessions Demo</title>
  <style>body {font-family:sans-serif}</style>
</head>

<body>
<h1>Sessions Seite 2</h1>
<p>
Dies ist Aufruf Nr <?php echo $_SESSION['zaehler']; ?> .
</p>
<fieldset>
 <div>session_id = <?php echo session_id(); ?></div>
</fieldset>

<p>
Hier gehts
<a href="02_sessions_1.php">zu Seite 1</a>.
</p>
</body>
</html>
