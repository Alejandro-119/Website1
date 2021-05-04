<!--I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
       Alejandro Herrera, CSC155201F -->
<html>
<head>
<title>Welcome</title>
<?php
require("library/HFfunctions.php");
bounce_back();
$conn = getConn();
?>
</head>
<body>
<?php head() ?>
<?php
function Post($name)
{
  if (isset($_POST[$name]))
{
     return htmlspecialchars($_POST[$name]);
}
     return "";
}
 if (isset($_POST['submit']))
{
 setcookie('user', Post('clientname'), time() + (86400 * 30), "/");
 echo '<br>You are logged in as: <b>'. Post('clientname') .'</b> ';
}
?>
<p>Welcome!!</p>
<form method="POST">
Name:<input type='text' name='clientname' value='<?php echo Post('clientname');?>'>
<input type='submit' name='submit' value='Enter'>
</form>
<?php footer() ?>
</body>
</html>
