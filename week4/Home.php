
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
<a href="logout.php" style="font-size:18px">Logout</a>
<br>
<div id="content"
     <?php
     //Establish connection with our database
     include("connection.php");
     //select everything from our bugs table where the ID is right
     $sql="SELECT*FROM bugs WHERE bugs.ID = "$_GET["id"];
     //fetch our result from the database
     $result=mysqli_query($db,$sql);
     //we scan through each row in the response
     $row = mysqli_fetch_assoc($result);
     //get the title and id from the bug
     $bugTitle = $row['title'];
     $bugID = $row['ID'];
     $bugDesc = $row['desc'];

     echo "<h2>".$bugTitle."</h2>
     echo "<p>".$bugDesc."</p>";

     ?>
    </div>
</body>
</html>
