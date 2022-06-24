<?php
echo "insart success";

echo "<pre>";

$username = $_POST['username'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];

if($username == '' || $email == '' || $phone_number == ''){
    // echo "All fields are required";
    echo  '<script> alert ("All fields are required");</script>';
}else{
    echo "Every thing is OK!";
}