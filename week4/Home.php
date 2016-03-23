
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
<br><br><br><br>
<forms methord="post"action="">
    <fieldset>
        <legend>Registration Form</legend>
        <table width="400" border="0" cellpadding="10" cellspacing="10">
        <tr>
        <td colspan="2" align="centre" class="error"><?php echo $msg;?></td>
        </tr>
        <tr>
        <td style="font-weight:bold">
        <div align="right"><label for="name">Name</label></div>
        </td>
        <td>
        <input name="name" type="text" class="input" size="25" required/>
        </td>
        </tr>
        <tr>
        <td style="font-weight:bold">
        <div align="right">
        <label for="email">Email</label>
        </div>
        </td>
        <td>
        <input name="email" type="email" class="input" size="25" required/>
        </td>
        </tr>
        <tr>
        <td hight="23" style="font-weight: bold">
        <div align="right">
        <label for="password">password</label>
        </div>
        </td>
        </td>
        <input name="password" type="password" class="inspired" size="25" required />
        </td>
        </tr>
        </tr>
        <td hight="23"></td>
        <td>
        <div align="right">
        <input type="submit" name="submit" value="Register!" />
        </div>
        </td>
        </tr>
        </table>
        </fieldset>
        
        </form>

</body>
</html>
