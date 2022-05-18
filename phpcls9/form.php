<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>

  </head>
  <body>
  <?php
//  echo $_POST['registardBtn'];
 if (isset($_POST['registardBtn'])) {
         // echo "insart success";
        // echo "<pre>";
       
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];

        if($username == '' || $email == '' || $phone_number == ''){
            // echo "All fields are required";
            echo  '<script> alert ("All fields are required");</script>';
        }else{
            // echo "Every thing is OK!";
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
        } 
 }

  ?>

    <div class="container">
        <div class="col-md">
        <!-- <form method="POST" action="insart.php"> -->
        <form method="POST" action="">
            <div class="form-group">
            <label for="InputName">Name</label>
            <input type="text" class="form-control" id="InputName"  name="username" placeholder="Name">
            </div>

            <div class="form-group">
            <label for="InputEmail1">Email address</label>
            <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Enter email">
            </div>

            <div class="form-group">
            <label for="InputNumber">Phone Number</label>
            <input type="number" class="form-control" name="phone_number" id="InputNumber" placeholder="Enter Number">
            </div>

            <div class="form-group">
                <label for="InputPassword">Password</label>
                <input type="password" class="form-control" name="password" id="InputPassword" placeholder="Password">
            </div>
              <div class="form-check" style="font-size: 21px !important;">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>

       <button type="submit" name="registardBtn" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
    <strong></strong>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
