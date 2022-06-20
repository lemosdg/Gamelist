<!DOCTYPE html>
<html>
    <head>
        <meta cherset="utf-8">
        <title>Login</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <?php require "partials/header.php" ?>
        <h1>Login</h1>
        <span>or  <a href="signup.php"> signup</a></span>
        <form action="login.php" method="post">
            <input type="text" name="email" placeholder="Enter your mail">
            <input type="password" name="password" placeholder="Enter your password">
            <input type="submit" value="Send">
        </form>
    </body>
</html>