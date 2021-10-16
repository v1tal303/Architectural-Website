<?php include('server.php') ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>VDA - Register an account</title>
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

    <!-- Register Screen --> 
			<h2>Register</h2>
        <form action="register.php" method="post" autocomplete="off">
          <?php include('errors.php'); ?>
            <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="username" name="username" placeholder="Username" value="<?php echo $username; ?>">
            <label for="password"><b>Password</b></label>
            <input type="password" name="password_1" placeholder="Password">
            <label for="password"><b>Repeat password</b></label>
            <input type="password" name="password_2" placeholder="Password">
            <label for="email"><b>Email</b></label>
            <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
               <button type="submit" class="btn" name="reg_user">Register</button>
          </div>
        </form>

 
<!-- Footer -->
<footer-component></footer-component>
  </body>
</html>
