<?php

/* Input: String of the clients submitted and sanitized email 
 * Work: Validates the sanitized email string's as an email
 * Output: Returns the submitted string if it appears valid 
 *    or NULL if not 
 */
function checkEmail($clientEmail) {
  $valEmail = filter_var($clientEmail, FILTER_VALIDATE_EMAIL);
  return $valEmail;
}

/* Input: clients proposed password string
 * Work: Compares the entry against a pattern of at least:
 *    One capital letter (A-Z)
 *    One lowercase letter (a-z)
 *    One special character
 *    One number (0-9) and
 *  A minimum of 8 characters with 
 *  no blank spaces
 * Returns: "1" if it matches, "0" for no match  
 */
function checkPassword($clientPassword) {
  $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])(?=.*[A-Z])(?=.*[a-z])([^\s]){8,}$/';

  return preg_match($pattern, $clientPassword);
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}