<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
  <link rel='shortcut icon' href='/images/favicon.ico' type='image/x-icon' />
  <title>Formulartest</title>
</head>
<body>
<?php
error_reporting(E_ALL);
$db = new mysqli( 'localhost', 'iprog', 'test', 'iprog' );

if ($db->connect_errno != 0) {
  echo '<p style="color:red">Fehler trat auf !<br/> '.
       'mysqli_connect_errno : <b>' .$db->connect_errno. "</b><br/>\n".
       'mysqli_connect_error : <b>' .$db->connect_error. "</b></p>\n";
  exit;
}
?>
<p>Connect erfolgreich!</p>

<?php
$param = isset($_GET["p"]) ? $_GET["p"] : 'CATS';
if (isset($_GET["p"]))
  echo "<p>Inhalt von p : <b>".$_GET["p"]."</b></p>";
else
  echo "<p>Kein Parameter p - Default = 'CATS'</p>";

$sql = "SELECT productid, categoryid, name, imageurl
        FROM Product WHERE categoryid = ?";
?>
<h2>Query mit <b>prepared Statement</b></h2>
<p>Query:<br/><?php echo $sql ?></p>
<?php
$stmt = $db->prepare( $sql );

$stmt->bind_param("s", $param); 
$stmt->execute(); 
$erg = $stmt->get_result();
?>
<h2>Auslesen mit <b>fetch_assoc</b></h2>
<p>Es wurden <b><?php echo $erg->num_rows ?></b> Einträge gefunden</p>
<table class='db'>
<?php
while ($zeile = $erg->fetch_assoc()) {
  echo "<tr><td>".$zeile['productid']."</td>
            <td>".$zeile['name']. "</td>
            <td>".$zeile['categoryid']. "</td>
            <td><img src='/images/".$zeile['imageurl']."' alt='foto' /></td>
        </tr>\n";
}

// Resourcen freigeben
$stmt->close();
$db->close();
?>
</table>
</body>
</html>
