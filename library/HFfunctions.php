<!--I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
       Alejandro Herrera, CSC155201F -->
<?php
function head()
{
   echo '<br>Alejandro Herrera';
   echo '<br>CSC155201F';
   echo '<br><img src="library/Goldeneagle.jpg" height="150" width="200">';
}
?>

<?php
function footer()
{
echo'<ul>';
  echo'<li><a href="loginpage.php">Login</a></li>';
  echo'<li><a href="welcomepage.php">Welcome Page</a></li>';
  echo'<li><a href="Dog.php">Dog Page</a></li>';
  echo'<li><a href="Cat.php">Cat Page</a></li>';
  echo'<li><a href="Bird.php">Bird Page</a></li>';
  echo'<li><a href="Snake.php">Snake Page</a></li>';
  echo'<li><a href="shoppingcartpage.php">Shopping Cart</a></li>';
  echo'<li><a href="logoutpage.php">Logout</a></li>';
echo'</ul>';
}
?>

<?php
function animal_pic($pic, $times)
{
  for($i=0;$i<$times;$i++)
  {
   echo $pic;
  }
}

?>

<?php
function bounce_back()
{
session_start();
  if (!isset($_SESSION["username"]))
  {
   header("Location: loginpage.php");
  }  
}
?>


<?php
function amount_buttons($animals)
{
if (!isset($_SESSION["$animals"]))
   $_SESSION["$animals"]=0;
if (isset($_POST["submit"]))
{
 if ($_POST["submit"] == "Add One")
   $_SESSION["$animals"]++;
 if ($_POST["submit"] == "Remove One")
   $_SESSION["$animals"]--;
 if ($_POST["submit"] == "Clear All")
   $_SESSION["$animals"]=0;

}
}
?>

