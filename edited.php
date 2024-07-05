<?php

$server="localhost";
$username="root";
$password="";
$db="sms";
$section_id=$_GET['section_id'];
$con=mysqli_connect($server,$username,$password,$db);
/*if($con){
   echo "connected";
}
else {
    echo "not connected";
}*/
$slc="SELECT * FROM sections WHERE section_id='$section_id'";
$result=mysqli_query($con,$slc);

while($row=mysqli_fetch_assoc($result)){
    $section_id=$row['section_id'];
  
   $section_name=$row['section_name'];
}

?>
<form action="updated.php" method="POST">
<input type="hidden" id="email" name="section_id" value="<?php echo $section_id;?>"><br><br>
<input type="text" id="section_name" name="section_name" value="<?php echo $section_name;?>"><br><br>
<button>submit</button>
</form>
