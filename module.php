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

   $techOne = new Module();
   $techOne->id = "CI3856";
   $techOne->Name = "Data Science";
   $techOne->venue = "Kingston University";
   $techOne->addStudent($studentOne);
?>
   <p>The first student on 
       <b><?= $techOne->name ?></b>
       is  
       <b> 
           <?=$techOne->students[0]->givenName ?>
           <?=$techOne->students[0]->familyName ?>
      </b></p>
      <?php require_once "university/model/student.php"; ?>
      <?php require_once "university/model/module.php"; ?>
   </body>
</html>  
