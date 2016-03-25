
<?php 

$db = new mysqli(
  "ap-cdbr-azure-east-.cloudapp.net",
  "bf10131484f6ac",
  "b7510474",
  "weblab");

$title = $_POST["title"];
$description = $_POST["description"];
$postDate = $_POST["dateposted"];
$fixedDate = $_POST["datefixed"];

$sql = "INSERT INTO bugs(title, desc, postDate, fixedDate) VALUES('$title','$description', '$postDate', '$fixedDate')";
mysqli_query($db,$sql);
echo 
echo "I am here";

