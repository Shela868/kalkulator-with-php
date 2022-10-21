<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator</title>
</head>
<body>
    <form name="fform" method="post" action="hasil.php">
        <tr>
            <font color="#000000">
            <blink>
                <h1>
                    <center>
                        <p>
                            kalkulator
                        </p>
                    </center>
                </h1>
            </blink>
            </font>
            <center>
                <table width="259" bgcolor="#000000">
                    <tr>
                        <td colspan="5"><center>
                            <table width="253" bgcolor="#ffffff">
                                <tr>
                                    <td>Bilangan pertama:</td>
                                    <td><input size="16" name="bil1" type="text"/></td>
                                </tr>
                            <tr>
                                <td>Bilangan kedua:</td>
                                <td><input size="16" name="bil2" type="text"/></td>
                            </tr>
                            <tr>
                                <td>Hasil:</td>
                                <td><input size="16" type="text" name="bil3"  value="<?php if (isset ($_GET['bil3'])) echo $_GET['bil3']?>"/></td>
                            </tr>
                            </table>
                        </center>

                        </td>
                    </tr>
                    <center>
                        <tr>
                            <td width="31"> <input value="+" type="submit" name="tambah"/></td>
                            <td width="27"> <input value="-" type="submit" name="kurang"/></td>
                            <td width="31"> <input value="*" type="submit" name="kali"/></td>
                            <td width="27"> <input value="/" type="submit" name="bagi"/></td>
                            <td width="94"> <input value="bersihkan" type="submit" name="input"/></td>
                        </tr>
                    </center>

                </table>
            </center>
        </tr>
    </form>
</body>
</html>