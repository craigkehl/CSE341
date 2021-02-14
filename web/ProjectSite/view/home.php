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
    <div id="headerContainer">
      <button class="navShowHide">            
        <span class="material-icons">menu</span>
      </button>
      <div>
        <h1 class="h1Scaled">Dev Community</h1>
        <h4>Help develop our youth and our community's future!</h4>
      </div>
      <div class="loginIcon">
        <a href="#">
          <span class="material-icons">login</span>
        </a>
      </div>
    </div>
    <?php include 'includes/nav.php';  ?>
    <div id="mainSectionContainer">
      <div id="mainContentContainer">
        <h1> You Made it!</h1>
        <?php
          echo '<h4>Player Roster</h4><ol>';        
          foreach ($db->query('SELECT first_name, last_name FROM persons') as $row)
          {
            echo "<li> Person: ". $row['first_name'] . " " . $row['last_name'] . "</li>";
          }          
          echo '</ol>';
        ?>
      </div>
    </div>
  </div>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="../js/main.js"></script> 
</body>
</html>