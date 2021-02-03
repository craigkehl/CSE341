<?php
/***** This is the Main Controller for Fine Cheeses *****/

// Create or access a Session
session_start();

//Get the database and model brought into scope
require_once 'library/connections.php';
require_once 'model/main-model.php';
require_once 'library/functions.php';

// Get the classifications array and build the naviagtion
$classifications = getClassifications();
$navList = navList($classifications);

// Check if new or return user
if(isset($_COOKIE['firstname'])) {
  $cookieFirstname = filter_input(INPUT_COOKIE, 'firstname', FILTER_SANITIZE_STRING);
}

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
    include 'view/home.php';
}
