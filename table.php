<?php

$server="localhost";
$username="root";
$password="";
$db="sms";
$con=mysqli_connect($server,$username,$password,$db);
/*if($con){
   echo "connected";
}
else {
    echo "not connected";
}*/
$slc="SELECT * FROM classes";
$result=mysqli_query($con,$slc);
echo "<table border='2px'>";
echo "<tr>";
echo "<th>"."CLASS ID"."</th>";
echo "<th>"."CLASS NAME"."</th>";
echo "<th colspan='2'>"."Action"."</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
    $class_id=$row['class_id'];
    echo "<tr>";
    echo "<td>".$row['class_id']."</td>";
    echo "<td>".$row['class_name']."</td>";
    echo "<td>"."<a href='editform.php?class_id=".$class_id."'>"."Edit"."</a>"."</td>";
    echo "<td>"."<a href='delete.php?class_id=".$class_id."'>"."delete"."</a>"."</td>";

    echo "</tr>";
}
echo "</table>";
?>
