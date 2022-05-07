<?php
error_reporting(E_ALL);
ini_set("display_errors", "on");

if (isset($_POST['user']) and isset($_POST['pass'])) {
   $conn = mysqli_connect("spring-2022.cs.utexas.edu", "cs329e_bulko_sawadk", "bit2folk3Can", "cs329e_bulko_sawadk");
   $query = "SELECT user, pass FROM customers";
   $stmt = mysqli_prepare($conn, $query);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);
   while($row = mysqli_fetch_assoc($result)) {
      if ($row['user'] == $_POST['user'] and $row['pass'] == $_POST['pass']) {
         setcookie("user", $_POST['user'], time()+120, "/");
         header("Location: booking_page.php");
      }
   }
}

$script = $_SERVER['PHP_SELF'];
print <<<LOGIN
<!DOCTYPE html>

<html lang="en">

<head>
	<title>Project Login Page</title>
	<meta charset="UTF-8">
	<meta name="description" content="Login Page">
	<meta name="author" content="Sawad Kazi">
    <style>
        div, h3 {
            margin: auto;
            width: 10%;
        }
    </style>
</head>

<body>
    <h3>Login</h3><br>
    <form method = "post" action = "$script">
        <table align = "center" width = "30%">
            <tr>
                <th>Username</th>
                <td><input type="text" name="user" required></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="pass" required></td>
            </tr>
        </table>
        <div>
            <input type = "submit" name = "login" value = "Log In" />&nbsp;
            <input type = "submit" name = "register" value = "Register" />
        </div>
    </form>
</body>
LOGIN;
?>