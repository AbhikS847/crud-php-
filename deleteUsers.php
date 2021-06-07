<?php

include_once './navbar/header.php';

include_once './functions/db.php';

include_once './functions/functions.php';

?>

<h2 class="text-center">
Delete users
</h2>

<form action="" method="POST">
<label>Delete user</label>
  <select name="id">
  <?php

  showId($connection);

  ?>
  </select>
  <br>
  <br>
  <button class="btn btn-danger" type="submit" name="submit" class="btn btn-primary">Delete</button>
</form>

<?php

deleteUser($connection);

?>

<?php

include_once './navbar/footer.php';

?>