<!doctype html>
<html>
<head>
  <title>Friends List</title>
</head>
<body>
  <h1>Virtual Rolodex - Show Friends</h1>
  <table>
    <thead>
      <tr>
        <th>Given Name</th>
        <th>Surname</th>
        <th>Address</th>
        <th>Grade</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($results as $oneFriend): ?>
      <tr>
        <td><?=$oneFriend->givenName ?></td>
        <td><?=$oneFriend->surname ?></td>
        <td><?=$oneFriend->address ?></td>
        <td><?=$oneFriend->grade ?></td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <a href="friendlist.php">Return to list</a>
</body>
</html>