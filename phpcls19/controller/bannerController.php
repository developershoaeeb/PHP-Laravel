<?php
//echo 'Hello';
//var_dump($_POST['title']);
//var_dump($_POST);

// if(isset($_POST['saveBanner'])){
//     echo "Hi";
// }else{
//     echo "Bye";
// }
require 'dbConflig.php';
//This for Submit
if(isset($_POST['saveBanner'])){
    $title              =  $_POST['title'];
    $sub_title          =  $_POST['sub_title'];
    $details            =  $_POST['details'];
    $image              =  $_POST['image'];
   
    if (empty($title) || empty($sub_title ) || empty($details)) {
        $message = "All fields are required";
    }else{
        $insertQry      =  "INSERT INTO banners (title, sub_title, details) VALUES ('{$title}', '{$sub_title}', '{$details}')";
        $isSubmited     =  mysqli_query($dbCon, $insertQry);
    
        if ($isSubmited == true) {
            $message   =  "Banner Insert Successfull";
             echo $message;
        } else {
            $message    =  "Faild";
        }  
        //header("Location: ../bannerAdd.php?msg={$message}");
    }
    header("Location: ../bannerAdd.php?msg={$message}");

}else{
    echo "BYE";
}

// This is for Update
if(isset($_POST['updateBanner'])){
    $banner_id          =  $_POST['banner_id'];
    $title              =  $_POST['title'];
    $sub_title          =  $_POST['sub_title'];
    $details            =  $_POST['details'];
    $image              =  $_POST['image'];
   
    if (empty($title) || empty($sub_title ) || empty($details)) {
        $message = "All fields are required";
    }else{
        $updateQry = "UPDATE banners SET title= '{$title}', sub_title= '{$sub_title}', details= '{$details}' WHERE id = '{$banner_id}'";
        $isSubmited     =  mysqli_query($dbCon, $updateQry);
    
        if ($isSubmited == true) {
            $message   =  "Banner Update Successfull";
             echo $message;
        } else {
            $message    =  "Update Faild";
        }  
        //header("Location: ../bannerAdd.php?msg={$message}");
    }
    header("Location: ../bannerUpdate.php?banner_id={$banner_id}&msg={$message}");

}else{
    echo "Not Update";
}