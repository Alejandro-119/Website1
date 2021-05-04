<!--I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
       Alejandro Herrera, CSC155201F -->

<html>
<head>
<title>New User</title>
<?php 
require("library/HFfunctions.php");
//bounce_back();

function Post($name)
{
  if (isset($_POST[$name]))
{
     return htmlspecialchars($_POST[$name]);
}
     return "";
}
$formerror = "&nbsp;";
$conn = getConn();

if (isset($_POST['submit']))
{
   if ($_POST['submit'] == 'Create New User')
      {
        if (empty($_POST['username1']))
        {
            $formerror = 'USERNAME REQUIRED';
        }
        else if (empty($_POST['password1']))
        {
            $formerror = 'PASSWORD REQUIRED';
        }
        else if ( $_POST['password1'] != $_POST['password1confirm'])
        {
            $formerror = 'PASSWORDS DO NOT MATCH';
        }
        else if ( lookupUsername($conn, $_POST['username1']) != 0 )
        {
             $formerror = 'Username already exists';
        }
        else  
        {
          echo 'time to craete a new user';  
        
        $stmt = $conn->prepare("INSERT INTO users (username, encrypted_password, email, usergroup) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $encrypted_password, $email, $usergroup);
        
        // set parameters and execute
        $username = Post('username1');
        $encrypted_password = password_hash($_POST['password1'], PASSWORD_DEFAULT);
            $email = Post('email1');
        $usergroup = Post('usergroup1');
        
        $stmt->execute();
        header("Location: loginpage.php");

         

        }
        }
        else 
        {
          header('location: welcomepage.php');
        }
   
  }
?>
</head>
<body>

<table align='center'> 
<form method='POST'>
<tr><td align='right'>New Username:</td><td><input type='text' name='username1' value='<?php echo Post("username1"); ?>'></td></tr>
<tr><td align='right'>New Password:</td><td><input type='password' name='password1' value='<?php echo Post("password155"); ?>'></td></tr>
<tr><td align='right'>Confirm Password:</td><td><input type='password' name='password1confirm' value='<?php echo Post("password1confirm");?>'></td></tr>
<tr><td align='right'>Email:</td><td><input type='text' name='email1'  value='<?php echo Post("email1");?>'></td></tr>
<tr><td align='right'>User Group:</td><td><select name='usergroup1'>
<option>user</option>
<option>admin</option>
</select>
</td></tr>
<tr><td colspan='2' align='center'><?php echo $formerror;?></td></tr>
<tr><td colspan='2' align='center'>
<input type='submit' name='submit' value='Create New User'>
<input type='submit' name='submit' value='Cancel'>
</td></tr>
</form>
</table>

</body>
</html>
