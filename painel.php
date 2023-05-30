<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Easy URL Shortener</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>

    <body>
        <div class="max-width bg-white padding">
            <h1>Easy URL Shortener</h1>
            <br />
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
                            <td>1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="button" class="input btn-remove" value="REMOVE" onclick="remove(1)" />
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>1</td>
                            <td>
                                <a href="">https://www.acme.com/params?param1=xyz&amp;param2=123</a>
                            </td>
                            <td>
                                <a href="shortedlink1">shortedlink1</a>
                            </td>
                            <td>55</td>
                            <td>
                                <input type="button" class="input btn-remove" value="REMOVE" />
                            </td>
                        </tr> -->
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