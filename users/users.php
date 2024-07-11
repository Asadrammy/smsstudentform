<?php
$insert=false;
if(isset($_POST['username']))
{
$server="localhost";
$username="root";
$password="";
$db="sms";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
}
//echo "connecting to the database "
$name=$_POST['username'];
$word=$_POST['password'];
$role=$_POST['role'];
$created_at=$_POST['created_at'];

$sql="INSERT INTO `users` (`username`, `password`, `role`, `created_at`) VALUES ('$name', '$word', '$role', '$created_at');";
//echo $sql;

if ($con->query($sql)==true){
    //echo"successfully inserted";
    $insert=true;
}
else{
echo"ERROR:$sql <br> $con->error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external CSS file -->
</head>
<body>
    <div class="container">
        <h2>User Registration Form</h2>
        <form action="users.php" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter password" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <input type="text" id="role" name="role" placeholder="Enter your role">
            </div>
            <div class="form-group">
                <label for="created_at">Created at:</label>
                <input type="datetime-local" id="created_at" name="created_at">
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>