<?php
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
</head>
<body style="font-family:sans-serif">
<h1>Sessions Seite 2</h1>
<p>
Dies ist Aufruf Nr <?php echo $_SESSION['zaehler']; ?> .
</p>
<p>SID lautet: <?php echo SID; ?></p>

<p>
Hier gehts
<a href="02_sessions_1.php?<?php echo htmlspecialchars(SID); ?>">zu Seite 1</a>
</p>
</body>
</html>
