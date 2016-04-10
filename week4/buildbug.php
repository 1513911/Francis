
<?php 

include("connection.php");

$title = $_POST['title'];
$description = $_POST['description'];
$postDate = $_POST['dateposted'];
$fixedDate = $_POST['datefixed'];

$sql = "INSERT INTO bugs(title, desc, postDate, fixDate) VALUES('$title','$description', '$postDate', '$fixedDate')";
mysqli_query($db,$sql);
 
header("location:bugpostresponse.html");

