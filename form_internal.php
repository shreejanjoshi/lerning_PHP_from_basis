
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form_external.php" method="POST">
        <!-- action on same page because we will code here but normal it should in another page -->
        <!-- method is the way it send its data -->

        <input type="text" placeholder="Enter username" name="username">
        <input type="password" placeholder="Your password" name="password">
        <input type="submit" name="submit">

    </form>
</body>

</html>