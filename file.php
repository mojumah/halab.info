<?php
$user = "shamash";
$password = "";
$database = "Aleppo";
$table = "quotes";

try {
  $db = new PDO("mysql:host=aleppo.cmi2lvxsw6oz.eu-west-2.rds.amazonaws.com;dbname=$database", $user, $password);
  echo "<h2>Quotes</h2><ol>";
  foreach($db->query("SELECT quote FROM $table") as $row) {
    echo "<li>" . $row['quote'] . "</li>";
  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
