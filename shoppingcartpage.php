<!--I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
       Alejandro Herrera, CSC155201F -->
<html>
<head>
<title>Shopping Cart</title>
<?php
require("library/HFfunctions.php");
bounce_back();
$conn = getConn();
function insertNewRecord($conn)
{
    $stmt = $conn->prepare("INSERT INTO orders (user, orders) VALUES (?, ?)");
    $stmt->bind_param("ss", $user, $orders);
    
    $user = $_SESSION['username'];
    $orders = $_SESSION['dog'].' Dogs, '.$_SESSION['cat'].' Cats, '.$_SESSION['bird'].' Birds, and '.$_SESSION['snake'].' Snakes';
    $stmt->execute(); 
}
        insertNewRecord($conn);

?>
</head>
<body>
<?php head() ?>
<p><h3>Shopping Cart</h3></p>
<p> <?php echo animal_pic('<img src="Animal_pics/Shepherd.jpg"height="50" width="50">', $_SESSION['dog']);?></p>
<p> <?php echo animal_pic('<img src="Animal_pics/Cat.jpg"height="50" width="50">', $_SESSION['cat']);?></p>
<p> <?php echo animal_pic('<img src="Animal_pics/Bird.jpg"height="50" width="50">', $_SESSION['bird']);?></p>
<p> <?php echo animal_pic('<img src="Animal_pics/Snake.jpg"height="50" width="50">', $_SESSION['snake']);?></p>
<?php footer() ?>
</body>
</html>
