<?php
/***** This is the Main Controller of W2 Team Assignment *****/

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
    include 'view/player-registration.php';

}
