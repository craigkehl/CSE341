<?php
// This is the accounts controller for this website

//Get the database and model brought into scope
require_once '../library/connections.php';
require_once '../model/accounts-model.php';
// require_once '../library/functions.php';

$dbTest = isDbConnected();
// Get the classifications array

$action = filter_input(INPUT_GET, 'action');
  if($action == NULL) {
    $action = filter_input(INPUT_POST, 'action');
  }

switch($action) {
  case 'login':
    include '../view/login.php';
    break;    

  default:
  include 'view/player-registration.php';
}
