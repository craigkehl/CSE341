<?php
/* This is the model for the accounts */ 
$db = getDb();
// This function handles site registrations
function regClient(
          $playerFirstname, 
          $playerLastname, 
          $playerBirthdate, 
          $playerIsFemale,  
          $parentFirstname, 
          $parentLastname, 
          $parentMobile, 
          $parentEmail, 
          $hashedPassword) 
  { 
  // Insert Player
  // $sql = 'INSERT INTO persons(first_name, last_name, birthdate, is_female)
  //      VALUES (:first_name, :last_name, :birthdate, :is_female)';
  $query = 'INSERT INTO persons(first_name, last_name, birthdate, is_female) VALUES (:first_name, :last_name, :birthdate, :is_female)';

  $stmt = $db->prepare($query);
  $stmt->bindValue(':first_name', $playerFirstname, PDO::PARAM_STR);
  $stmt->bindValue(':last_name', $playerLastname, PDO::PARAM_STR);
  $stmt->bindValue(':birthdate', $playerBirthdate, PDO::PARAM_STR);
  $stmt->bindValue(':is_female', $playerIsFemale, PDO::PARAM_BOOL);
  // Insert the data
  $stmt->execute();
  // Ask how many rows changed as a result of our insert
  $rowsChanged = $stmt->rowCount();
  $newPlayerId = $db->lastInsertId("persons_id_seq");
  // Return the indication of success (rows changed)
  if ($rowsChanged) {
    // insert player's parent
    $query = 'INSERT INTO persons(first_name, last_name, mobile_number, email, password) VALUES (:first_name, :last_name, :mobile_number, :email, :password)';

    $stmt = $db->prepare($query);
    $stmt->bindValue(':first_name', $parentFirstname, PDO::PARAM_STR);
    $stmt->bindValue(':last_name', $parentLastname, PDO::PARAM_STR);
    $stmt->bindValue(':mobile_number', $parentMobile, PDO::PARAM_STR);
    $stmt->bindValue(':password', $hashedPassword, PDO::PARAM_STR);
    $stmt->bindValue(':email', $parentEmail, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged += $stmt->rowCount();
    $newParentId = $db->lastInsertId("persons_id_seq");  
    
    $query = 'INSERT INTO parents(parent_person_id, parent_child_id) VALUES(:new_parent_id, new_player_id)';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':new_parent_id', $newParentId, PDO::PARAM_INT);
    $stmt->bindValue(':new_player_id', $newPlayerId, PDO::PARAM_INT);
    $stmt->execute();
    $rowsChanged += $stmt->rowCount();
    return $rowsChanged;
  } else {
    return 0;
  }
};
