<?php 
require_once "../studentclass1.php";


ini_set('display errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$pdo = new PDO ("mysql:host=localhost; dbname=db_k2024417", "k2024417", "pooyaiji", 
[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]); 

function getAllStudents()
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM students");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS,"Student");
    return $results;
}
/* $results = getAllStudents(); */ 
if (!isset($_REQUEST["search"])) 
{ 
    $results = getAllStudents();
}
else {
    $search = $_REQUEST["search"];
    $results = getStudentsBygivenName($search);
}

function getStudentsBygivenName($givenName)
{
    global $pdo;
    $statement = $pdo->prepare("SELECT * FROM students WHERE givenName = ?");
    $statement->execute([$givenName]);
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Student");
    return $results;
}

function AddUsers($newStudent) {
    global $pdo;
    $statement = $pdo->prepare("INSERT INTO students (id, givenName, familyName) VALUES(?,?,?)"); 
    $statement->execute([$newStudent->id, $newStudent->givenName, $newStudent->familyName]); 
}



?> 
