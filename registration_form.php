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
  <form method='post'>
    <label>Username: <input name="user" type="text" size="30" /> </label><br><br>
    <label>Password: <input name="pass" type="password" size="30" /> </label><br><br>
    <label>Repeat password: <input name="repeat" type="password" size="30" /> </label><br><br>
    <button id="register">Register</button>
    <input type="reset" value="Clear">
  </form>
  <br>
  <br>
  <a href="login.php">Already have an account? Log in here</a>
</body>

<?php
if (isset($_POST['user']) and isset($_POST['pass'])) {
   $conn = mysqli_connect("spring-2022.cs.utexas.edu", "cs329e_bulko_sawadk", "bit2folk3Can", "cs329e_bulko_sawadk");
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   $query = "INSERT INTO customers VALUES (\"$user\", \"$pass\");";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_execute($stmt);
    echo "<script>window.location.replace('login.php')</script>";
}
?>
</html>
