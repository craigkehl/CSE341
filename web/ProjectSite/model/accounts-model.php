<?php
/* This is the model for the accounts */ 
// This function handles site registrations
function regPerson(
          $db,
          $playerFirstname, 
          $playerLastname,
          $playerNickname, 
          $playerBirthdate,
          $playerIsFemale,
          $playerMobile,    
          $parentFirstname, 
          $parentLastname, 
          $parentMobile, 
          $parentEmail, 
          $hashedPassword) 
  {  
    try {
      // Insert Player
      $db->beginTransaction();
      
      $query = 'INSERT INTO persons(first_name, last_name, nick_name, birthdate, is_female, mobile_number) 
          VALUES (:first_name, :last_name, nick_name, :birthdate, :is_female, :mobile)';

      $stmt = $db->prepare($query);
      $stmt->bindValue(':first_name', $playerFirstname, PDO::PARAM_STR);
      $stmt->bindValue(':last_name', $playerLastname, PDO::PARAM_STR);
      $stmt->bindValue(':last_name', $playerNickname, PDO::PARAM_STR);
      $stmt->bindValue(':birthdate', $playerBirthdate, PDO::PARAM_STR);
      $stmt->bindValue(':is_female', $playerIsFemale, PDO::PARAM_BOOL);
      $stmt->bindValue(':mobile', $playerMobile, PDO::PARAM_STR);
      // Insert the data
      $stmt->execute();
      $rowsChanged = $stmt->rowCount();
      $newPlayerId = $db->lastInsertId("persons_id_seq");
      // Return the indication of success (rows changed)
      if ($rowsChanged) {
        // insert player's parent
        $query2 = 'INSERT INTO persons(first_name, last_name, mobile_number, email, password) VALUES (:first_name, :last_name, :mobile_number, :email, :password)';

        $stmt = $db->prepare($query2);
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
      }

      if ($rowsChanged > 1) {
        $query3 = 'INSERT INTO parents(parent_person_id, parent_child_id) VALUES(:new_parent_id, :new_player_id)';
        $stmt = $db->prepare($query3);
        $stmt->bindValue(':new_parent_id', $newParentId, PDO::PARAM_INT);
        $stmt->bindValue(':new_player_id', $newPlayerId, PDO::PARAM_INT);
        $stmt->execute();
        $rowsChanged += $stmt->rowCount();
        $db->commit();
        return $rowsChanged;
      }
    } catch (\Throwable $e) {
        $db->rollback();
        throw $e;
    }  
};

function getMembers() {
  $db = get_db(); 
  $sql = 'SELECT pl.first_name||" "||pl.last_name AS "Player"
          FROM persons'; 
  $stmt = $db->prepare($sql); 
  $stmt->execute(); 
  $inventory = $stmt->fetchAll(PDO::FETCH_ASSOC); 
  $stmt->closeCursor(); 
  return $inventory; 
}