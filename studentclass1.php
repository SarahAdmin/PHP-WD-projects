<?php 
class Student {
public $id;
public $givenName;
public $familyName; 


function setid($id) {
    $this->id = $id;
}
function setgivenName($givenName) {
    $this->givenName = $givenName;
}
function setfamilyName($familyName) {
    $this->familyName = $familyName;
}

function getFullName( ){
    return "$this->givenName, $this->familyName"; 
}

function AddUsers() {
$idno = $_REQUEST["formFieldForid"]; 
$fn = $_REQUEST["formFieldForgivenName"];
$ln = $_REQUEST["formFieldForfamilyName"]; 

$newStudent = new Student();
$newStudent->id = $idno;  
$newStudent->givenName = $fn; 
$newStudent->familyName= $ln; 

}

 } 
