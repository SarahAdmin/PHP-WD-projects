<!DOCTYPE html>
<html>
<body> 
<head> 
    <title> Insert New Student </title>
</head>
<link rel="stylesheet" href="CStudent.css">

<?php if ($status):?>
    <p style="color: green;"><?=$status?></p> 
<?php endif ?> 
     <h1><?php echo "Insert User" ?></h1>
    <form action="CreateStudent.php" method="request"> 
       Student ID:  <input type="text" name="id" placeholder="Type your ID no." required="ID number required"> </br>
       Given Name: <input type="text" name="givenName" placeholder="Type Your First Name"></br>
       Family Name: <input type="text" name="familyName" placeholder="Type Your Last Name"> </br>
       <input type="submit"> </br>
</form>
<a href="studentlist.php"> Or go back to list</a> 

</body>
</html>
