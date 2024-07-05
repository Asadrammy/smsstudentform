<?php
$insert=false;
if(isset($_POST['class_name']))
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
$sql="SELECT * FROM `classes`";
$result=mysqli_query($con,$sql);
//echo "connecting to the database "
$class_name=$_POST['class_name'];


$sql="INSERT INTO `sms`.`classes` (`class_name`) VALUES ('$class_name');";
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
$server="localhost";
$username="root";
$password="";
$db="sms";
$con=mysqli_connect($server,$username,$password,$db);
if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
}
$sql="SELECT * FROM `classes`";
$result=mysqli_query($con,$sql);
?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sms</title>
</head>
<body>
    <form action="sms.php" method="POST">
    <label>Class name:</label>
<input type="text" id="class_name" name="class_name" placeholder="Enter your class name"><br><br>
<button>submit</button>
</form>
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Form</title>
</head>
<body>
    <form action="sms.php" method="POST">
        <label for="class">Class:</label>
        <select>
        <?php while ($row=mysqli_fetch_array($result)):;?>
        <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
        <?php endwhile;?>
        </select>
        <button type="submit">Submit</button>
    </form>