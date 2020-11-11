<?php
    session_start();
?>
        <link rel="stylesheet" href="styles.css">
        <header>
            <h3>FileHop</h3>
            <nav class="navbar navbar-default">
                <div class = "container-fluid">
                    <div class = navbar-header>
                        <a class = "navbar-brand" href="#">
                        <img class = "logo" src="img/logo.gif" alt="logo">
                        </a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                        </li>
                        <li>
                            <a href="#">About me</a>
                        </li>
                        <li>
                            <a href="#"></a>Contact</li>
                    </ul>
                    <form class="navbar-form navbar-left" action="includes/login.inc.php" method="post">
                        <input type="text" name="mailuid" placeholder="Username/E-mail...">
                        <input type="password" name="pwd" placeholder="Password...">
                        <button type="submit" name="login-submit">Login</button>
                    </form>
                    <a href="signup.php">Signup</a>
                    <form class="navbar-form navbar-left" action="includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit">Logout</button>
                    </form>
                </div>
            </nav>
        </header>