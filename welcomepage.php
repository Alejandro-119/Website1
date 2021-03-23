<!--I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
       Alejandro Herrera, CSC155201F -->
<html>
<head>
<title>Welcome</title>
<?php
require("library/HFfunctions.php");
bounce_back();
?>
</head>
<body>
<?php head() ?>
<p>Welcome!!</p>
<?php echo $_SESSION["username"];?>
<?php footer() ?>
</body>
</html>
