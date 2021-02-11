<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Craig Kehl">
  <meta name="description" content="CSE341 Project Page">
  <title>Player Registration</title> 
       <?php require './includes/links.php'; ?>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css"> -->
</head>
<body>
  <?php
    echo '<h4>Player Roster</h4><ol>';
     
    foreach ($db->query('SELECT first_name, last_name FROM public.persons') as $row)
    {
      echo "<li> Person:". $row['first_name'] . " " . $row['last_name'] . "</li>";
    }
    
    echo '</ol>';
  ?>
  
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
        <div class="cardContainer player name">
          <div class="cardHeaderContainer  player">
            <div class="cardIcon">
              <span class="material-icons">contact_page</span>
            </div>
            <h4>Player Name</h4>
          </div>
          <?php echo $dbTest; ?>
          <div class="cardContent">
              <div class="cardFormContainer">
              <form action="#" method="POST">
                <div class="inputRow">
                  <div class="inputContainer">
                    <label for="firstName">Name</label>
                    <input class="cardForm" type="text" name="firstName">
                    <label for="lastName"></label>Last Name</label>
                    <input class="cardForm" type="text" name="lastName">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>       
       
        <div class="cardContainer parent name">
          <div class="cardHeaderContainer  player">
            <div class="cardIcon">
              <span class="material-icons">contact_page</span>
            </div>
            <h4>Parent Info</h4>
          </div>
          <div class="cardContent">
              <div class="cardFormContainer">
              <form action="#" method="POST">
                <div class="inputRow">
                  <div class="inputContainer">
                    <label for="firstName">Name</label>
                    <input class="cardForm" type="text" name="firstName">
                    <label for="lastName"></label>Last Name</label>
                    <input class="cardForm" type="text" name="lastName">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../js/main.js"></script> 
</body>
</html>