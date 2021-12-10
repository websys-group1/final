<?php
 include "./db2.php"
  ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Sign Up Form</title>
</head>

<body>
    <form method="post" action="./signup_authenticate.php">
        <h1>Sign Up Form</h1>
        <fieldset>
            <legend>User Inputs</legend>
            <table>
                <tr>
                    <td>ID</td>
                    <td><input type="text" size="35" name="userid" placeholder="ID"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" size="35" name="userpw" placeholder="pwd"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" size="35" name="name" placeholder="Name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email">@<select name="emadress">
                            <option value="gmail.com">gmail.com</option>
                            <option value="rpi.edu">rpi.edu</option>
                        </select></td>
                </tr>
            </table>

            <input type="submit" value="Sign_Up" /><input type="reset" value="Reset" />

        </fieldset>
    </form>
</body>

</html>