<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db_user = "ku46587";
$db_name = "db_ku46587";
$db_password = "queighod";

$pdo = new
 PDO("mysql:host=localhost;dbname=$db_name",
$db_user,$db_password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function getAllFriends()
{
  global $pdo;
  $statement = $pdo->prepare('SELECT id,givenName,surname,address,grade FROM friends');
  $statement->execute();
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Friend');
  return $result;
}

function getFriendsByGivenName($nameToSearchFor)
{
  global $pdo;
  $statement = $pdo->prepare("SELECT id,givenName,surname,address,grade FROM friends WHERE givenName = ?");
  $statement->execute([$nameToSearchFor]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Friend');
  return $result;
}

function getFriendsByBothGivenNameAndSurname($firstName,$secondName)
{
  global $pdo;
  $statement = $pdo->prepare("SELECT id,givenName,surname,address,grade FROM friends WHERE surname = ? AND givenName = ?");
  $statement->execute([$secondName,$firstName]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Friend');
  return $result;
}

function getFriendsBySurname($nameToSearchFor)
{
  global $pdo;
  $statement = $pdo->prepare("SELECT id,givenName,surname,address,grade FROM friends WHERE surname = ?");
  $statement->execute([$nameToSearchFor]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Friend');
  return $result;
}

function getFriendsByGrade($gradeToSearchFor)
{
  global $pdo;
  $statement = $pdo->prepare("SELECT id,givenName,surname,address,grade FROM friends WHERE surname = ?");
  $statement->execute([$gradeToSearchFor]);
  $result = $statement->fetchAll(PDO::FETCH_CLASS, 'Friend');
  return $result;
}

function getFriendById($idToSearchFor)
{
  global $pdo;
  $statement = $pdo->prepare("SELECT id,givenName,surname,address,grade FROM friends WHERE id = ?");
  $statement->execute([$idToSearchFor]);
  // get by ID will only ever return a single result, so no point doing a fetchAll.
  // fetchObject will return a single object of the specified class.
  $result = $statement->fetchObject('Friend');
  // this is less wasteful than fetchAll and then just returning result[0]
  return $result;
}

?>