<!--I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
       Alejandro Herrera, CSC155201F -->
<html>
<head>
<title>Login</title>
<?php
require("library/HFfunctions.php");
session_start();
$conn = getConn();
unset($_COOKIE["user"]);
head();
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
     if ($_POST['submit'] == 'Enter')
     {
         $row = lookupUsername($conn, Post('username1'));
         if ($row != 0 && password_verify($_POST['password1'], $row['encrypted_password']))   
     {
            $_SESSION["username"] = Post("username1");
            $_SESSION['group'] = $row['usergroup'];
            header("Location: welcomepage.php");
        }
        else
        {
        echo '<br><b>Incorrect, try "Alex" and "1234" or create a new account.</b>';
        }
     }  
}

?>
</head>
<body>
<form method='POST'>
Username: <input type='text' name='username1' value='<?php echo Post("username1");?>'> 
Password: <input type='password' name='password1' value='<?php echo Post("password1");?>'>
<input type='submit' name='submit' value='Enter'>
</form>
<p><a href='insertUser.php'>Create a new account</a></p>
</form>
</body>
</html>

