<?php
$server="localhost";
$username="root";
$password="";
$db="sms";
$con=mysqli_connect($server,$username,$password,$db);
$sql="SELECT * FROM `classes`";
$result=mysqli_query($con,$sql);


/*$result=mysqli_query($con,$slc);
$options"";
while($row=mysqli_fetch_array($result))
{
    $options=$options."<option>$row[1]</options>";
}*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <select>
        <?php while ($row=mysqli_fetch_array($result)):;?>
        <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
        <?php endwhile;?>
</select>
<!--<select><?php //echo $options ;?></select>-->
</body>
</html>