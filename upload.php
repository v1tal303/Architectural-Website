<?php
include("server.php");
$errors = array(); 
// CHECK FORM / SUPRESS and FIX XAMPP WARNINGS
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // check if no errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
        $title = mysqli_real_escape_string($db, $_POST['title']);
        $description = mysqli_real_escape_string($db, $_POST['description']);
        $imgtype = mysqli_real_escape_string($db, $_POST['imgtype']);

        // Check file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) array_push($errors,"Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File is too large. Maximum 5MB.");
    
        // Check type
        if(in_array($filetype, $allowed)){
            // Check if file exists before uploading
            if(file_exists("upload/" . $_SESSION['username'] . "/" . $filename)){
              array_push($errors, $filename . " already exists.");
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $_SESSION['username'] . "/" . $filename);
                $insert = $db->query("INSERT into images (imgtype, username, title, description, file_name, uploaded_on) VALUES ('".$imgtype."','".$_SESSION['username']."', '".$title."', '".$description."', '".$filename."', NOW())");
                array_push($errors,"Your image was successfully uploaded. Please check User Uploads section. ");
            } 
        } else{
          array_push($errors,"Error: Please try again."); 
        }
    } else{
      array_push($errors,"Error: " . $_FILES["photo"]["error"]);
    }
}
?>