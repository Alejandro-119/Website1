<!--I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
       Alejandro Herrera, CSC155201F -->
<?php
function head()
{
   echo 'Alejandro Herrera';
   echo '<br>CSC155201F';
   echo '<br><img src="images/Ocean.jpg" height="80" width="200">';
   echo '<br><img src="Goldeneagle.jpg" height="150" width="200">';

if(isset($_COOKIE['user']))
{
     echo '<br>You are logged in as: <b>'. $_COOKIE['user'] .'</b> ';
}
else
{
     echo '';
}
}
?>



<?php
function footer()
{
  echo '<img src="images/Ocean2.jpg" height="80" width="200">';
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

if ($_SESSION['group'] == 'admin')
  {
  echo'<ul>';
  echo'<li><a href="showUsers.php">Show Users</a></li>';
  echo'<li><a href="showOrders.php">Show Orders</a></li>';
  echo'</ul>'; 
  }


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
function bounce_back($group='user')
{
session_start();
  if (!isset($_SESSION["username"]))
  {
   header("Location: loginpage.php");
  }  

if ( $group != 'user' && $_SESSION['group'] != $group )
 {
   header("Location: welcomepage.php");
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
<?php 

function getConn()
{
    $user = "aherrera13";
    $conn = mysqli_connect("localhost",$user,$user,$user);
    if (mysqli_connect_errno()) {
        echo "<b>Failed to connect to MySQL: " . mysqli_connect_error() ."</b>";
 }
    return $conn;
}

function lookupUsername($conn, $username) {
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $num_rows = mysqli_num_rows($result);
    if ($num_rows == 0) {
        return 0;
    }
    else if ($num_rows > 1) {
        header("Location: goodbye.php");
    }
    else {
        return $result->fetch_assoc();
   }

}
?>
