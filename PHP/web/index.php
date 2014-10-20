<html>
    <head>
        <meta http-equiv = "Content-Type" Content = "text/html"; charset = "gb2312">
        <title>register form</title>
    </head>

    <body>
        <form name = "frmRegister" method = "post" action = "register.php">
            <table width = "330" border = "0" align = "center" cellpadding = "5" bgcolor = "#eeeeee">
                <tr>
                    <td width = "40%">Nickname:</td>
                    <td><input name = "nickname" type = "text" id = "nickname"></td>
                </tr>
                <tr>
                    <td width = "40%">Password:</td>
                    <td><input name = "password" type = "password" id = "password"></td>
                </tr>
                <tr>
                    <td width = "40%">Repeat Password:</td>
                    <td><input name = "repeat_pwd" type = "password" id = "Repeat_pwd"></td>
                </tr>
                <tr>
                    <td colspan = "2" align = "center">
                        <input type = "submit" name = "submit" value = "Submit">
                        <input type = "reset" name "reset" value = "Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
