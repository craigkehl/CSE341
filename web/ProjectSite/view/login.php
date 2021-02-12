<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Craig Kehl">
  <meta name="description" content="CSE341 Project Page">
  <title>Player Registration</title> 
       <?php 
        // require $_SERVER['HTTP_HOST'].'ProjectSite/view/includes/links.php'; 
        require 'includes/links.php'; 
       ?>  
</head>
<body>  
  <div id="pageContainer">
    <div id="headerContainer">
      <button class="navShowHide">            
        <span class="material-icons">menu</span>
      </button>
      <h1 class="h1Scaled">Player Registration</h1>  
      <div class="loginIcon">
        <a href="#">
          <span class="material-icons">login</span>
        </a>
      </div>
    </div>
    <div id="sideNavContainer" style="display:none;">
      <ul>
        <li><a href="">About Me</a></li>
        <li><a href="">Projects</a></li>
      </ul>
    </div>
    <div id="mainSectionContainer">
      <div id="mainContentContainer">
        <?php if (isset($message)) { echo $message; } ?> 
        <form action="/ProjectSite/accounts/index.php" method="POST">
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
                    <label for="playerFirstName">Name</label>
                    <input class="cardForm" type="text" name="playerFirstName">
                    <label for="playerLastName"></label>Last Name</label>
                    <input class="cardForm" type="text" name="playerLastName">
                  </div>
                </div>
              </div>
            </div>
          </div>       
        
            <!-- Parent's Name -->
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../js/main.js"></script> 
</body>
</html>