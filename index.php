<!DOCTYPE html>
<html>
  <head> 
      <title> Class test</title>
</head>
<body>
<?php
   $studentOne = new Student(); 
   $studentOne->id = "k2024417";
   $studentOne->givenName = "Idowu";
   $studentOne->familyName = "Alli";
   ?>
   <p> Our student is called 
       <b><?= $studentOne->givenName ?></b>
       and their ID is 
       <b><?= $studentOne->id ?></b></p>
       <?php require_once 'model/student.php'; ?>
</body>
</html>  
