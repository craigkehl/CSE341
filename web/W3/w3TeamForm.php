<?php
  $continents = array("na"=>"North America", "sa"=>"South America", "eu"=>"Europe", "as"=>"Asia", "au"=> "Australia", "af"=>"Africa", "an"=>"Antartica");
  $majors = array("cs"=>"Computer Science", "wdd"=>"Web Design and Development", "cit"=>"Computer information Technology", "ce"=>"Computer Engineering");

  $majorsList = "<ul class='radioBtn'>Select your major:";
  foreach ($majors as $key => $major) {
    $majorsList .= "<li>
    <input type='radio' id='$key' name='major' value='$major'>
    <label for='$key'>$major</label>
    </li>";
  }
  $majorsList .= "<ul>";

  $contList = "";
  foreach ($continents as $key => $continent) {
    $contList .= "<input type='checkbox' name='continentsVisited[$key]' value='$continent'>
    <label for='$key'>$continent</label><br>";
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>W3 Team Form</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
<main>      
  <form action="w3TeamFormHandler.php" method="post">
    <fieldset>
      <legend>Personal Information</legend>
      <label for="fname">First Name:</label>
      <input type="text" name="fname" placeholder="John..." required>
      <label for="lname">Last Name:</label>
      <input type="text" name="lname" placeholder="Smith..." required>
      <label for="email">Email:</label>
      <input type="email" name="email" placeholder="me@domain.com" 
        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>      
      <?php echo $majorsList ?>
      <label for="comments">Comments:</label>
      <textarea name="comments" rows="4" cols="50" placeholder="Talk to us...">
      </textarea>
    </fieldset>   
    <fieldset>
      <legend>Covid Check</legend>
      <p>Please list all of the continents you have visited in the last 30 days:</p>
      <?php echo $contList ?>      
    </fieldset>
    <input class="regBtn" type="submit" value="Submit">
        </form>
</main>
  
</body>
</html>