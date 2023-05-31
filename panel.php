<?php
    session_start();

    if (!isset($_SESSION["auth"])) {
        header("Location: login.php");
    }

    require_once("App/config.php");
    require_once("App/App.php");

    $app = new App();

    $txt = filter_input(INPUT_POST, "txtUrl", FILTER_SANITIZE_URL);

    if (isset($txt)) {
        $app->write($txt);
    }

    // echo "<p style='color: white; padding: 10px'>" . SITEURL . "/" . $app->getRandomString(URLLENGTH) . "</p>";
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Easy URL Shortener</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>

    <body>
        <div class="max-width bg-white padding">
            <div>
                <div style="float: left; width: 500px">
                    <h1>Easy URL Shortener - Panel</h1>
                </div>
                <div>
                    <div style="float: right; text-align: right; width: 50px">
                        <a href="logout.php">Sair</a>
                    </div>
                </div>
                <div style="clear:both"></div>
            </div>
            
            <br />
            <p><?= $txt ?? ""; ?></p>

            <div id="dvForm" onsubmit="return createURL()">
                <form method="post">
                    <input class="input" type="text" name="txtUrl" id="txtUrl" placeholder="Your URL here" />
                    <input class="input" type="submit" name="" value="Create" />
                </form>
                <p id="pResult">&nbsp;</p>
            </div>

            <div id="dvTable">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ORIGINAL URL</th>
                            <th>NEW URL</th>
                            <th>ACCESS</th>
                            <th>REMOVE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1324</td>
                            <td>
                                <a href="">https://www.acme.com/params?param1=xyz&amp;param2=123</a>
                            </td>
                            <td>
                                <input class="input" type="text" value="shortedlink1" />
                            </td>
                            <td>55</td>
                            <td>
                                <input type="button" class="input btn-remove" value="REMOVE" onclick="remove(1)" />
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>2</td>
                            <td>
                                <a href="#">https://www.acme.com/params?param1=xyz&amp;param2=123</a>
                            </td>
                            <td>
                                <a href="#">shortedlink2</a>
                            </td>
                            <td>21</td>
                            <td>
                                <input type="button" class="input btn-remove" value="REMOVE" />
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <td>3</td>
                            <td>
                                <a href="#">https://www.acme.com/params?param1=xyz&amp;param2=123</a>
                            </td>
                            <td>
                                <a href="#">shortedlink3</a>
                            </td>
                            <td>139</td>
                            <td>
                                <input type="button" class="input btn-remove" value="REMOVE" />
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <td>4</td>
                            <td>
                                <a href="#">https://www.acme.com/params?param1=xyz&amp;param2=123</a>
                            </td>
                            <td>
                                <a href="#">shortedlink4</a>
                            </td>
                            <td>17</td>
                            <td>
                                <input type="button" class="input btn-remove" value="REMOVE" />
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <td>5</td>
                            <td>
                                <a href="#">https://www.acme.com/params?param1=xyz&amp;param2=123</a>
                            </td>
                            <td>
                                <a href="#">shortedlink5</a>
                            </td>
                            <td>26</td>
                            <td>
                                <input type="button" class="input btn-remove" value="REMOVE" />
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>

            <br />
            <p><a href="#">Easy URL Shortner&trade; &copy;2023</a></p>
        </div>

        <script type="text/javascript" src="js/script.js"></script>
    </body>

</html>