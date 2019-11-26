<?php
session_start();
include("secure.php");
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css"> </head>

    <body>
        <div class="form">
            <p>Welcome
                <?php echo $_SESSION['username']; ?>! </p>
            <p>This is secure area.</p> <a href="logout.php">Logout</a> </div>
    </body>

    </html>
