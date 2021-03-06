<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Craig Kehl">
  <meta name="description" content="CSE341 Project Page">
  <title>Player Registration</title> 
  <?php require 'includes/links.php'; ?>  
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
            <div class="cardContainer player name">
              <div class="cardHeaderContainer  player">
                <div class="cardIcon">
                  <span class="material-icons">contact_page</span>
                </div>
                <h4>Player Name</h4>
              </div>
              <!-- Player's Name -->
              <div class="cardContent">
                <div class="cardFormContainer">
                  <div class="inputRow">
                    <div class="inputContainer">
                      <label for="playerFirstname">First Name<span class="required"> (required)</span></label>
                      <input class="cardForm" type="text" name="playerFirstname" 
                          <?php if(isset($playerFirstname)){echo "value='$playerFirstname'";} ?>
                          required>
                      <label for="playerLastname">Last Name<span class="required"> (required)</span></label>
                      <input class="cardForm" type="text" name="playerLastname" 
                          <?php if(isset($playerLastname)){echo "value='$playerLastname'";} ?>
                          required>
                      <label for="playerNickname">Nickname</label>
                      <input class="cardForm" type="text" name="playerNickname" 
                          <?php if(isset($playerNickname)){echo "value='$playerNickname'";} ?>
                          required>
                      <lable for="playerBirthdate">Birthdate<span class="required"> (required)</span></label>
                      <input class="cardForm" type="text" id="datepicker" name="playerBirthdate">
                      <p>Please select your gender<span class="required"> (required)</span></p>
                      <input type="radio" id="male" name="playerGender" value="male">
                      <label for="male">Male</label>
                      <input type="radio" id="female" name="playerGender" value="female">
                      <label for="female">Female</label>
                      <label for="playerMobile"></label>Mobile Number</label>
                      <input class="cardForm" type="text" name="playerMobile">
                    </div>
                  </div>
                </div>
              </div>
            </div>       
          
              <!-- Parent's Name Update!-->
            <div class="cardContainer parent name">
              <div class="cardHeaderContainer  parent">
                <div class="cardIcon">
                  <span class="material-icons">contact_page</span>
                </div>
                <h4>Parent Info</h4>
              </div>
              <div class="cardContent">
                <div class="cardFormContainer">
                  <div class="inputRow">
                    <div class="inputContainer">
                      <label for="parentFirstName">Name</label>
                      <input class="cardForm" type="text" name="parentFirstName">
                      <label for="parentLastName"></label>Last Name</label>
                      <input class="cardForm" type="text" name="parentLastName">
                      <label for="parentNickname"></label>Nickname</label>
                      <input class="cardForm" type="text" name="parentNickname">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cardContainer parent contactInfo">
              <div class="cardHeaderContainer  parent">
                <div class="cardIcon">
                  <span class="material-icons">contact_mail</span>
                </div>
                <h4>Parent Contact Info</h4>
              </div>
              <div class="cardContent">
                <div class="cardFormContainer">
                  <div class="inputRow">
                    <div class="inputContainer">
                      <label for="parentMobile"></label>Mobile Number</label>
                      <input class="cardForm" type="text" name="parentMobile">
                      <label for="parentEmail">Email</label>
                      <input class="cardForm" type="email" name="parentEmail">
                      <label for="parentPassword">Password</label>                    
                      <input class="cardForm" name="parentPassword" id="parentPassword" type="password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?!.*[\s])(?=.*[A-Z])(?=.*[a-z]).*$" required>
                      <input class="checkbox" type="checkbox" onclick="showPassword()">Show Password
                      <span class="required">Password requirements:
                        <ul>
                          <li>Must contain at least one;
                            <ul class="sub-list_1">
                              <li>upper case letter (A-Z)</li>
                              <li>lower case letter (a-z)</li>
                              <li>special character (! # $ % - _ = +)</li>
                              <li>number (0-9)</li>
                            </ul>
                          <li>Minimum Length = 8 characters</li>
                          <li>No blank spaces</li>
                        </ul>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>
          <input type="submit" name="submit" class="formBtn" value="Register">
          <input type="hidden" name="action" value="register_player">
        </form>
      </div>
    </div>
  </div> 
    <?php include 'includes/commonScripts.php';  ?>  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="../js/datePicker.js"></script>
</body>
</html>