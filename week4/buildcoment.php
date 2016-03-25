<?php 
echo "I am here";
$db = new mysqli(
  "ap-cdbr-azure-east-.cloudapp.net",
  "bf10131484f6ac",
  "b7510474",
  "weblab");
echo "I have connected";
$description = $_POST["description"];
$postDate = $_POST["dateposted"];
$sql = "INSERT INTO bugs(desc, postDate,) VALUES('$description', '$postDate')";
mysqli_query($db,$sql);
echo "<br>";
echo "file submitted successfully!";
