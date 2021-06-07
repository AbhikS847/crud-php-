<?php

include_once './navbar/header.php';

include_once './functions/db.php';

include_once './functions/functions.php';

?>

<h2 class="text-center">
Create a new user
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
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<?php

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);

    $hashFormat = "$2y$10$";

    $salt = "iusesomecrazystrings22";

    $hashFAndSalt = $hashFormat . $salt;
    
    $password = crypt($password,$hashFAndSalt);

    registerUser($username,$password,$connection);
}

?>

<?php

include_once './navbar/footer.php';

?>