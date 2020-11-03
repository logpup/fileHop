<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>FileHop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
    <?php
        require "header.php";
    ?>
        <main>
            <div class="wrapper-main">
                <section class="section-default">
                    <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<p class="login-status">You are logged in!</p>';
                        }
                        else {
                            echo '<p class="login-status">You are logged out!</p>';
                        }
                    ?>
                </section>
            </div>
        </main>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="submit">Upload</button>
        </form>
    <?php
        require "footer.php";
    ?>
    </body>