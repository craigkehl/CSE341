<?php

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
