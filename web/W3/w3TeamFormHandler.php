<?php
    // filter and store the data
    $clientFirstname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $clientLastname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $clientEmail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $clientMajor = filter_input(INPUT_POST, 'major', FILTER_SANITIZE_STRING);
    $clientComments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING);
    
    $emailLink = "<a href='mailto:$clientEmail'>$clientEmail</a>";

    $continentsVisitedList = "";
    foreach ($_POST['continentsVisited'] as $key => $value) {
      $continentsVisitedList .= "<li>$value</li>";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome </title>
</head>
<body>
  <h1>Welcome <?php echo $clientFirstname . " " . $clientLastname ?>!</h1>

  <p>Hello <?php echo $clientFirstname ?><br>
      Thanks for coming to our site. We have your information as:
  </p>
  <ul>
    <li>Name: <?php echo $clientFirstname . " " . $clientLastname ?> </li>
    <li>Email: <?php echo $emailLink ?> </li>
    <li>Major: <?php echo $clientMajor ?> </li>
    <li>Your comments: <?php echo $clientComments ?> </li>
    <li>
      <ul>The continents you have visited:
        <?php echo $continentsVisitedList ?>
      </ul>
  </ul>
  
</body>
</html>