<?php
/* This is the model for the accounts */
function isDbConnected() {// Create a connection object using the phpmotors connection function
  $db = dbConnect();
  // The SQL statement
  $showList = '<h4>Player Roster</h4><ol>';
 
  foreach ($db->query('SELECT first_name, last_name FROM public.persons') as $row)
  {
    $showList .= "<li>Person: $row['first_name'] $row['last_name'] </li>";
  }
 
  // $showList .= '</ol>';
  return $showList;
  
}


