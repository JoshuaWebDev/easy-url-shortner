<?php
    session_start();

    if (isset($_SESSION["auth"])) {
        header("Location: panel.php");
    }

    require_once("App/config.php");

    $result = "";

    $txtUserKey = filter_input(INPUT_POST, "txtUserKey", FILTER_SANITIZE_STRING);

    if ($txtUserKey) {
        if ($txtUserKey == USERKEY) {
            $_SESSION["auth"] = true;
            header("Location: panel.php");
        } else {
            $result = "Invalid user key";       
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Login - Easy URL Shortener</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>

    <body>
        <div class="max-width-login bg-white padding" style="margin-top:15%">
            <h1>Easy URL Shortener</h1>
            <form method="post" onsubmit="return login()">
                <input class="input-full-width" type="text" name="txtUserKey" id="txtUserKey" placeholder="Put your key here" />
                <button class="input-full-width btn-login" type="submit" name="button">Login</button>
            </form>
            <p id="pResult"><?= $result; ?>&nbsp;</p>

            <br /><br />
            <p><a href="#">Easy URL Shortner&trade; &copy;2023</a></p>
        </div>
        <script type="text/javascript" src="js/script.js"></script>
    </body>

</html>