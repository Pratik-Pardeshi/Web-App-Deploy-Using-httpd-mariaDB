<?php
session_start();
header('location:login.php');

$ec2_ip = 'your_ec2_instance_ip';
$connection=mysqli_connect($ec2_ip,'root', 'root');
mysqli_select_db($connection, 'user_accounts');

$name    =  $_POST['user'];
$fName   =  $_POST['fname'];
$lName   =  $_POST['lname'];
$Country =  $_POST['country'];
$State   =  $_POST['state'];
$pwd     = $_POST['password'];

$sql_query="SELECT * FROM user WHERE username='$name'";
$sql_result=mysqli_query($connection,$sql_query);
$num=mysqli_num_rows($sql_result);

if ($num==1){
    echo "This Username ($name) has already been taken";
} else {
    $reg_query="INSERT INTO user(username,fName,lName,state,country, password) VALUES ('$name', '$fName','$lName','$State','$Country','$pwd')";
    mysqli_query($connection,$reg_query);
    //echo "$name  :  $fName  :   $lName  :  $Country  :  $State  :  $pwd";
    //echo "You have been successfully registered as a user.";
}
?>