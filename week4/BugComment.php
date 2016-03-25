<?php 
include("check.php");
include("connection.php")
?> 

<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1 class="hello">Hello, <em><?php echo $login_user;?>!</em></h1>
<br><br><br>

<br>
<a href="logout.php" style="font-size:18px">Logout</a>
<br><br><br><br>
<form method="post"action="buildcoment.php">
<legend>Bug comment</legend>
        <table width="400" border="0"cellpadding="10"cellspacing="10">
        <tr>
        <td colspan="2" align="center" class="error"><?php echo $msg;?></td>
        </tr>
        <tr>
        <td style="font-weight:bold">
        <div align="right"><label for="name">Username:</label></div>
        </td>
        <td>
        <input name="name" type="text" class="input" size="25" required/>
        </td>
        </tr>
        <tr>
        <td style="font-weight:bold">
        <div align="right">
        <label for="date">Date:</label>
        </section>
        </div>
        </td>
        <td>
         
        <input name="date" type="date" class="input" size="25" required/>
        </td>
        </tr>
        <tr>
        <td style="font-weight: bold">
        <div align="right">
        <label>Comment:</label></td>
<td><textarea name="comments" cols="45" rows="5"required>
</textarea>
        </td>
        </tr>
        </tr>
        <br><br>
        <br>
        <td style="font-weight:bold">
        <div align="right"><label for="title">bug&commentID:</label></div>
        </td>
        <td>
        <input name="title" type="text" class="input" size="25" required/
        </td>
        <tr>
            <tr>
        <td hight="23"></td>
        <td>
        <div align="right">
        <input type="submit" name="submit" value="Post!" />
        
                </form>
                <div>
                    <fieldset>
                       <form>
            <head>
    <meta charset="UTF-8">
    <title>file upload</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">

    <br><br>
    <br>
    <?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

            </form>
Status API Training Shop Blog About
© 2016 GitHub, Inc. Terms Privacy Security Contact Help 
                    </fieldset>
                    </div>
        </body>
</html>
