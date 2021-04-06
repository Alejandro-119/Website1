<!--I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
       Alejandro Herrera, CSC155201F -->
<html>
<head>
<title>Logout</title>
<?php
require("library/HFfunctions.php");
session_start();
unset($_SESSION["username"]);
header("refresh:5;url=loginpage.php");
?>
</head>
<body>
<p><h2>Goodbye!</h2></p>
</body>
</html>
