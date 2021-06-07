<?php

global $connection;

$connection = mysqli_connect('localhost','root','','loginapp');

if(!$connection){
    echo "Sorry something went wrong with the database connection" ;
}


?>