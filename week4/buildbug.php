
<?php 

include("connection.php");
include("check.php");
$sql1 = "SELECT userID FROM users WHERE username = '$user_check'";
$result = mysqli_query($db,$sql1);
$row = $result->fetch_array();
$user = $row['userID'];


$title = $_POST['title'];
$description = $_POST['description'];
$postDate = $_POST['dateposted'];
$fixedDate = $_POST['datefixed'];

$sql = "INSERT INTO bugs(title, desc, postDate, fixDate, userID) VALUES('$title','$description', '$postDate', '$fixedDate', '$user')";
$db->query($sql);
//mysqli_query($db,$sql);

echo "<p>{$title} {$description} {$postDate} {$fixedDate} {$user}"
 
//header("location:bugpostresponse.html");

