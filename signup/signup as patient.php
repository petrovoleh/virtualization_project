<?php

$name=$_POST['name'];
$dob=$_POST['dob'];
$mail=$_POST['mail'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$rpass=$_POST['repass'];

require "../conn.php";
if ($pass==$rpass) {
    $sql="INSERT INTO patient (name,dob,mail,uname,password) VALUES ('$name','$dob','$mail','$uname','$pass')";

    if (pg_query($conn, $sql)) {
        echo"<script type='text/javascript'>window.alert('Successfully Completed');window.location='../index.html';</script>";
    } else {
        echo"<script type='text/javascript'>window.alert('Something went wrong,Please try again after some time');window.location='signup/signup as patient.html';</script>";
    }
} else {
    echo"<script type='text/javascript'>window.alert('Password Does Not Match,Please Try Again');window.location='signup/signup as doctor.html';</script>";
}
?>



