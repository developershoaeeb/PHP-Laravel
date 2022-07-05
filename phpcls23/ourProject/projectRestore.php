<?php
require '../controller/dbConflig.php';

$banner_id = $_GET ['banner_id'];
$updateQry = "UPDATE banners SET active_status=1 WHERE id = '$banner_id'";
$isSubmited     =  mysqli_query($dbCon, $updateQry);

if ($isSubmited == true) {
    $message   =  "Banner Restore Successfull";
    $color = "success";
     //echo $message;
} else {
    $message    =  "Restore Faild";
}  
header("Location: ./bannerTrushView.php?banner_id={$banner_id}&msg={$message}&clr={$color}");

?>