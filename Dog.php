<!--I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
       Alejandro Herrera, CSC155201F -->
<html>
<head>
<title>Dogs</title>
<?php
require("library/HFfunctions.php");
bounce_back();
$conn = getConn();
?>
</head>
<body>
<?php head() ?>
<p><h3>Dog page</h3></p>
<form method='POST'>
<input type='submit' name='submit' value='Add One'>
<input type='submit' name='submit' value='Remove One'>
<input type='submit' name='submit' value='Clear All'>
</form>
<?php amount_buttons('dog')?>
<p><?php echo animal_pic('<img src="Animal_pics/Shepherd.jpg"height="50" width="50">', $_SESSION['dog']);?></p>
<p> You are buying <?php echo $_SESSION['dog'];?> dogs.</p>
<?php footer() ?>
</body>
</html>
