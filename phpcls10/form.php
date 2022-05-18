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
function filterEduMail($email){
  // $validEmails = ['dui.edu.bd', 'brac.edu.bd', 'nu.edu.bd'];
  $validEmails = array('dui.edu.bd', 'brac.edu.bd', 'nu.edu.bd');
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
  * 
  */

   if (isset($_POST['submitBtn'])){
    $userName = $_POST['userName'];
    $userEmail = $_POST['userEmail'];
    $phone = $_POST['phone'];
    // $password = $_POST['password'];


    if (empty($userName)|| empty($userEmail) || empty($phone)) {
     
      $validationMsg = validate('All fildes ar required');
   
    } else if (filter_var($userEmail, FILTER_VALIDATE_EMAIL) != true) {
     
      $validationMsg = validate('Email is not valid!!', 'warning');
    
    } else if(filterEduMail($userEmail) == false){
    
      $validationMsg = validate('Email is not Edu Mail', 'warning');

    } else{
      $validationMsg = validate('Everything is Okay', 'success');
    }
  }

  ?>
    <div class="container">
        <div class="col-md">
        <!-- <form method="POST" action="insart.php"> -->
        <form method="POST" action="">
          <h1>Registation Form</h1>
          <?php
          if (isset($validationMsg)) {
            echo  $validationMsg;
          }
          ?>
     
            <div class="form-group">
            <label for="InputName">Name</label>
            <input type="text" class="form-control" id="InputName"  name="userName" placeholder="Name">
            </div>

            <div class="form-group">
            <label for="InputEmail1">Email address</label>
            <input type="text" class="form-control" id="userEmail" name="userEmail" placeholder="Enter email" >
            </div>

            <div class="form-group">
            <label for="InputNumber">Phone Number</label>
            <input type="number" class="form-control" name="phone" id="InputNumber" placeholder="Enter Number">
            </div>

            <div class="form-group">
                <label for="InputPassword">Password</label>
                <input type="password" class="form-control" name="password" id="InputPassword" placeholder="Password">
            </div>
              <div class="form-check" style="font-size: 21px !important;">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>

       <button type="submit" name="submitBtn" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
    <strong></strong>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
