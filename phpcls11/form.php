<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Hello, world!</title>
    <style>
      form {
  width: 85%;
  margin: auto;
  border: 2px solid #ddd;
  padding: 44px;
}
    </style>

  </head>
  <body>
  <?php
    function validate($message, $alartType ="danger"){
      return "<div class=\"alert alert-{$alartType} alert-dismissible fade show\" role=\"alert\">
      {$message}!
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
      </div>";
    } 
/**
 * Filter Edu Mial for filtaring institution email addresses
 *
 */
function filterEduMail($email, $validEmails){
  // $validEmails = ['dui.edu.bd', 'brac.edu.bd', 'nu.edu.bd'];
  // $validEmails = array('dui.edu.bd', 'brac.edu.bd', 'nu.edu.bd');
  // $validEmails =['hotmail.com', 'outlook.com', 'yahoo.com'];
  $emailArry = explode('@', $email, 2);
  if (in_array($emailArry[1], $validEmails)) {
    return true;
  } else {
    return false;
  }
  // return $emailArry;
  // return $emailArry[1];
}
/**
   * Validation for regular expretion
   */
  function validateusername ($userName){

    // \w = 0-9A-Za-z_
    if (preg_match('/^\w{5,20}$/', $userName)) {
      return true;
    } else {
      return false; 
    }
  }
  /**
   * Old Value for keep old values for fields 
   */

  function oldvalu($fieldName){
   if(isset($_POST[$fieldName])){
     echo $_POST[$fieldName];
    } else {
     echo '';
    }
  }
/**
 * ClearFormData for clear all fields values after success
 */
// function clearFormData(){
//   $_POST = '';
// }
 /**
  * 
  */

   if (isset($_POST['submitBtn'])){
      $userName = $_POST['userName'];
      $userEmail = $_POST['userEmail'];
      $phone = $_POST['phone'];
      $age = $_POST['age'];
      $gender = '';
      $agree_status = '';

      if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
      }
      if (isset($_POST['agree_status'])) {
        $agree_status  = $_POST['agree_status'];
      }
    
  

    // $password = $_POST['password'];

    if (empty($userName)|| empty($userEmail) || empty($phone) || empty($age) || empty($gender)|| empty($agree_status)) {
     
      $validationMsg = validate('All fildes ar required');
   
    } else if (filter_var($userEmail, FILTER_VALIDATE_EMAIL) != true) {
     
      $validationMsg = validate('Email is not valid!!', 'warning');
    
    } else if(filterEduMail($userEmail, ['hotmail.com', 'outlook.com', 'yahoo.com']) == false){
    
      $validationMsg = validate('Email is not Edu Mail', 'warning');

    } else if($age < 18 || $age > 60) {

      $validationMsg = validate('You are Not perfect for this cource  ', 'warning');
   
    } else if(validateusername ($userName) == false) {

      $validationMsg = validate('User name not valid ', 'warning');
    
    }  else{
      $validationMsg = validate('Everything is Okay', 'success');
      // clearFormData();
      $_POST = '';
    }
  }

  




  ?>
    <div class="container" >
        <div class="col-md">
        <!-- <form method="POST" action="insart.php"> -->
        <form method="POST" action="">
          <h1>Registation Form</h1>
          <?php
          if (isset($validationMsg)) {
            echo  $validationMsg;
          }
          ?>
     
            <div class="form-group" >
            <label for="InputName">Name</label>
            <input type="text" class="form-control" id="InputName" value="<?php oldvalu('userName');?>" name="userName" placeholder="Name">
            </div>

            <div class="form-group">
            <label for="InputEmail1">Email address</label>
            <input type="text" class="form-control" id="userEmail" value="<?php oldvalu('userEmail');?>" name="userEmail" placeholder="Enter email" >
            </div>

            <div class="form-group">
            <label for="InputNumber">Phone Number</label>
            <input type="number" class="form-control" name="phone" value="<?php oldvalu('phone');?>" id="InputNumber" placeholder="Enter Number">
            </div>

            <div class="form-group">
            <label for="InputAge">Age</label>
            <input type="number" class="form-control" value="<?php oldvalu('age');?>" name="age" id="InputAge" placeholder="Your Age">
            </div>

            <div class="form-group">
                <label for="InputPassword">Password</label>
                <input type="password" class="form-control" name="password" id="InputPassword" placeholder="Password">
            </div>
            <div class="form-group">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country" name="country" aria-label="Default select example">
                        <option selected>select One</option>
                        <option name="country" value="Bangladesh">Bangladesh</option>
                        <option name="country" value="India">India</option>
                        <option name="country" value="Pakisthan">Pakisthan</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="fieldFive" class="form-label">Gender</label><br>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Others">
                        <label class="form-check-label" for="inlineRadio3">Others</label>
                    </div>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="agree_status" value="yes" id="agreeCheckbox">
                    <label class="form-check-label" for="agreeCheckbox">
                        Are you Agree?
                    </label>
                </div>

       <button type="submit" name="submitBtn" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
    <strong></strong>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
