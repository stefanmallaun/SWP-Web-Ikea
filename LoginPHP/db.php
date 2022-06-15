<?php
session_start();
?>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=web3bg2', 'root', '');
// verbindung zur datenbank herstellen
// $pdo für Datenbankoperationen