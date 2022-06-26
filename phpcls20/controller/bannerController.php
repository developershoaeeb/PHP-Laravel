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

    // if (isset($_FILES['image'])) {
    //    // echo $_FILES['image'];
    //    echo "<pre>";
    //    print_r($_FILES['image']);
    //    echo "<pre>";

    //    $file_name = $_FILES['name'];
    //    $file_tmp_name = $_FILES['tmp_name'];
    // } else {
    //     echo "Not Found";
    // }
    if (isset($_FILES['image'])) {

        echo "<pre>";
        print_r($_FILES['image']);
        echo "<pre>";

        $mainImageArray = $_FILES['image'];

        $file_name = $mainImageArray['name'];
        $file_tmp_name = $mainImageArray['tmp_name'];
        $file_size = $mainImageArray['size'];

        $nameArry = explode('.', $file_name);
        // $file_extention_start = strtolower(end($nameArry));

        $file_extention = strtolower(end($nameArry));
        $valid_Extention = array('jpg', 'png', 'jpeg', 'webp');
        $random_File_Name = time().'.'.$file_extention;

        if(in_array($file_extention, $valid_Extention)){

            if ( move_uploaded_file($file_tmp_name, '../uploads/bannerImage/'.$random_File_Name)) {
                
            } else {
                    $message = "Not uploaded";
                }
        }else{
            $message = $file_extention." is not supported";
        } 
    } else {
        $message = "Not Found";
    }
   // $image              =  $_POST['image'];

    $title              =  $_POST['title'];
    $sub_title          =  $_POST['sub_title'];
    $details            =  $_POST['details'];
    
   
    if (empty($title) || empty($sub_title ) || empty($details)) {
        $message = "All fields are required";
    }else{
        $insertQry      =  "INSERT INTO banners (title, sub_title, details, image) VALUES ('{$title}', '{$sub_title}', '{$details}', '{$random_File_Name}')";
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