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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="POST">
        <!-- action on same page because we will code here but normal it should in another page -->
        <!-- method is the way it send its data -->

        <input type="text" placeholder="Enter username" name="username">
        <input type="password" placeholder="Your password" name="password">
        <input type="submit" name="submit">

    </form>
</body>

</html>