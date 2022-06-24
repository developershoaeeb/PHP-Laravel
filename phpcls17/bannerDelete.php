<?php
require './controller/dbConflig.php';

$banner_id = $_GET ['banner_id'];
$updateQry = "UPDATE banners GET title= '{$title}', sub_title= '{$sub_title}', details= '{$details}' WHERE id = '$banner_id'";
$isSubmited     =  mysqli_query($dbCon, $updateQry);

if ($isSubmited == true) {
    $message   =  "Banner Update Successfull";
     echo $message;
} else {
    $message    =  "Update Faild";
}  
//header("Location: ../bannerAdd.php?msg={$message}");

?>