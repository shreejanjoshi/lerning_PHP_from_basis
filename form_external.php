<?php

if (isset($_POST['submit'])) {

    $minimun = 5;
    $maximun = 10;

    $name = ["Shreejan", "Tommy", "Jackson", "Steven"];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) < $minimun) {
        echo "Username must be longer";
    } elseif (strlen($username) > $maximun = 10) {
        echo "Username must not be longer then 10 char";
    }

    if(!in_array($username, $name)){
        echo "Sorry you are not allowed";
    }else{
        echo "Welcome";
    }

}


?>