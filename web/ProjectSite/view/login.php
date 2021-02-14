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
       <?php include 'includes/links.php';  ?>  
</head>
<body>  
  <div id="pageContainer">
    <?php include 'includes/header.php';  ?>
    <?php include 'includes/nav.php';  ?>
    <div id="mainSectionContainer">
      <div id="mainContentContainer">        
        <?php if (isset($message)) { echo $message; } ?> 
        <form action="/ProjectSite/accounts/index.php" method="POST">
          <div class="formCardsContainer">
            <div class="cardContainer login">
              <div class="cardHeaderContainer">
                <div class="cardIcon">
                  <span class="material-icons">login</span>
                </div>
                <h4>Login</h4>
              </div>
              <div class="cardContent">
                <div class="cardFormContainer">
                  <div class="inputRow">
                    <div class="inputContainer">
                      <label for="email">Email</label>
                      <input class="cardForm" type="email" name="email" 
                          <?php if(isset($Email)){echo "value='$Email'";} ?>
                          required>
                      <label for="password">Password</label>
                      <input class="cardForm" type="password" name="password" 
                          <?php if(isset($password)){echo "value='$password'";} ?>
                          required>
                    </div>
                  </div>
                </div>
              </div>
            </div>       
          </div>
          <input type="submit" name="submit" class="formBtn" value="Login">
          <input type="hidden" name="action" value="Login">
        </form>
    </div>
  </div> 
    <?php include 'includes/commonScripts.php';  ?> 
</body>
</html>