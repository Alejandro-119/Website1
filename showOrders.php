<!--I honor Parkland's core values by affirming that I have followed all academic integrity guidelines for this work.
       Alejandro Herrera, CSC155201F -->
<html>
<head>
<title>Show Orders</title>
<?php
require("library/HFfunctions.php");
bounce_back('admin');
$conn = getConn();
function printTable($result)
{  
   $rowcount = 0;
   if ($result->num_rows > 0)
    {
    echo "<table>";
    
    echo "<tr>";
    
    echo "<th>" . "Id" . "</th>";
    echo "<th>" . "User" . "</th>";
    echo "<th>" . "Orders" . "</th>";
    echo "<th>" . "Time" . "</th>";
    
    echo "</tr>";
   
   while($row = $result->fetch_assoc()) {
        $rowcount++;
    
    echo "<td>" . $row["id"] . "</td>";
    echo "<td>" . $row["user"] . "</td>";
    echo "<th>" . $row["orders"] . "</th>";
    echo "<th>" . $row["time"] . "</th>";
    echo "</tr>";
    }
    
    echo "</table>";
    } 
    else
    {
    echo "0 results";
    }

}


$sql = "SELECT * FROM orders;";
$result = $conn->query($sql);

?>
</head>
<body>
<?php printTable($result);?>
<?php footer(); ?>
</body>
</html>
