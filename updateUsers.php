<?php

include_once './navbar/header.php';

include_once './functions/db.php';

include_once './functions/functions.php';

?>

<h2 class="text-center">
Update users
</h2>

<form action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
    <small id="emailHelp" class="form-text text-muted">Example - John123, Abhik, Rey6969</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <select name="id">
  <?php

  showId($connection);

  ?>
  </select>
  <br>
  <br>
  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>

<?php

updateUser($connection);

?>

<?php

include_once './navbar/footer.php';

?>