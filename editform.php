<?php

$server="localhost";
$username="root";
$password="";
$db="sms";
$class_id=$_GET['class_id'];
$con=mysqli_connect($server,$username,$password,$db);
/*if($con){
   echo "connected";
}
else {
    echo "not connected";
}*/
$slc="SELECT * FROM classes WHERE class_id='$class_id'";
$result=mysqli_query($con,$slc);

while($row=mysqli_fetch_assoc($result)){
    $class_id=$row['class_id'];
  
   $class_name=$row['class_name'];
}

?>
<form action="update.php" method="POST">
<input type="hidden" id="email" name="class_id" value="<?php echo $class_id;?>"><br><br>
<input type="text" id="class_name" name="class_name" value="<?php echo $class_name;?>"><br><br>
<button>submit</button>
</form>

