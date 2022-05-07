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
    <form method = "post" action = "login.php">
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
            <input type = "submit" name = "login" value = "Log In">
        </div>
    </form>
</body>

<?php

if (isset($_POST['user']) and isset($_POST['pass'])) {
   $conn = mysqli_connect("spring-2022.cs.utexas.edu", "cs329e_bulko_sawadk", "bit2folk3Can", "cs329e_bulko_sawadk");
   $query = "SELECT user, pass FROM customers";
   $stmt = mysqli_prepare($conn, $query);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);
   while($row = mysqli_fetch_assoc($result)) {
      $test = $row['user'];
      if ($row['user'] == $_POST['user'] and $row['pass'] == $_POST['pass']) {
         echo "<script>alert('logged in')</script>";
         setcookie("user", $_POST['user'], time()+120, "/");
         echo "<script>window.location.replace('booking_page.html')</script>";
      }
   }
}
?>
</html>
