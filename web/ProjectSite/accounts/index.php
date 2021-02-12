<?php
// This is the accounts controller for this website

//Get the database and model brought into scope
require_once '../library/connections.php';
require_once '../library/functions.php';
require_once '../model/accounts-model.php';


// Get the classifications array

$action = filter_input(INPUT_GET, 'action');
  if($action == NULL) {
    $action = filter_input(INPUT_POST, 'action');
  }

switch($action) {
  case 'login':
    include '../view/login.php';
  break; 

  case 'register_player':
    
    // // filter and store the data
    // $playerFirstname = filter_input(INPUT_POST, 'playerFirstname', FILTER_SANITIZE_STRING);// added filter type
    // $playerLastname = filter_input(INPUT_POST, 'playerLastname', FILTER_SANITIZE_STRING);
    // $playerBirthdate = filter_input(INPUT_POST, 'playerBirthdate', FILTER_SANITIZE_STRING);// added filter type
    // $playerGender = filter_input(INPUT_POST, 'playerGender', FILTER_SANITIZE_STRING);
    // $parentFirstname = filter_input(INPUT_POST, 'parentFirstname', FILTER_SANITIZE_STRING);// added filter type
    // $parentLastname = filter_input(INPUT_POST, 'parentLastname', FILTER_SANITIZE_STRING);
    // $parentMobile = filter_input(INPUT_POST, 'parentMobile', FILTER_SANITIZE_STRING);
    // $parentEmail = filter_input(INPUT_POST, 'parentEmail', FILTER_SANITIZE_EMAIL);
    // $parentPassword = filter_input(INPUT_POST, 'parentPassword', FILTER_SANITIZE_STRING);

     // filter and store the data
     $playerFirstname = test_input($_POST['playerFirstName']);// added filter type
     $playerLastname = test_input($_POST['playerLastName']);
     $playerBirthdate = test_input($_POST['playerBirthdate']);// added filter type
     $playerGender = test_input($_POST['playerGender']);
     $parentFirstname = test_input($_POST['parentFirstName']);// added filter type
     $parentLastname = test_input($_POST['parentLastName']);
     $parentMobile = test_input($_POST['parentMobile']);
     $parentEmail = test_input($_POST['parentEmail']);
     $parentPassword = test_input($_POST['parentPassword']);

    // $parentEmail = checkEmail($parentEmail);
    // $checkPassword = checkPassword($parentPassword);

    // check if there is data in the variable
    if (
      empty($playerFirstname) || 
      empty($playerLastname) || 
      empty($playerBirthdate) || 
      empty($playerGender) || 
      empty($parentFirstname) || 
      empty($parentLastname) || 
      empty($parentMobile) ||
      empty($parentEmail) || 
      empty($parentPassword)) {
      $message = '<p>Please provide information for all required form fields.</p>';
      include '../view/player-registration.php';
      exit;
    } 

    $playerIsFemale = ($playerGender = "female") ? true: false;

    // Hash the checked password
    $hashedPassword = password_hash($parentPassword, PASSWORD_DEFAULT);

    // Send the data to the model
    $regOutcome = regClient(
              $playerFirstname, 
              $playerLastname, 
              $playerBirthdate, 
              $playerIsFemale, 
              $parentFirstname, 
              $parentLastname, 
              $parentMobile, 
              $parentEmail, 
              $hashedPassword);
    
    // check and report the result
    if ($regOutcome > 0) {
      $message = "<p>Thanks for registering $playerFirstname. Please use your email and password to login.</p>";
      include '../view/login.php';
      exit;
      } else {
      $message = "<p>Sorry $playerFirstname, but the registration failed. Please try again.</p>";
      include '../view/registration.php';
      exit;
    }
  break;
    
  case 'register_player_form':
    include '../view/player-registration.php';
  break;   

  default:
}