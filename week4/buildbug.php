<html >
  <body>
<?php 
echo "I am here";
$db = new mysqli(
  "ap-cdbr-azure-east-.cloudapp.net",
  "bf10131484f6ac",
  "b7510474",
  "weblab");
echo "I have connected";
$title = $_POST["title"];
$description = $_POST["description"];
$postDate = $_POST["dateposted"];
$fixedDate = $_POST["datefixed"];

$sql = "INSERT INTO bugs(title, desc, postDate, fixedDate) VALUES('$title','$description', '$postDate', '$fixedDate')";
mysqli_query($db,$sql);

echo "<br>";
echo "file submitted successfully!";
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
        </html>
</body>
