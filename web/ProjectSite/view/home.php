<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Craig Kehl">
  <meta name="description" content="CSE341 Project Page">
  <title>Player Information</title> 
       <?php require 'includes/links.php';  ?>  
</head>
<body>  
  <div id="pageContainer">
    <?php include 'includes/header.php';  ?>
    <?php include 'includes/nav.php';  ?>
    <div id="mainSectionContainer">
      <div id="mainContentContainer">
        <h1> You Made it!</h1>
      </div>
    </div>
  </div> 
  <?php include 'includes/commonScripts.php';  ?>  
</body>
</html>