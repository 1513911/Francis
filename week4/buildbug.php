<?php 
include(connection.php)
$title = $_POST["title"];
$description = $_POST["description"];
$postDate = $_POST["postdate"];
$fixedDate = $_POST["fixeddat"];

$sql = INSERT INTO bugs(title, desc, postDate, fixedDate) VALUES('$title','$description', '$postDate', '$fixedDate');
mysqli_query($db,$sql);

?>
