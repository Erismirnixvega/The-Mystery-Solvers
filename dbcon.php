<?php
$server = "localhost"; 
$username = "root";
$password = "";  //macbook gebruikers vullen bij wachtwoord "root" in.
$db = "escape_room"; //pas dit aan indien de naam van jullie database anders is

try {
  $conn = new PDO("mysql:host=$server; dbname=$db", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Verbinding mislukt" . $e->getMessage();
}