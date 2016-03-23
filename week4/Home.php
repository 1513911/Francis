
<?php 
include("check.php");
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
<br>
<form>
  include("connection.php");
$sql="SELECT*FROM bugs";

$result=mysqli_query($db,$sql);
while($row=mysqli_fetch_assoc($result)){
$bugTitle = $row['title'];
$bugID = $row['ID'];
echo '<a href="bug.php?id="'.$bugID.'>'.$bugTitle.'</a></br>';
  
</form>
</body>
</html>
