<?php



$server ="localhost";
$username="root";
$password="";
$db="sms";
$student_id=$_GET['student_id'];
$con= mysqli_connect($server, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from students where student_id='$student_id'";
   $result=mysqli_query($con,$slc);
   while($row=mysqli_fetch_assoc($result)){
    $student_id=$row['student_id'];

    $user_id=$row['user_id'];
    $student_name=$row['student_name'];
    $father_name=$row['father_name'];
    $date_of_birth=$row['date_of_birth'];
    $gender=$row['gender'];
    $address=$row['address'];
    $phone=$row['phone'];
    $email=$row['email'];
    $enrolled_date=$row['enrolled_date'];
    $father_cnic=$row['father_cnic'];
    $student_bform=$row['student_bform'];
  
   }
   ?>

<form action="update.php" method="POST">
<input type="hidden" id="student" name="student_id" value="<?php echo $student_id;?>"><br><br>
    <label>user_id:</label>
<input type="id" id="student" name="user_id" value="<?php echo $user_id;?>"><br><br>
<label>Student name:</label>
<input type="text" id="name" name="student_name" value="<?php echo $student_name;?>"><br><br>
<label>Father name:</label>
<input type="text" id="father" name="father_name" value="<?php echo $father_name;?>"><br><br>
<label>Date of Birth:</label>
<input type="date" id="birthday" name="date_of_birth" value="<?php echo $date_of_birth;?>" ><br><br>
<h4>Gender</h4>
<label>Male</label>
<input type="radio" id="male" name="gender" value="male"><br>
<label>Female</label>
<input type="radio" id="female" name="gender" value="female"><br>
<label>other</label>
<input type="radio" id="other" name="gender" value="other"><br><br>
<label>Address:</label>
<input type="text" id="address" name="address" value="<?php echo $address;?>"><br><br>
<label>Phone:</label>
<input type="phone" id="phone" name="phone" value="<?php echo $phone;?>"><br><br>
<label>Email:</label>
<input type="email" id="email" name="email" value="<?php echo $email;?>"><br><br>
<label>Enrolled date:</label>
<input type="date" id="enrolled" name="enrolled_date" value="<?php echo $enrolled_date;?>"><br><br>
<label>Father cnic:</label>
<input type="cnic" id="cnic" name="father_cnic" value="<?php echo $father_cnic;?>"><br><br>
<label>student B-form:</label>
<input type="cnic" id="form" name="student_bform" value="<?php echo $student_bform;?>"><br><br>
<input type="submit" Value="update"/>
</form>