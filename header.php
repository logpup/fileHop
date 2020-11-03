<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default">
                <div class = "container-fluid">
                <a class = "navbar-brand" href="#">
                    <img src="img/logo.png" alt="logo">
                </a>
                </div>
                
                <ul>
                    <li><a href="#index.php"></a>Home</li>
                    <li><a href="#"></a>Portfolio</li>
                    <li><a href="#"></a>About me</li>
                    <li><a href="#"></a>Contact</li>
                </ul>
                <div>
                    <form action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="Password...">
                        <button type="submit" name="login-submit">Login</button>
                    </form>
                    <a href="signup.php">Signup</a>
                    <form action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>
                </div>
            </nav>
        </header>
    </body>
</html>