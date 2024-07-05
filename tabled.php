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
$slc="SELECT * FROM sections";
$result=mysqli_query($con,$slc);
echo "<table border='2px'>";
echo "<tr>";
echo "<th>"."SECTION ID"."</th>";
echo "<th>"."SECTION NAME"."</th>";
echo "<th colspan='2'>"."Action"."</th>";
echo "</tr>";
while($row=mysqli_fetch_assoc($result)){
    $section_id=$row['section_id'];
    echo "<tr>";
    echo "<td>".$row['section_id']."</td>";
    echo "<td>".$row['section_name']."</td>";
    echo "<td>"."<a href='edited.php?section_id=".$section_id."'>"."Edit"."</a>"."</td>";
    echo "<td>"."<a href='deleted.php?section_id=".$section_id."'>"."delete"."</a>"."</td>";

    echo "</tr>";
}
echo "</table>";
?>