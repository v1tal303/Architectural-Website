<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>VDA - Login</title>
      <link rel="stylesheet" href="style/stylesheet.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;700&display=swap" rel="stylesheet">
<script src="components/header.js" type="text/javascript" defer></script>
<script src="components/footer.js" type="text/javascript" defer></script>
  </head>
  <body>
    <!-- Navigation -->
    <header-component></header-component>

    <!-- Login screen --> 
    <h1>Login Form</h1>
    <form action="login.php" method="post">
        <?php include('errors.php'); ?>
          <div class="container">
            <label for="user"><b>Username</b></label>
            <input type="username" placeholder="Enter Username" name="username">
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password">    
            <button type="submit" name="login_user">Login</button>
            <span class="register">Need an <a href="register.php">account?</a></span>
          </div>
      </form>
 
<!-- Footer -->
<footer-component></footer-component>

<div>
  </body>
</html>
