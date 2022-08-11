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
if(isset($_POST['saveProject'])){
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
    if (isset($_FILES['project_thumb'])) {
        echo "<pre>";
        print_r($_FILES['project_thumb']);
        echo "<pre>";
        $mainImageArray = $_FILES['project_thumb'];
        $file_name = $mainImageArray['name'];
        $file_tmp_name = $mainImageArray['tmp_name'];
        // $file_size = $mainImageArray['size'];
        $nameArry = explode('.', $file_name);
        // $file_extention_start = strtolower(end($nameArry));
        
        $file_extention = strtolower(end($nameArry));
        $valid_Extention = array('jpg', 'png', 'jpeg', 'webp');
        $random_File_Name = time().'.'.$file_extention;
  
        if(in_array($file_extention, $valid_Extention)){
           move_uploaded_file($file_tmp_name, '../uploads/projectThumb/'.$random_File_Name);

        }else{
            $message = $file_extention." is not supported";
        } 
    } else {
        $message = "Not Found";
    }
   // $image              =  $_POST['image'];
    $category_id              =  $_POST['category_id'];
    $project_name          =  $_POST['project_name'];
    $project_link            =  $_POST['project_link'];
    // $project_thumb            =  $_POST['project_thumb'];
    
    if (empty($category_id) || empty($project_name ) || empty($project_link)) {
        $message = "All fields are required";
    }else{
        $insertQry      =  "INSERT INTO our_projects (category_id, project_name, project_link, project_thumb ) VALUES ('{$category_id}', '{$project_name}', '{$project_link}', '{$random_File_Name}')";

        $isSubmited     =  mysqli_query($dbCon, $insertQry);
        if ($isSubmited == true) {
            $message   =  "Project Insert Successfull";
             echo $message;
        } else {
            $message    =  "Faild";
        }  
        //header("Location: ../bannerAdd.php?msg={$message}");
    }
    header("Location: ../ourProject/projectAdd.php?msg={$message}");

}else{
    echo "BYE kochu ";
}

// This is for Update
if(isset($_POST['updateBanner'])){
    $project_id          =  $_POST['project_id'];
    $category_id              =  $_POST['category_id'];
    $project_name          =  $_POST['project_name'];
    $project_link            =  $_POST['project_link'];

   
    if (empty($category_id) || empty($project_name ) || empty($project_link)) {
        $message = "All fields are required";
    }else{
        $updateQry = "UPDATE our_projects SET title= '{$category_id}', sub_title= '{$project_name}', details= '{$project_link}' WHERE id = '{$project_id}'";
        $isSubmited     =  mysqli_query($dbCon, $updateQry);
    
        if ($isSubmited == true) {
            $message   =  "Project Update Successfull";
             echo $message;
        } else {
            $message    =  "Update Faild";
        }  
        //header("Location: ../bannerAdd.php?msg={$message}");
    }
    header("Location: ../ourProject/projectUpdate.php?project_id={$project_id}&msg={$message}");

}else{
    echo "Not Update";
}