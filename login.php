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
         echo "<script>alert('')</script>";
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index_style.css">
    <title>Login Page</title>
</head>

<body>
    <header>
      <section id="header-top">
        <a href="index.html"><img src="images/BB_Logo.jpg" alt="missing_logo"></a>
      </section>
      <br>
      <!-- Nav bar -->
      <div class="topnav">
        <a href="contact_page.html">Contact Us</a>
        <a href="booking_page.php">Booking</a>
        <a href="menu.pdf" target="_blank">Menu</a>
      </div>
    </header>
    <br><br>
    <form id="login_form">
        <label>Username: <input name="user" type="text" size="30" /> </label><br><br>
        <label>Password: <input name="pass" type="password" size="30" /> </label><br><br>
        <button id="register">Log In</button>
        <input type="reset" value="Clear">
    </form>
    <br>
    <br>
    <a href="registration_form.html">Don't have an account? Register here!</a>
</body>
</html>
LOGIN;
?>