<!--I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
       Alejandro Herrera, CSC155201F -->
<html>
<head>
<title>Login</title>
<?php
require("library/HFfunctions.php");
session_start();
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
        if ($_POST['username1'] == 'Alex' and $_POST['password1'] == '1010')
        {
            $_SESSION["username"] = $_POST["username1"];
            header("Location: welcomepage.php");
        }
        else
        {
        echo 'Incorrect, try "Alex" and "1010"';
        }
     }  
}

?>
</head>
<?php head() ?>
<body>
<form method='POST'>
Username: <input type='text' name='username1' value='<?php echo Post("username1");?>'> 
Password: <input type='password' name='password1' value='<?php echo Post("password1");?>'>
<input type='submit' name='submit' value='Enter'>
</form>
<?php footer() ?>
</form>
</body>
</html>

