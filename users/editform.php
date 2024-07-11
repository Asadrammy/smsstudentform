<?php



$server ="localhost";
$username="root";
$password="";
$db="sms";
$user_id=$_GET['user_id'];
$con= mysqli_connect($server, $username, $password,$db);
/*if($con){
echo "connected to db";}
else{
   echo"not connected to db";}*/
   $slc=" select * from users where user_id='$user_id'";
   $result=mysqli_query($con,$slc);
   while($row=mysqli_fetch_assoc($result)){
    $user_id=$row['user_id'];

    $name=$row['username'];
    $word=$row['password'];
    $role=$row['role'];
    $created_at=$row['created_at'];
   }
   ?>

<form action="update.php" method="POST">
<input type="hidden"  name="user_id" value="<?php echo $user_id;?>"><br><br>
    <label>Username:</label>
<input type="text" name="username" value="<?php echo $name;?>"><br><br>
<label>Password:</label>
<input type="password" name="password" value="<?php echo $word;?>"><br><br>
<label>Role:</label>
<input type="text" name="role" value="<?php echo $role;?>"><br><br>
<input type="datetime-local" name="created_at" value="<?php echo $created_at;?>"><br><br>
<input type="submit" Value="updated"/>
</form>