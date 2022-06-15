<?php
session_start();
?>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=app2', 'root', '');
// verbindung zur datenbank herstellen
// $pdo für Datenbankoperationen