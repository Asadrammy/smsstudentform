<?php



$server ="localhost";
$username="root";
$password="";
$db="sms";
$teacher_id=$_GET['teacher_id'];
$con= mysqli_connect($server, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from teachers where teacher_id='$teacher_id'";
   $result=mysqli_query($con,$slc);
   while($row=mysqli_fetch_assoc($result)){
    $teacher_id=$row['teacher_id'];

    $user_id=$row['user_id'];
    $first_name=$row['first_name'];
    $last_name=$row['last_name'];
    $date_of_birth=$row['date_of_birth'];
    $gender=$row['gender'];
    $address=$row['address'];
    $phone=$row['phone'];
    $email=$row['email'];
    $hire_date=$row['hire_date'];
    
  
   }
   ?>

<form action="updated.php" method="POST">
<input type="hidden" id="teacher" name="teacher_id" value="<?php echo $teacher_id;?>"><br><br>
    <label>user_id:</label>
<input type="id" name="user_id" value="<?php echo $user_id;?>"><br><br>
<label>first name:</label>
<input type="text" name="first_name" value="<?php echo $first_name;?>"><br><br>
<label>last name:</label>
<input type="text" name="last_name" value="<?php echo $last_name;?>"><br><br>
<label>Date of Birth:</label>
<input type="date" name="date_of_birth" value="<?php echo $date_of_birth;?>" ><br><br>
<h4>Gender</h4>
<label>Male</label>
<input type="radio"name="gender" value="male"><br>
<label>Female</label>
<input type="radio"  name="gender" value="female"><br>
<label>other</label>
<input type="radio"  name="gender" value="other"><br><br>
<label>Address:</label>
<input type="text" name="address" value="<?php echo $address;?>"><br><br>
<label>Phone:</label>
<input type="phone"  name="phone" value="<?php echo $phone;?>"><br><br>
<label>Email:</label>
<input type="email"  name="email" value="<?php echo $email;?>"><br><br>
<label>hire date:</label>
<input type="date" name="hire_date" value="<?php echo $hire_date;?>"><br><br>

<input type="submit" Value="updated"/>
</form>