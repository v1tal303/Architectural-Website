<?php 
include("upload.php");
  if (!isset($_SESSION['username'])) {
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>VDA - Welcome <?php echo $_SESSION['username'] ?></title>
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

      	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- User -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<h2>Welcome <?php echo $_SESSION['username']; ?> - Please upload your image to showcase</h2>
      <hr>
    
    <!-- Upload form -->
      <form action="quote.php" method="post" enctype="multipart/form-data">
      <?php include('errors.php'); ?>
      <label for="imgtype">Choose image type:</label>
          <select name="imgtype" id="imptype">
                <option value="Visual">Visual</option>
                <option value="Plan">Plan</option>
                <option value="Elevation">Elevation</option>
                <option value="Misq">Misq</option>
          </select>
          <input type="title" placeholder="Enter Image Title" name="title" require>
          <input type="description" placeholder="Enter Image Description" name="description" require>
          <input type="file" name="photo" id="fileSelect">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <p> <a href="quote.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>

<!-- Footer -->
<footer-component></footer-component>

<div>
  </body>
</html>
