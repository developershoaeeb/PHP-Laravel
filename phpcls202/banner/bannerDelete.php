<?php
require '../controller/dbConflig.php';

$banner_id = $_GET ['banner_id'];
$updateQry = "UPDATE banners SET active_status=3 WHERE id = '$banner_id'";
$isSubmited     =  mysqli_query($dbCon, $updateQry);

if ($isSubmited == true) {
    $message   =  "Banner Deleted Successfull";
     echo $message;
} else {
    $message    =  "Deleted Faild";
}  
header("Location: ./banner.php?msg={$message}");

?>