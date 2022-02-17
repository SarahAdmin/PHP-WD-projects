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
      <?php foreach ($friends as $oneFriend): ?>
      <tr>
        <td><?=$oneFriend->givenName ?></td>
        <td><?=$oneFriend->surname ?></td>
        <td><?=$oneFriend->address ?></td>
        <td><?=$oneFriend->grade ?></td>
        <td>
          <form action="friendlist.php" method="GET">
            <input type="hidden" value="<?= $oneFriend->id ?>" name="inviteId"/>
            <input name="whichButton" type="submit" value="Invite">
          </form>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <a href="friendlist.php">Clear search</a>
  <hr/>
  <form action="friendlist.php" method="POST">
    Search by given name:
    <input name="searchgn"/> <input type="submit" value="Search"/><br/>
    Search by surname:
    <input name="searchsn"/> <input type="submit" value="Search"/><br/>
    Search by grade:
    <input name="searchgrade"/> <input type="submit" value="Search"/><br/>
  </form>
  <hr/>
  <?= $numberOfInvites ?> people invited. <a href="invitelist.php">Show invites</a>
</body>
</html>