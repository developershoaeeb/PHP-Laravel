<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<?php 
if (basename(__DIR__) != 'phpcls23'){
	$baseURL = '../';
	$isInternal = true;
}else{
	$baseURL = '';
	$isInternal = false;
}
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>themelock.com - Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<i class="icon-display4"></i> <span class="visible-xs-inline-block position-right"> Go to website</span>
					</a>
				</li>

				<li>
					<a href="#">
						<i class="icon-user-tie"></i> <span class="visible-xs-inline-block position-right"> Contact admin</span>
					</a>
				</li>

				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-cog3"></i>
						<span class="visible-xs-inline-block position-right"> Options</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

                    <?php
                    require_once('controller/dbConflig.php');

                    if (!empty($_POST)) {
						unset($_SESSION['errorMsg']);

                       $email = $_POST['email'];
                       $password = $_POST['password'];
                    //    echo $email . $password;

                    $selectQry = "SELECT * FROM admins WHERE email='{$email}' AND password = '{$password}' ";
                    $resultQry = mysqli_query($dbCon, $selectQry);

                    $checkResult = mysqli_fetch_array($resultQry);

                    echo "<pre>";
                    print_r($checkResult);
                    echo "</pre>";

                    if (!empty($checkResult)) {
                        $_SESSION['userName'] = $checkResult['shoaeeb'];
                        $_SESSION['userEmail'] = $checkResult['email'];
                        $_SESSION['successMsg'] = "Login Success";
						header('Location:index.php');
                    } else {
                        $_SESSION['errorMsg'] = " your Email and Password does not match ";
                        // echo " your Email and Password does not match " ;
                    }
                    // var_dump($checkResult);
                    /**
                     * 
                        Array
                        (
                            [0] => 1
                            [id] => 1
                            [1] => shoaeeb
                            [name] => shoaeeb
                            [2] => shoaeeb@gmail.com
                            [email] => shoaeeb@gmail.com
                            [3] => 123456
                            [password] => 123456
                        )
                     */

                    }
                    ?>

					<!-- Simple login form -->
					<form action="" method="post" >
						<div class="panel panel-body login-form">
						<?php
						if (!empty($_SESSION['errorMsg'])) {
							echo "<h6>{$_SESSION['errorMsg']}</h6>";
							unset($_SESSION['errorMsg']);
						}
						
						?>

							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="email" name="email" class="form-control" placeholder="Enter your email">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" name="password" class="form-control" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group">
                                <!-- <input type="submit" class="btn btn-primary btn-block" value="Login" name="LoginButton"> -->
								<button type="submit" class="btn btn-primary btn-block" name="LoginButton">Sign in <i class="icon-circle-right2 position-right"></i></button>
							</div>

							<div class="text-center">
								<a href="login_password_recover.html">Forgot password?</a>
							</div>
						</div>
					</form>
					<!-- /simple login form -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>