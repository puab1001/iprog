<?php
/**
 * Enthaelt verschiedene Dienste, wie das erstellen der Verbindung zur Datenbank
 */
class CDB {

  /**
  * Oeffnet Datenbankverbindung
  */
  public static function connect () {
    //     new mysqli( HOST, Benutzername, Passwort, DBName )
    $db = @new mysqli( 'localhost', 'iprog', 'test', 'iprog' );

    if ($db->connect_errno != 0) {
      echo ('CDB::connect : Fehler trat auf: <b>' .$db->connect_errno. ' : ' .$db->connect_error. '</b>');
      exit;
    }
    return $db;
  }
  
  /**
  * Schreibt Log-Ausgaben in eine Datei
  */
  public static function log ($ort, $text) {
    $fp = fopen ("logfile.log","a");
    fputs ($fp, date ("d.m.Y H:i:s", time())." $ort - $text \n");
  }
}
?>

