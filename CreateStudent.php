<?php
session_start();
require_once "../studentclass1.php";
require_once "../dataAccess.php";


$status = false;

if(isset($_REQUEST["givenName"]))
{

    $id = $_REQUEST["id"];
    $givenName = $_REQUEST["givenName"];
    $familyName = $_REQUEST["familyName"]; 

    $student = new Student();
    $student->id = htmlentities($id); 
    $student->givenName = htmlentities($givenName);
    $student->familyName = htmlentities($familyName); 

    AddUsers($results);
    $status = "givenName has been added.";
     
}  

require_once "../CreateStudent_view.php";

?>
