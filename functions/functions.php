<?php

include_once 'db.php';

function registerUser($username,$password,$connection){
        if(strlen($username)>=6 && $password){
        $query = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$password')";
        $result = mysqli_query($connection,$query);

        echo "<b class='text-center'>You have successfully registered a new user, check your DB or the 'All users tab'</b>";
        
        if(!$result){
            echo "Sorry something went wrong with the datbase. Your error is : " . mysqli_error($connection);
        }
    }
    else{
        echo "<b class='text-center'>Sorry, but you need to insert username with at least 6 characters and a password</b>";
    }
}

function showAllUsers($connection){

$query = 'SELECT * FROM users';

$result = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($result)){
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

}

function showId($connection){
    $query = "SELECT id from users";
    $result = mysqli_query($connection,$query);
  
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function updateUser($connection){

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $query = "UPDATE users SET username ='$username', password ='$password' WHERE id = $id";
        $result = mysqli_query($connection,$query);
      
        if(!$result){
          echo "Sorry an unexpected error occured : " . mysqli_error($connection);
        }
      
      }
}

function deleteUser($connection){

    if(isset($_POST['submit'])){

        $id = $_POST['id'];
        $query = "DELETE FROM `users` WHERE id = '$id' ";
        $result = mysqli_query($connection,$query);
    
        if(!$result){
            echo "Sorry, unexpected error occured : " . mysqli_error($connection);
        }
    
    }

}

?>