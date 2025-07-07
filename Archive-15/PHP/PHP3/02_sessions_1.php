<?php
ini_set("session.use_trans_sid", true);
ini_set("session.use_only_cookies", false);
session_start();
if (isset($_GET["reset"])) {
	session_unset();
}
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
<h1>Sessions Seite 1</h1>
<p>
Dies ist Aufruf Nr <?php echo $_SESSION['zaehler']; ?> .
</p>
<fieldset>
 <div>session_id = <?php echo session_id(); ?></div>
 
 <div>session_status = <?php switch(session_status()) {
                              case PHP_SESSION_DISABLED : echo "Sitzung deaktiviert";break;
                              case PHP_SESSION_NONE  : echo "Sitzungen aktiviert, aber keine vorhanden";break;
                              case PHP_SESSION_ACTIVE  : echo "aktive Sitzung";break;
							  default: "Ungültiger Wert";} ?></div>
</fieldset>
<p>
So gehts falls Cookie vorhanden oder session.use_trans_sid
<a href="02_sessions_2.php">zu Seite 2</a>
</p>
<p>
<a href="02_sessions_1.php?reset=true">Alle Session-Variablen l&ouml;schen</a>
</p>
</body>
</html>
