<?php
    include "config.php";
    session_start();
    if (isset($_SESSION['user_name']) != "") {
        header("Location: Home.php");
    }
    if (isset($_POST['btn-login'])) {
        $email = mysql_real_escape_string($_POST['email']);
        $pass = mysql_real_escape_string($_POST['pass']);
        $email = trim($email);
        $query = "SELECT user FROM Users WHERE user='$email' AND password='$pass'";
        $result = mysqli_query($mysqli, $query)or die(mysqli_error());
        $num_row = mysqli_num_rows($result);
        $row = mysqli_fetch_array($result);
        if ($num_row >= 1) {
            echo 'true';
            $_SESSION['user_name'] = $row['user'];
            header("Location:Home.php");
        } else {
?>
        <script>alert('Username / Password Seems Wrong !');</script>
        <?php
        }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Galeria</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
    <body>
        <center>
            <div id="login-form">
                <form method="post">
                    <table align="center" width="30%" border="0">
                        <tr>
                            <td><input type="text" name="email" placeholder="Your Email" required /></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="pass" placeholder="Your Password" required /></td>
                        </tr>
                        <tr>
                            <td><button type="submit" name="btn-login">Entrar</button></td>
                        </tr>
                       
                    </table>
                </form>
            </div>
        </center>
    </body>
</html>