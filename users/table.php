<?php


$servername="localhost";
$username="root";
$password="";
$db="sms";
$con= mysqli_connect($servername, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from users";
   $result=mysqli_query($con,$slc);
   echo "<table border='2px'>";
   echo "<tr>";
    echo "<th>"."User id."."</th>";
    echo "<th>"."Username"."</th>";
    echo "<th>"."Password"."</th>";
    echo "<th>"."Role"."</th>";
    echo "<th>"."Created at"."</th>";
    echo "<th colspan='2'>"."change"."</th>";
   echo "</tr>";
   while($row=mysqli_fetch_assoc($result)){
   $user_id=$row['user_id'];
   echo "<tr>";
   echo "<td>".$row['user_id']."</td>";
   echo "<td>".$row['username']."</td>";
   echo "<td>".$row['password']."</td>";
   echo "<td>".$row['role']."</td>";
   echo "<td>".$row['created_at']."</td>";
   echo "<td>"."<a href='editform.php?user_id=".$user_id."'>"."Edit"."</a>"."</td>";
   echo "<td>"."<a href='delete.php?user_id=".$user_id."'>"."Delete"."</a>"."</td>";

    echo "</tr>";
}
echo "</table>";

?>