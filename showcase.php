<?php include("server.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>VDA - User Uploads</title>
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

    <!-- USER UPLOADED IMAGES -->
    <div class='row'>
    <div class='prcolumn'>
    <h1> VISUALS </h1>
  <hr>
    <?php 
$arc = mysqli_query($db, "SELECT * FROM images WHERE imgtype='Visual'");
while ($row = mysqli_fetch_array($arc)) {     
   echo 
   "<div class='prcontainer'>
   <img src='upload/".$row['username']."/".$row['file_name']."' class=image >
   <div class='proverlay'>
   <div class='text'>".$row['title']. " - " .$row['description']. ". Image produced by " .$row['username']."</div>
</div>
</div>";   
 } 
?>
</div>

<div class='prcolumn'>
  <h1> PLANS </h1>
  <hr>
    <?php 
$pln = mysqli_query($db, "SELECT * FROM images WHERE imgtype='Plan'");
while ($row = mysqli_fetch_array($pln)) {     
   echo 
   "<div class='prcontainer'>
   <img src='upload/".$row['username']."/".$row['file_name']."' class=image >
   <div class='proverlay'>
   <div class='text'>".$row['title']. " - " .$row['description']. ". Image produced by " .$row['username']."</div>
</div>
</div>";   
 } 
?>
</div>


<div class='prcolumn'>
<h1> ELEVATIONS </h1>
  <hr>
    <?php 
$elv = mysqli_query($db, "SELECT * FROM images WHERE imgtype='Elevation'");
while ($row = mysqli_fetch_array($elv)) {     
   echo 
   "<div class='prcontainer'>
   <img src='upload/".$row['username']."/".$row['file_name']."' class=image >
   <div class='proverlay'>
   <div class='text'>".$row['title']. " - " .$row['description']. ". Image produced by " .$row['username']."</div>
</div>
</div>";   
 } 
?>
</div>


<div class='prcolumn'>
<h1> MISQ </h1>
  <hr>
    <?php 
$misq = mysqli_query($db, "SELECT * FROM images WHERE imgtype='Misq'");
while ($row = mysqli_fetch_array($misq)) {     
   echo 
   "<div class='prcontainer'>
   <img src='upload/".$row['username']."/".$row['file_name']."' class=image >
   <div class='proverlay'>
   <div class='text'>".$row['title']. " - " .$row['description']. ". Image produced by " .$row['username']."</div>
</div>
</div>";   
 } 
?>
</div>

</div>

<!-- Footer -->
<footer-component></footer-component>

<div>
  </body>
</html>
