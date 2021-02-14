<?php
/***** This is the Main Controller of W2 Team Assignment *****/
$dbUrl = getenv('DATABASE_URL');

$dbOpts = parse_url($dbUrl);

$dbHost = $dbOpts["host"];
$dbPort = $dbOpts["port"];
$dbUser = $dbOpts["user"];
$dbPassword = $dbOpts["pass"];
$dbName = ltrim($dbOpts["path"],'/');

$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

$persons = $db->query('SELECT * FROM persons');
echo $persons;

echo "<ol>";

while ($p = $persons->fetchObject()) {
  echo $person['first_name'] . " " . $person['last_name'];
}

echo "</ol>";
exit();

// This is the main controller for this website

$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
  if($action == NULL) {
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
  }

switch($action) {
  case 'template':
    include 'view/template.php';
    break;

  default:
    header("Location: ./accounts/index.php?action=register_player_form");
    exit();
}
