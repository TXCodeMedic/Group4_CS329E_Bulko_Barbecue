<?php
   $file = fopen("passwd.txt", "r");
   $users = [];
   $count = 0;
   while(!feof($file)) {
      $line = fgets($file);
      $users[$count] = trim($line);
      $count++;
   }
   fclose($file);


   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      session_start();

      // Get values submitted from the login form
      // beyonce is the only authorized user:  her name and
      // password are hardcoded into this file just cuz she's beyonce
      
      if ($username == "beyonce" && $password == "lemonade") {
         $_SESSION["username"] = $username;
         setcookie("name", $username, time() + (10));
         //setcookie("password", $password, time() + (3600));
	      header("Location: booking_page.php");
      }
      else {
         echo "<center>Invalid username or password</center>";
         echo "<br>";
      }

   }

   ?>
   <p style="text-align: center;">Please login with your name and password to proceed with placing your order:</p>
   <form method="post" align="center" action="login.php">
      <div> Username:
            <input type="text" name="username" autofocus></div>
      <div> Password:
            <input type="password" name="password"> </div>
      <input type="submit" value="Login">
   </form>
   <?php

      $username = $_POST["username"];
      $password = $_POST["password"];

      $userAndPass = $username . ":" . $password;
      for($i = 0; $i < count($users); $i++) {
         if($userAndPass == $users[$i]) {
            setcookie("name", $username, time() + (10));
            header("Location: booking_page.php");
         }
      }


?>
